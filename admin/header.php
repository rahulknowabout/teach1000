<?php  
error_reporting(E_ALL);
session_start();

if (!isset($_SESSION['ADMIN']))
{
   header("location: index.php");
	exit();
}
include("code/functions.php");  
include("code/kfun.php");  

if(isset($_POST['create_arti']) || isset($_POST['update_arti'])){ create_arti();}



if(isset($_POST['add_cat'])){ add_cat();}


if(isset($_POST['create_faq'])){ create_faq();}
if(isset($_POST['updte_news'])){ updte_news();}
if(isset($_POST['send_newsletter'])){ send_newsletter();}

if(isset($_POST['create_answer']) || isset($_POST['update_faq'])){ create_answer();}


if(isset($_POST['add_menu'])){ add_menu();}
if(isset($_POST['update_cat'])){ update_cat();}
if(isset($_POST['update_menu'])){ update_menu();}
if(isset($_POST['upload_logo'])){ upload_logo();}
if(isset($_POST['update_package'])){update_package();}
if(isset($_POST['add_package'])){add_package();}
if(isset($_POST['add_rules'])){add_rules();}
if(isset($_POST['update_rules'])){update_rules();}

if(isset($_POST['saveorder'])){saveorder();}
if(isset($_POST['add_banner'])){ add_banner_replace();}
if(isset($_POST['update_banner'])){ update_banner_replace();}


if(isset($_POST['updte_newsrevert'])){ update_revert_mail_news();}
if(isset($_POST['updte_about'])){ update_revert_mail_about();}
if(isset($_POST['updte_ontime'])){ update_revert_mail_onreg();}
if(isset($_POST['updte_after'])){ update_revert_mail_afterreg();}
if(isset($_POST['updte_buss'])){ update_revert_mail_addbuss();}
if(isset($_POST['updte_adminmail'])){ updte_adminmail();}
if(isset($_POST['updte_jobs'])){ update_revert_mail_jobs();}
if(isset($_POST['add_category'])){ insert_jobs_category();}
if(isset($_POST['updte_quote'])){ update_revert_mail_quote();}
if(isset($_POST['updte_payment_mail'])){ update_payment_mail();}





 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Urban Tradies | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    
     <!-- DATA TABLES -->
    <link href="../../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo"><b>Urban</b>Tradies</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>

                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Create a nice theme
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">Admin</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      About User
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="code/logout.php" class="btn btn-default btn-flat">Sign Out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Admin</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
         
            <li class="header">MAIN NAVIGATION</li>
            <li <?php add_class('home.php')  ?>>
              <a href="home.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
             
            </li>
            <li <?php add_class('category.php')  ?>>
              <a href="category.php">
                <i class="fa fa-files-o"></i>
                <span>Category</span>
                
              </a>
              
            </li>
            <li <?php add_class('menu.php')  ?>>
              <a href="menu.php">
                <i class="fa fa-th"></i> <span>Front Menu</span> 
              </a>
            </li>
			
			
			
			   <li class="treeview">
              <a href="package.php">
                <i class="fa fa-laptop"></i>
                <span>Users</span>
                <i class="fa fa-angle-left pull-right"></i>
               
              </a>
               <ul class="treeview-menu">
                <li><a href="users.php"><i class="fa fa-circle-o"></i> Registered User's</a></li>
                <li><a href="quote.php"><i class="fa fa-circle-o"></i> User Quote's</a></li>
               
              </ul>
              
                        </li>
	
                         <li class="treeview">
              <a href="business.php">
                <i class="fa fa-building-o"></i>
                <span>Business</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              
                <li <?php add_class('business.php')  ?>>
              <a href="business.php">
                <i class="fa fa-th"></i> <span>Business</span> 
              </a>
            </li>
              
                 <li <?php add_class('paypal.php')  ?>>
              <a href="paypal.php">
                <i class="fa fa-th"></i> <span>Transaction Detials</span> 
              </a>
            </li> 
               
              </ul>
                        </li>
                        
                         
                        
                        
                        
                         <li class="treeview">
              <a href="package.php">
                <i class="fa fa-columns"></i>
                <span>Packages</span>
                <i class="fa fa-angle-left pull-right"></i>
               
              </a>
               <ul class="treeview-menu">
                <li><a href="package.php"><i class="fa fa-circle-o"></i> Packages</a></li>
                <li><a href="rules.php"><i class="fa fa-circle-o"></i> Rules</a></li>
               
              </ul>
              
                        </li>
                        
                  <li <?php add_class('banner.php')  ?>>
              <a href="banner.php">
                <i class="fa fa-th"></i> <span>Banners</span> 
              </a>
            </li>
                            <li class="treeview">
              <a href="artical.php">
                <i class="fa fa-columns"></i>
                <span>Content</span>
                <i class="fa fa-angle-left pull-right"></i>
               
              </a>
         
            <ul class="treeview-menu">
             <li <?php add_class('artical.php')  ?>>
              <a href="artical.php">
                <i class="fa fa-th"></i> <span>All Pages Content</span> 
              </a>
            </li>
            <li><a href="homie.php"><i class="fa fa-circle-o"></i> HomePage Content</a></li>
            </ul>
            
            <li <?php add_class('faq.php')  ?>>
              <a href="faq.php">
                <i class="fa fa-th"></i> <span>Manage FAQ</span> 
              </a>
            </li>  
             <li <?php add_class('newsletter.php')  ?>>
              <a href="newsletter.php">
                <i class="fa fa-th"></i> <span>Send Newsletter</span> 
              </a>
            </li>  
             <li <?php add_class('jobs.php')  ?>>
              <a href="jobs.php">
                <i class="fa fa-th"></i> <span>Career</span> 
              </a>
            </li> 
            
             <li class="treeview">
              <a href="Settings.php">
                <i class="fa fa-laptop"></i>
                <span>Settings</span>
                <i class="fa fa-angle-left pull-right"></i>
               
              </a>
               <ul class="treeview-menu">
                <li><a href="Settings.php"><i class="fa fa-circle-o"></i>Settings</a></li>
                <li><a href="blog.php"><i class="fa fa-circle-o"></i>Blog Settings</a></li>
               
              </ul>
             
            
              
                        </li>
	      
                        
           
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>