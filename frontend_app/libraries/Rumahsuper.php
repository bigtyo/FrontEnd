<?php
class Rumahsuper{
	
	function get_all_area(){
		$CI =& get_instance();
		return $CI->db->get("area")->result();
	}
}
?>