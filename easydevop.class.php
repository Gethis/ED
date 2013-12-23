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
			case 'number':
				return rand();
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
				return preg_match_all('/[^\s](\.|\!|\?)(?!\w)/', $EASYDEVOP_STRLengthSTR, $EASYDEVOP_STRLengthMATCH);
			break;
			case 'words':
				return count(explode(" ", $EASYDEVOP_STRLengthSTR));
			break;
			default:
				echo "<h3>Value of length() must be \"words\", \"chars\" or \"sentn\"!</h3><br />";
		}
	}
	public function is_ua($EASYDEVOP_UABotType){
        $EASYDEVOP_UABotUA = strtolower($_SERVER['HTTP_USER_AGENT']);
		switch ($EASYDEVOP_UABotType){
			case 'bot':
				if(preg_match("/googlebot|adsbot|yahooseeker|yahoobot|msnbot|watchmouse|pingdom\.com|feedfetcher-google/", $EASYDEVOP_UABotUA)){
					return true;
				} else{
					return false;
				}
			break;
			case 'mobile':
				if(preg_match("/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i",$EASYDEVOP_UABotUA)||preg_match("/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/", $EASYDEVOP_UABotUA)){
					return true;
				} else{
					return false;
				}
			break;
			case 'computer':
				if(preg_match("/mozilla\/|opera\/|trident\//", $EASYDEVOP_UABotUA)){
					return true;
				} else{
					return false;
				}
			break;
			default:
				echo "<h3>Value of ua_is() must be \"computer\", \"bot\" or \"mobile\"!</h3><br />";
		}
	}
	public function download($EASYDEVOP_FILEDOWNLOAD, $EASYDEVOP_FILETODOWNLOAD){
		switch($EASYDEVOP_FILEDOWNLOAD){
			case 'force':
				
			break;
			case 'ask':
			
			break;
		}
	}
}
?>
