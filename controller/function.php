<?php 
function menu() {
		$rowa = runquery("SELECT","*","menu");
        return $rowa;  
}

function buildurl($url="")
{

$domain    = $_SERVER['SERVER_NAME']; 
if( $domain == "localhost" )
{
	$domain = $domain."/teach1000/";
}else
{
	$domain = $domain."/teach1000/";
}
 $base_dir  = __DIR__;  // Absolute path to your installation, ex: /var/www/mywebsite
 //$doc_root  = preg_replace("!{$_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME']); echo "<hr>"; # ex: /var/www 
//	 $base_url  = preg_replace("!^{$doc_root}!", '', $base_dir);  # ex: '' or '/mywebsite'
 $protocol  = empty($_SERVER['HTTPS']) ? 'http' : 'https'; 
 $port      = $_SERVER['SERVER_PORT']; 
 $disp_port = ($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port"; 
 

 $base  = "$protocol://{$domain}";
 return $base.$url;
}  

function pagecontent2() {
$rowa = runquery("SELECT","*","imagegallary");
        return $rowa;  
}
?>