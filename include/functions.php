<?

	function touppercase($string) { 
		$string = strtoupper($string); 
		$string = str_replace("á", "Á", $string); 
		$string = str_replace("é", "É", $string); 
		$string = str_replace("í", "Í", $string); 
		$string = str_replace("ó", "Ó", $string); 
		$string = str_replace("ú", "Ú", $string);
		$string = str_replace("ñ", "Ñ", $string);
		return ($string); 
		}

?>