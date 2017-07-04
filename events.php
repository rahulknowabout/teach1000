<div class="clearfix"></div>
<div class="eventdiv" >
<div  class="eventinner">
<h3>Latest  <span class="thcolor">Events</span> </h3>
<?php $rowasdf =  runquery("SELECT","*","events",""," ORDER BY `startdate` DESC limit 0,1"); ?>
   <h2 style="opacity:1"><a href="index.php?mid=16&en=<?php echo $rowasdf[0]['id']   ?>"><?php echo $rowasdf[0]['title']; ?></h2>
<p><?php echo $rowasdf[0]['short_dis']; ?></p></a>
    </div><div  class="eventleft">
<?php
$ro =  runquery("SELECT","*","events",""," where id='".$rowasdf[0]['id']."'");
 
 $timestamp = date("m/d/Y",strtotime($ro[0]['startdate']));

 ?>
<div  class="eventright"><h3>Latest Event Countdown</h3><p><?php echo $ro[0]['title']; ?> </p><br />
<script type="text/javascript">
	var js=jQuery.noConflict();
js(document).ready(function() { 
	js('.countdown').downCount({
		date: '<?php echo $timestamp; ?> 12:00:00',
  offset: +1
	});
});
</script>
<style>

</style>
<ul class="countdown">
		<li>
			<span class="days">00</span>
			<p class="days_ref">days</p>
		</li>
		<li>
			<span class="hours">00</span>
			<p class="hours_ref">hours</p>
		</li>
		<li>
			<span class="minutes">00</span>
			<p class="minutes_ref">minutes</p>
		</li>
		<li>
			<span class="seconds last">00</span>
			<p class="seconds_ref">seconds</p>
		</li>
	</ul>

</div>
    </div></div>
