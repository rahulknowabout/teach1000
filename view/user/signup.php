<?php  
//include($_SERVER['DOCUMENT_ROOT'].'/teach1000/admin/controller/functions.php'); 
 ?>	
 <script language="javascript">
function signstate(str)
{
//alert('heelo');
 if (str == "") {
	                    
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
	
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			      // alert('heelo');
				//document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
             document.getElementById("divclas").innerHTML = xmlhttp.responseText;
            }else
			{
			
			}
        }
        xmlhttp.open("GET","http://localhost/teach1000/admin/code/search.php?statesignup="+str,true);
        xmlhttp.send();
    }
	
}
</script>
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            User Registration
            
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
                	 <form action="index.php?f=user&t=user&act=act" method = "post" enctype="multipart/form-data">
				 		<div class="formpart">

							<div class="onebox">

								<div class="namebox">
									<label class="labltxt">Email   :</label>
								</div>
									
								<div class="inputpart">
                                  <input type = "text" name="u_email" id = "u_email" value="" required />
                              </div>
							 </div> 
							 <div class="twobox">
							   <div class="namebox">
									<label class="labltxt">Password  :</label>
								</div>

							<div class="inputpart">
								<input type = "password" name="u_password" id = "u_password" value="" required />
							</div>
									&nbsp;<label id="passmsg" style="color:red"></label>
							</div>
                           <div class="threebox">
                              <div class="namebox">
								<label class="labltxt">Confirm Password  :</label>
						       </div>

						  <div class="inputpart">
							<input type="password" class="inputtxt" name="u_c_password" id="u_c_password" required />
						 </div>

					     </div>
						
						<div class="fourbox">


							<div class="querybox">
								<label class="querytxt">First Name :</label>
							</div>
						<div class="inputpart">
                            <input type="text" class="inputtxt" name="u_f_name"  required/>
                        </div>

                         </div>	
						 	
					
					
					<div class="fivebox">

							<div class="querybox">
							  <label class="querytxt">Last Name :</label>
							</div>

								<div class="inputpart">
									<input type="text" class="inputtxt" name="u_l_name" required />
							</div>

                           </div>
					</div>
					<div class="sixbox">

						<div class="querybox">
								<label class="querytxt">Contact Number :</label>
					    </div>

						<div class="inputpart">
							<input type="number" class="inputtxt" name="u_c_no" required />
						</div>
						</div>



					
					<div class="thridpart">

						<h2>Profile Information</h2>

						<span>Profile Photo</span>

						<div class="miniphomain">
							<div class="leftprt">
								<div id="imagediv">
									<img src="./img/-50x50.png" id="u_img" />
								</div>
							</div>

							<div class="rightprt">

									<input type="file" name="inputimage" id="inputimage" class="userbutton"/>

							</div>
							
						</div>
			             



						<div class="thirdboxone">

							<div class="namebox">
								<label class="labltxt">Profile Name  :</label>
							</div>

						<div class="inputpart">
								<input type="text" class="inputtxt" name="u_p_name" id="u_p_name" onChange="setpname();" required />
						</div>

						</div>
						<div class="thirdboxthree">

                             <div class="namebox">
                            <label class="labltxt">Postcode :</label>
                          </div>
						  <div class="thirdinn">

                          <div class="inputpart">
                            <input type="text" class="inputtxt" name="u_postcode" id="u_postcode"  required />
                         </div>

                        </div>
						<div class="thirdboxfour">

							<div class="namebox">
								<label class="labltxt">State :</label>
							</div>


								<div class="inputpart">
										<input type="hidden" name="root" value="<?php echo buildurl(); ?>" id="root">

										<select class="property" name="u_state" onchange="signstate(this.value)" required>
											<?php getstate() ?>



										</select>

									</div>
								</div>	
											
								<div id="divclas"></div>



								<div class="cheackboxmain">
									<input type="checkbox" class="cheack"  name="yes" required/>


									<div class="nameboxcheck">
										<label class="labltxtch">I'd like to receive updates and news from urbantradies</label>
									</div>
									</div>




									<div class="button">
											<input type="submit" name="submit" value="sign-up" class="userbutton" />
 
									</div>


							</div>
				 </form>
				</div> 
                </div><!-- /.box-body -->
              </div>
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->     
        
        
        
     </section><!-- /.content -->      
   </div><!-- /.content-wrapper -->