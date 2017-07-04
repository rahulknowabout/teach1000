<?php

/*---------------------------------------------
  MAIAN WEBLOG v4.0
  Written by David Ian Bennett
  E-Mail: support@maianscriptworld.co.uk
  Website: www.maianscriptworld.co.uk
  This File: Administration Header
----------------------------------------------*/

if (!defined('PARENT')) {
  exit;
} 

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $msg_charset; ?>">
<title><?php echo $msg_script . " " . $msg_script2 . " " . $msg_header12; ?></title>
<script type="text/javascript" src="js/js_code.js"></script>
<script type="text/javascript" src="../js/overlib.js"><!-- overLIB (c) Erik Bosrup --></script>
<link href="css/css.css" rel="stylesheet" type="text/css">
<?php
if ($cmd!='login' && !ENABLE_DD_MENU)
{
?>
<link href="css/menu.css" rel="stylesheet" type="text/css">
<script src="js/mmenu.js" type="text/javascript"></script>
<script src="js/menuItems.js.php" type="text/javascript">

/***********************************************
* Omni Slide Menu script - John Davenport Scheuer: http://home.comcast.net/~jscheuer1/
* very freely adapted from Dynamic-FX Slide-In Menu (v 6.5) script- by maXimus
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full original source code
***********************************************/

</script>
<?php
}
?>
</head>

<body<?php echo ($cmd=='login' ? ' onload="document.MWform.username.focus();"' : ''); ?>>
<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>
<div align="center">
<table  cellpadding="0" width="100%" cellspacing="1" border="0" style="border: 1px solid #000000;background-color:#F0F6FF" align="center">
<tr>
    <td<?php echo ($cmd!='login' ? ' colspan="2"' : ''); ?>>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
    
    </table>
    </td>
</tr>
<?php
// Which navigation menu are we loading?
if (ENABLE_DD_MENU)
{
?>
<tr>
    <td <?php echo ($cmd=='login' ? 'align="left" class="menutable"' : 'align="left" width="40%" style="border-bottom:1px solid #000000;'); ?>background-color:#164677;color:#FFFFFF;padding:5px">
    <?php

  
    
   
    ?>
    </td>
    <td align="right" width="60%" style="<?php echo ($cmd=='login' ? 'border-bottom:1px solid #000000;' : ''); ?>border-bottom:1px solid #000000;background-color:#164677;color:#FFFFFF;padding:5px">
    <?php
   
   
    ?>
    <table width="50%" cellpadding="0" cellspacing="0" border="0" >
    <tr>

       <td align="center" style="padding:3px;background-color:#164677">
       <b><?php echo $msg_header11; ?></b>:
       <select style="color:#000000"  onChange="if(this.value!= 0){location=this.options[this.selectedIndex].value}">
       <option value="0"></option>
       <option value="blog.php?cmd=settings"<?php echo ($cmd=='settings' ? ' selected' : ''); ?>>- <?php echo $msg_header; ?></option>
       <option value="blog.php?cmd=add"<?php echo ($cmd=='add' ? ' selected' : ''); ?>>- <?php echo $msg_header5; ?></option>
       <option value="blog.php?cmd=showblogs"<?php echo ($cmd=='showblogs' ? ' selected' : ''); ?>>- <?php echo $msg_header6; ?></option>
       <option value="blog.php?cmd=showcomments"<?php echo ($cmd=='showcomments' ? ' selected' : ''); ?>>- <?php echo $msg_header7; ?></option>
       <option value="blog.php?cmd=listcomments"<?php echo ($cmd=='listcomments' ? ' selected' : ''); ?>>- <?php echo $msg_header8; ?></option>
       <option class="hidden" value="blog.php?cmd=favourites"<?php echo ($cmd=='favourites' ? ' selected' : ''); ?>>- <?php echo $msg_header15; ?></option>
       <option class="hidden" value="blog.php?cmd=search"<?php echo ($cmd=='search' ? ' selected' : ''); ?>>- <?php echo $msg_header14; ?></option>
       <option value="0"></option>
       <option class="hidden" value="blog.php?cmd=logout">- <?php echo $msg_header4; ?></option>
       <option value="0"></option>
       </select></td>
     </tr>
     </table>
    <?php
    
    ?>
    &nbsp;
    <?php
    
    ?>
    </td>
</tr>
<?php
}
else
{
?>
<tr>
    <td align="left" class="menutable">
    <?php

   
      echo '[ <b>'.$msg_script . " " . $msg_script2 . " - " . $msg_header12.'</b> ]';
    
   
    
    ?>
    </td>
</tr>
<?php
}
?>
<!-- LOAD TEMPLATE -->
