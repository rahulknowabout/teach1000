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
            <li <?php add_class('menu')  ?> >
              <a href="index.php?f=menu&t=menu">
                <i class="fa fa-th"></i> <span>Front Menu</span> 
              </a>
            </li>
			
			
			
			   <li class="treeview">
              <a href="index.php?f=menu">
                <i class="fa fa-laptop"></i>
                <span>Users</span>
                <i class="fa fa-angle-left pull-right"></i>
               
              </a>
               <ul>
                <li><a href="index.php?f=user&t=users"><i class="fa fa-circle-o"></i> Registered User's</a></li>
				<li><a href ="view/user/usersetting.php"><i class="fa fa-circle-o"></i>UserSetting</a></li>
				<li><a href ="index.php?f=user&t=usergroup"><i class="fa fa-circle-o"></i>Usergroup</a></li>
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
              <a href="index.php?f=banner&t=banner">
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
              <a href="index.php?f=content&t=artical_cat_list">
                <i class="fa fa-th"></i> <span>Article Category</span> 
              </a>
            </li>
            <li><a href="index.php?f=content&t=artical_list"><i class="fa fa-circle-o"></i>Artical</a></li>
            </ul>
            
            <li <?php add_class('faq.php')  ?>>
              <a href="faq.php">
                <i class="fa fa-th"></i> <span>Manage FAQ</span> 
              </a>
            </li>  
             <li <?php add_class('newsletter.php')  ?>>
              <a href="index.php?f=newsletter&t=newsletter">
                <i class="fa fa-th"></i> <span>Send Newsletter</span> 
              </a>
            </li>  
             <li <?php add_class('jobs.php')  ?>>
              <a href="index.php?f=carrer&t=carrer">
                <i class="fa fa-th"></i> <span>Career</span> 
              </a>
            </li> 
            
             <li class="treeview">
              <a href="index.php?f=setting&t=setting">
                <i class="fa fa-laptop"></i>
                <span>Settings</span>
                <i class="fa fa-angle-left pull-right"></i>
               
              </a>
               <ul class="treeview-menu">
                <li><a href="index.php?f=setting&t=setting"><i class="fa fa-circle-o"></i>Settings</a></li>

               
              </ul>
             
            
              
                        </li>
	      
                        
           
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside> <?php ob_start();?>