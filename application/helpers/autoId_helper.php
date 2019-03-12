<?php
if (!function_exists('get_id')) {
	function get_id($fields="", $table="",$inisial="")
	{
		$CI = &get_instance();
		$query = $CI->db->query("SELECT MAX($fields) as max from ".$table);
		//echo $CI->db->last_query();
		$result = current($query->result());
		$number = 0;
		$imax = 9;
		$tmp = "";
		if ($result->max !=''){
			$number = substr($result->max, strlen($inisial));
			$number++;
			$number = strval($number);
			for ($i=0; $i <=($imax-strlen($inisial)-strlen($number)) ; $i++) {
				$tmp = $tmp."0";
			}
		}
		return $inisial.$tmp.$number;
	}
}
?>