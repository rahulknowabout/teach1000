<?php ob_start();
session_start();
error_reporting(0);
if( !isset( $_SESSION['secure'] ) )
{
	header( 'location:login.php' );
}
//echo "<pre>"; print_r($_POST); die();
include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/models/con_db.php'); 

include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/models/functiondb.php');

include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/code/functions.php');

include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/code/kfun.php');

include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/functions.php');

//include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/mjs/menujs.js');

if( isset( $_REQUEST['onlyupload'] ) && $_REQUEST['onlyupload'] == "y" )
{
	if(isset($_FILES['upload'])){
		$filen = $_FILES['upload']['tmp_name']; 
	//	echo $filen."<<";
		$con_images = "./images/".$_FILES['upload']['name'];
		
		move_uploaded_file($filen, $con_images );
		$url = "./images/".$_FILES['upload']['name'];
		
		
	   $funcNum = $_GET['CKEditorFuncNum'] ;
	   // Optional: instance name (might be used to load a specific configuration file or anything else).
	   $CKEditor = $_GET['CKEditor'] ;
	   // Optional: might be used to provide localized messages.
	   $langCode = $_GET['langCode'] ;
		
	   // Usually you will only assign something here if the file could not be uploaded.
	   $message = '';
	   echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '$message');</script>";
	}
}
if( isset( $_GET['f'] ) && isset( $_GET['t'] ) ){

	if( $_GET['f'] == "ajax" && $_GET['t'] == "ajaxmenu" )	{
		include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
		 die();
	}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Teach1000</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.1.css" />
    <link href="css/icheck/flat/green.css" rel="stylesheet" />
    <link href="css/floatexamples.css" rel="stylesheet" type="text/css" />


    <script src="js/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">
			<!-- Left navigation -->
            <?php
				include("lefti.php");
			?>
            <!-- /Left navigation -->
            

            <!-- Top navigation -->
            <?php
				include("top.php");
			?>
            <!-- /Top navigation -->
			
			 <!-- Right navigation -->
			 
			 <div class="right_col" role="main">
			 <?php
			 	$cls = "";
				$showMsg = "";
				if( isset( $_SESSION['emsg'] ) && $_SESSION['emsg'] != "" )
				{
					$cls = "alert alert-warning alert-dismissible fade in";
					$showMsg	=	$_SESSION['emsg'];
					unset( $_SESSION['emsg'] );
				} else if( isset( $_SESSION['smsg'] ) && $_SESSION['smsg'] != "" )
				{
					$cls = "alert alert-success alert-dismissible fade in";
					$showMsg	=	$_SESSION['smsg'];
					unset( $_SESSION['smsg'] );
				}
				if( $cls != "" && $showMsg != "" )
				{
			?>
					<div class="<?php echo $cls; ?>" role="alert">
						<?php echo $showMsg; ?>
					</div>
			<?php		
				}
			?>
            <?php
				if( isset( $_GET['f'] ) && isset( $_GET['t'] ) )
				{
					if( isset( $_GET['f'] ) && $_GET['f'] == 'user' && isset( $_GET['t'] ) && $_GET['t'] == "usergroup") {
				
					include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
				
					}
				
					if( $_GET['f'] == "user" && $_GET['t'] == "usergroupadd" && !isset(  $_GET['up'] ) ) {   
				
					include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
				
					}
				
					if( $_GET['f'] == "user" && $_GET['t'] == "usergroupadd" && isset( $_GET['up'] ) ) {
				
					include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
				
					}
				
					if( $_GET['f'] == "user" && $_GET['t'] == "users" && !isset( $_GET['del'] )  && !isset( $_GET['bid'] ) && !isset( $_GET['edi'] ) && !isset( $_GET['uid'] ) && !isset( $_GET['a'] ))	{
				
					include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
				
					}
				
					if( $_GET['f'] == "user" && $_GET['t'] == "useraddedit" && isset( $_GET['uid'] )  && isset( $_GET['edi'] ) && !isset( $_GET['a'] ))	{
				
					include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
				
					}
				
					if( $_GET['f'] == "user" && $_GET['t'] == "useraddedit" && !isset( $_GET['uid'] )  && !isset( $_GET['edi'] ))  {
				
					include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
				
					}
				
					if( $_GET['f'] == "content" && $_GET['t'] == "artical_cat" && !isset ( $_GET['act'] ) )	{
				
						include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
				
					}
				
					if( $_GET['f'] == "content" && $_GET['t'] == "artical_cat_list")	{
						include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
					}
				
					if( $_GET['f'] == "content" && $_GET['t'] == "artical_list")	{
				
						include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
					}
				
					if( $_GET['f'] == "content" && $_GET['t'] == "artical" && !isset ( $_GET['act'] ) )	{
				
						
						include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
				
					}
				
					if( $_GET['f'] == "menu" && $_GET['t'] == "menu" && !isset ( $_GET['act'] ) )	{
						include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
				
					}
				
					if( $_GET['f'] == "banner" && $_GET['t'] == "banner" && !isset ( $_GET['act'] ) )	{
						include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
				
					}
				
					if( $_GET['f'] == "newsletter" && $_GET['t'] == "newsletter" && !isset ( $_GET['act'] ) )	{
				
						
						include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
				
					}
					
					if( $_GET['f'] == "newsletter" && $_GET['t'] == "newsletteradd" && !isset ( $_GET['act'] ) )	{
				
						
						include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
				
					}
			
				
					if( $_GET['f'] == "carrer" && $_GET['t'] == "carrer" && !isset ( $_GET['act'] ) )
					{
						include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
				
					}
				
					if( $_GET['f'] == "setting" && $_GET['t'] == "setting" && !isset ( $_GET['act'] ) )
					{
						include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
					}
					
					if( $_GET['f'] == "events" && $_GET['t'] == "events" && !isset ( $_GET['act'] ) )
					{
						include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
					}
					if( $_GET['f'] == "events" && $_GET['t'] == "events_list" && !isset ( $_GET['act'] ) )
					{
						include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
					}
					if( $_GET['f'] == "imagegallary" && $_GET['t'] == "imagegallary" && !isset ( $_GET['act'] ) )	
					{
		              
					  	include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
	                }
				    if( $_GET['f'] == "faq" && $_GET['t'] == "faq" && !isset ( $_GET['act'] ) )	
					{
		              
					  	include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
	                }
					  if( $_GET['f'] == "faq" && $_GET['t'] == "faqadd" && !isset ( $_GET['act'] ) )	
					{
		              
					  	include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
	                }
					  if( $_GET['f'] == "newsletter" && $_GET['t'] == "sendnewsletter" && !isset ( $_GET['act'] ) )	
					{
		              
					  	include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/view/'.$_GET['f'].'/'.$_GET['t'].'.php');
	                }
				}else
				{
					include("right.php");
				}
				if( isset ( $_GET['act'] ) )
				{
					if( $_GET['f'] == "user" && $_GET['t'] == "users"  && isset( $_GET['edi'] ) )	{
					
						include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
					}
					
					if( $_GET['f'] == "user" && $_GET['t'] == "users"  && isset( $_GET['bid'] )  )  {
					
						include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
					}
					
					if( isset( $_GET['del'] ) && $_GET['del'] != "" && $_GET['f'] == "user" && $_GET['t'] == "ugb") {
					
						include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
					 }
					
					if( $_GET['f'] == "user" && $_GET['t'] == "ugb") {
					
						include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
					}
					
					if( $_GET['f'] == "user" && $_GET['t'] == "users"  && isset( $_GET['del'] ) )  {
					
						include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
					}
					
					if( $_GET['f'] == "content" && $_GET['t'] == "artical")	{
						include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
					}
					
					if( $_GET['f'] == "content" && $_GET['t'] == "artical_cat")	{
						include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
					}
					
					if( $_GET['f'] == "menu" && $_GET['t'] == "menuac")	{
						include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
					}
					
					if( $_GET['f'] == "banner" && $_GET['t'] == "bannerac")	{
						include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
					}
					
					if( $_GET['f'] == "newsletter" && $_GET['t'] == "newsletter")
					{
						include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
					}
					if( $_GET['f'] == "events" && $_GET['t'] == "events")
					{
						include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
					}
					
					if( $_GET['f'] == "carrer" && $_GET['t'] == "carrer")
					{
						include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
					}
					 if( $_GET['f'] == "imagegallary" && $_GET['t'] == "imagegallary" )	
					 {
		              
					  	include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
	                 }
					 if( $_GET['f'] == "faq" && $_GET['t'] == "faq" )	
					{
		              
					  	include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
	                }
					 if( $_GET['f'] == "newsletter" && $_GET['t'] == "newslettersend" )	
					{
		              
					  	include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
	                }
					 if( $_GET['f'] == "setting" && $_GET['t'] == "basicsetting" )	
					{
		              
					  	include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
	                }
					 if( $_GET['f'] == "setting" && $_GET['t'] == "mailsetting" )	
					{
		              
					  	include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
	                }
					if( $_GET['f'] == "setting" && $_GET['t'] == "paymentsetting" )	
					{
		              
					  	include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/'.$_GET['f'].'/'.$_GET['t'].'.php');
	                }
			
			
				}
			?>
				 <!-- footer content -->
                <footer>
                    <div class="">
                        <p class="pull-right">&nbsp;
                            <span class="lead"> <i class="fa fa-book"></i> Teach1000 </span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
			</div>
            <!-- /Right navigation -->
        </div>


    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="js/bootstrap.min.js"></script>

    <!-- chart js -->
    <script src="js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>
    <!-- gauge js -->
    <script type="text/javascript" src="js/gauge/gauge.min.js"></script>
    <script type="text/javascript" src="js/gauge/gauge_demo.js"></script>
    <!-- daterangepicker -->
    <script type="text/javascript" src="js/moment.min2.js"></script>
    <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>
    <!-- sparkline -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>

    <script src="js/custom.js"></script>
    <!-- skycons -->
    <script src="js/skycons/skycons.js"></script>

    <!-- flot js -->
    <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
    <script type="text/javascript" src="js/flot/jquery.flot.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.orderBars.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.time.min.js"></script>
    <script type="text/javascript" src="js/flot/date.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.spline.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.stack.js"></script>
    <script type="text/javascript" src="js/flot/curvedLines.js"></script>
    <script type="text/javascript" src="js/flot/jquery.flot.resize.js"></script>

    <!-- flot -->

    
    <!-- /flot -->
    <!--  -->
    <script>
        $('document').ready(function () {
            $(".sparkline_one").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
                type: 'bar',
                height: '40',
                barWidth: 9,
                colorMap: {
                    '7': '#a1a1a1'
                },
                barSpacing: 2,
                barColor: '#26B99A'
            });

            $(".sparkline_two").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
                type: 'line',
                width: '200',
                height: '40',
                lineColor: '#26B99A',
                fillColor: 'rgba(223, 223, 223, 0.57)',
                lineWidth: 2,
                spotColor: '#26B99A',
                minSpotColor: '#26B99A'
            });

            var doughnutData = [
                {
                    value: 30,
                    color: "#455C73"
                },
                {
                    value: 30,
                    color: "#9B59B6"
                },
                {
                    value: 60,
                    color: "#BDC3C7"
                },
                {
                    value: 100,
                    color: "#26B99A"
                },
                {
                    value: 120,
                    color: "#3498DB"
                }
    ];
            var myDoughnut = new Chart(document.getElementById("canvas1").getContext("2d")).Doughnut(doughnutData);


        })
    </script>
    <!-- -->
    <!-- datepicker -->
    <script type="text/javascript">
        $(document).ready(function () {

            var cb = function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
            }

            var optionSet1 = {
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                buttonClasses: ['btn btn-default'],
                applyClass: 'btn-small btn-primary',
                cancelClass: 'btn-small',
                format: 'MM/DD/YYYY',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Clear',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            };
            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
            $('#reportrange').daterangepicker(optionSet1, cb);
            $('#reportrange').on('show.daterangepicker', function () {
                console.log("show event fired");
            });
            $('#reportrange').on('hide.daterangepicker', function () {
                console.log("hide event fired");
            });
            $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
            });
            $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                console.log("cancel event fired");
            });
            $('#options1').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
            });
            $('#options2').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
            });
            $('#destroy').click(function () {
                $('#reportrange').data('daterangepicker').remove();
            });
        });
    </script>
    <!-- /datepicker -->

    <!-- moris js -->
    <script src="js/moris/raphael-min.js"></script>
    <script src="js/moris/morris.js"></script>
    
    <!-- skycons -->
    <script>
        var icons = new Skycons({
                "color": "#73879C"
            }),
            list = [
                "clear-day", "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);

        icons.play();
    </script>
    
</body>

</html>