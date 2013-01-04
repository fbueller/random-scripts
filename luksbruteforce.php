<?php
/**
*
* @author Fbueller <fbuellerpriv@gmail.com>
* @license GNU Public License
*/

function getstdin(){
  return trim(fgets(STDIN));
}

echo "Enter the device name: ";
$device = getstdin();

$array=	array(	"pass1","pass2","pass3","pass4","pass5","pass6","pass7");

foreach($all as $pass){
	exec("echo {$pass} | cryptsetup luksOpen {$device} root",$output,$ret);
	// echo "test {$pass}";
	if ($ret==0) {
		echo "Password found: {$pass}";
	}
	exit();
}


