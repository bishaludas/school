<?php 
	function url_for($string){
		if ($string[0] !== '/') {
			$string = '/'.$string;
		}
		return WWW_ROOT.$string;
	}

	function url($string){
		return urlencode($string);
	}

	function hsc($string){
		return htmlspecialchars($string);
	}

	function db_escape($con, $string){
		global $con;
		return mysqli_real_escape_string($con, $string);
	}
 ?>