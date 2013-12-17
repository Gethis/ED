<?php
include("../easydevop.class.php");

$ed = new EasyDevop;
if($ed->isvalid('email', 'marais1665.io@gmail.com')){
	echo 'Valid';
} else{
	echo 'Not valid';
}
?>
