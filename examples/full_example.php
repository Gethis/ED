<?php
include("classes/easydevop.class.php");

$ed = new EasyDevop;
if($ed->isvalid('phoneNumber', '0833322887')){
	echo 'Valid'."</br>";
} else{
	echo 'Not valid'."</br>";
}
if($ed->isnumber("12")){
	echo 'Valid'."</br>";
} else{
	echo 'Not Valid'."</br>";
}
echo "<span style=\"background-color: ".$ed->random("color")."; padding: 4px; color: ".$ed->random("color").";\">hello - ".$ed->length("chars", "hello")."</span>";
?>
