<?php
if($_POST['name']!="" && $_POST['email']!="" && $_POST['phone']!="")
{

$msg=" Name: $_POST[name]<br><br>



Email: $_POST[email]<br><br>



Phone: $_POST[phone]<br><br>



Message: $_POST[message]<br><br>

";

$fromemail="info@teach1000.com";

$headers = 'From: Teach1000 <' . $fromemail . ">\r\n" .
			'Content-type: text/html; charset=iso-8859-1' . '\r\n'.
			'Reply-To:' . $fromemail . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

mail($_POST['email'],"Thank You","Thank You For Conatct Us",$headers);

echo "Thank You For Contacting Us.";



}
else
{
echo "Please Fill Required Field";

}

?>