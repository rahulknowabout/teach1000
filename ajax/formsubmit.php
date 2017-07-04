<?php
include('../models/con_db.php');
include('../models/functiondb.php');
if(isset($_REQUEST['lost']) && $_REQUEST['lost']!="")
{
$news=runquery("SELECT","user_password","users","","where user_email ='".$_GET['lost']."'","num_rows");
if($news>0)
{
$m=runquery("SELECT","user_password","users","","where user_email ='".$_GET['lost']."'","");
$fromemail="info@teach1000.com";
$headers = 'From: Teach1000 <' . $fromemail . ">\r\n" .
			'Content-type: text/html; charset=iso-8859-1' . '\r\n'.
			'Reply-To:' . $fromemail . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
			
mail($_REQUEST['lost'],"Your Password",$m[0]['user_password'],$headers);
}
else
{
echo "No such type of email register with us";

}

}

if(isset($_REQUEST['email']) && $_REQUEST['email']!="")
{
	 //$total = runquery("SELECT","*","artical","","where alias='".$insatr."'","num_rows");
$news=runquery("SELECT","*","newsletter","","where `email` ='".$_GET['email']."'","num_rows");
//echo $news;
if($news >0)
{

echo  "You Are already Subscribed";

}
else
{
$sva = array("email" => "'".$_REQUEST['email']."'","created_date" => "NOW()");

//$values['email']=$_REQUEST['email'];
//$values['created_date']='NOW()';

$newsinsert=runquery("INSERT","","newsletter_user",$sva,"");
if($newsinsert)
{
echo "Thank You For subscribe";
}
$fromemail="info@teach1000.com";

$headers = 'From: Teach1000 <' . $fromemail . ">\r\n" .
			'Content-type: text/html; charset=iso-8859-1' . '\r\n'.
			'Reply-To:' . $fromemail . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
			
			mail($_REQUEST['email'],"Thank You","Thank You For subscribe",$headers);

}


}

?>