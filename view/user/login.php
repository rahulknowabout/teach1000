<?php session_start(); ?>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Login <small> <a href = "index.php?f=user&t=signup">Register</a> </small>
			<br/>
            <?php 
				if( isset( $_SESSION['log'] ) ) {
			          echo $_SESSION['log'];
				?><a href="">Edit Profile</a>	  
					  unset( $_SESSION['log'] );
				}	          
				?>
          </h1>
         
        </section>
        
       <!-- Main content -->  
   <section class="content">      
        
        
    <div class="row">
            <!-- left column -->
      
        
            <!-- right column -->
            <div class="col-md-12">
              <!-- general Table -->
             <div class="box">
                <div class="box-header"></div><!-- /.box-header -->
                <div class="box-body">
				
				<div class="form-group">
                	<form action="index.php?f=user&t=login&act=act" method="post">
						<table>
							<tr>
								<td>
									Email Id
								</td>
								<td>
									<input type = "text" name="emaillog" id = "emaillog" value="" required />
								</td>
						 </tr>
						<tr>
							<td>
								Password
							</td>
							<td>
								<input type = "password" name="passlog" id = "passlog" value="" required />
							</td>
					  </tr>
					  <tr>
							<td>
								<input type = "submit" name="login" id = "login" value="Login" />
							</td>
					</tr>
				</table>
		</form>
				</div> 
	
                </div><!-- /.box-body -->
              </div>
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->     
        
        
        
     </section><!-- /.content -->      
   </div><!-- /.content-wrapper -->