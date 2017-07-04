<div class="event-cell short-info">
                      
                        <h2>Upcomming event</h2>
                        <?php $latest=runquery("SELECT","*","events",""," ORDER BY `startdate` DESC"); ?>
                        <ul>
                        <a href="index.php?mid=16&en=<?php echo $latest[0]['id'] ?>"><h3><?php echo $latest[0]['title'] ?></h3></a>
                          <li>
                            <i class="fa fa-clock-o"></i>
                            <span>Timing:</span>
                            <p><?php echo $latest[0]['starttime'] ?> to <?php echo $dows['endtime'] ?></p>
                          </li>
                          <li>
                            <i class="fa fa-map-marker"></i>
                            <span>Address:</span>
                            <p><?php echo $latest[0]['address'] ?></p>
                          </li>
                          <li>
                            <i class="fa fa-calendar-o"></i>
                            <span>Event Type:</span>
                            <p><?php echo $latest[0]['eventtype'] ?></p>
                          </li>
                          <li>
                            <i class="fa fa-users"></i>
                            <span>Audience</span>
                            <p><?php echo $latest[0]['audience_type'] ?></p>
                          </li>
                        </ul>
                       <h2>Faq's</h2>
                       <?php include('sidebar.php'); ?>
                      </div>