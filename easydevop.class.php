<?php
class EasyDevop{
	public function isvalid($EASYDEVOP_ValidOBJ, $EASYDEVOP_ValidSTR){
		$this->EASYDEVOP_ValidOBJ = $EASYDEVOP_ValidOBJ;
		$this->EASYDEVOP_ValidSTR = $EASYDEVOP_ValidSTR;
		switch ($EASYDEVOP_ValidOBJ){
			case 'email':
				if(preg_match('/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD', $EASYDEVOP_ValidSTR)){
					return true;
				} else {
					return false;
				}
			break;
			case 'phoneNumber':
				if(preg_match('/(0|\+[0-9]{2})[0-9]{2}(\s|-|)[0-9]{3}(\s|-|)[0-9]{4}/m', $EASYDEVOP_ValidSTR)){
					return true;
				} else {
					return false;
				}
			break;
			case 'url':
				if(preg_match('/((ht|f)tp(s)?:\/\/)?(w{0,3}\.)?[a-zA-Z0-9_\-\.\:\#\/\~\}]+(\.[a-zA-Z]{1,4})(\/[a-zA-Z0-9_\-\.\:\#\/\~\}]*)?/m', $EASYDEVOP_ValidSTR)){
					return true;
				} else {
					return false;
				}
			break;
			default:
				echo "<h3>Value one of isvalid() must be \"email\", \"phoneNumber\" or \"url\"!</h3><br />";
		}
	}
	public function isnumber($EASYDEVOP_Number){
		$this->EASYDEVOP_Number = $EASYDEVOP_Number;
		if(preg_match("#^[0-9]+(?:\.[0-9]*)?$#", $EASYDEVOP_Number)){
			return true;
		} else {
			return false;
		}
	}
	public function random($EASYDEVOP_RandomType){
		$this->EASYDEVOP_RandomType = $EASYDEVOP_RandomType;
		switch ($EASYDEVOP_RandomType){
			case 'color':
				$EASYDEVOP_RandColorChars = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
				$EASYDEVOP_RandColorSTR = '#'.$EASYDEVOP_RandColorChars[rand(0,15)].$EASYDEVOP_RandColorChars[rand(0,15)].$EASYDEVOP_RandColorChars[rand(0,15)].$EASYDEVOP_RandColorChars[rand(0,15)].$EASYDEVOP_RandColorChars[rand(0,15)].$EASYDEVOP_RandColorChars[rand(0,15)];
				return $EASYDEVOP_RandColorSTR;
			break;
			case 'url':
				if(preg_match('/((ht|f)tp(s)?:\/\/)?(w{0,3}\.)?[a-zA-Z0-9_\-\.\:\#\/\~\}]+(\.[a-zA-Z]{1,4})(\/[a-zA-Z0-9_\-\.\:\#\/\~\}]*)?/m', $EASYDEVOP_ValidSTR)){
					return true;
				} else {
					return false;
				}
			break;
			default:
				echo "<h3>Value of random() must be \"color\", \"phoneNumber\" or \"url\"!</h3><br />";
		}
	}
	public function length($EASYDEVOP_STRLengthType, $EASYDEVOP_STRLengthSTR){
		switch ($EASYDEVOP_STRLengthType){
			case 'chars':
				return strlen($EASYDEVOP_STRLengthSTR);
			break;
			case 'sentn':
				return preg_match_all('/[^\s](\.|\!|\?)(?!\w)/', $EASYDEVOP_STRLengthSTR, $$EASYDEVOP_STRLengthMATCH);
			break;
			case 'words':
				return count(explode(" ", $EASYDEVOP_STRLengthSTR));
			break;
			default:
				echo "<h3>Value of length() must be \"words\", \"chars\" or \"sentn\"!</h3><br />";
		}
	}
}
?>
