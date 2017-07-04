<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Article Category</title>
</head>
<body>
<?php if( isset( $_GET['uid'] ) && isset($_GET['edi']) ) { 
		  $whe = "WHERE id = ".$_GET['uid']."";
		 $row = runquery('SELECT','*','artical_cat','',$whe);   }         ?>
<div class="content-wrapper">
       <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Artical Category 
            <small>Control panel</small>
          </h1>
         </section>
		 <br/>
       <section class="content">      
        
        
    <div class="row">
            <!-- left column -->
     
              <!-- general form elements -->
        <div class="box box-primary">
         <form action="index.php?f=controller&t=artical_cat&act=act" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control" name = "atr_cat" value="<?php  if( isset( $_GET['uid'])  && isset($_GET['edi'] )){ echo $row['0']['atr_cat'];  }  ?>" placeholder="Article_Category"/>
                    </div>
                    <div class="form-group">
                    	<input type = "text" class = "form-control" name="atr_cat_alias" value="<?php  if( isset( $_GET['uid'])  && isset($_GET['edi'] )){ echo $row['0']['atr_cat'];  }  ?>" placeholder="Alias" disabled="disabled"/>
						<input type = "hidden" name = "uid" id = "uid" value="<?php if( isset( $_GET['uid']) && isset($_GET['edi']) ){ echo $_REQUEST['uid']; } ?>"/>
                    </div>
                   
                  
                    <input class="btn bg-olive margin" type="submit" value="<?php  if( isset( $_GET['uid'])  && isset($_GET['edi'] )){ echo "Update";  } else { echo "Add"; }  ?>" name="add_atr_cat" />
                  </form>
                  
                  </div>
                  
                   
              </div>
            </div>
                 
                      
</body>
</html>
