<?php
include("classes/easydevop.class.php");

$ed = new EasyDevop;
if($ed->isvalid('phoneNumber', '0833322887')){
	echo 'Phone Number is Valid';
} else{
	echo 'Phone Number is Not valid';
}
if($ed->isvalid('phoneNumber', '083-332-2887')){
	echo 'Phone Number is Valid';
} else{
	echo 'Phone Number is Not valid';
}
if($ed->isvalid('phoneNumber', '083 332 2887')){
	echo 'Phone Number is Valid';
} else{
	echo 'Phone Number is Not valid';
}
if($ed->isvalid('phoneNumber', '+27833322887')){
	echo 'Phone Number is Valid';
} else{
	echo 'Phone Number is Not valid';
}
?>
