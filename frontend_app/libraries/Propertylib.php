<?php
class Propertylib{

	function get_all_lokasi(){
		$CI =& get_instance();
		return $CI->db->get("lokasi")->result();
	}


	function get_all_area(){
		$CI =& get_instance();
		return $CI->db->get("area")->result();
	}

	function get_all_city(){
		$CI =& get_instance();
		return $CI->db->get("kota")->result();
	}

	function get_all_state(){
		$CI =& get_instance();
		return $CI->db->get("propinsi")->result();
	}

	function get_all_tipe_property(){
		$CI =& get_instance();
		return $CI->db->get("tipe_property")->result();
	}

	function get_all_office(){
		$CI =& get_instance();
		return $CI->db->order_by("OFFICEID","random")->get("office")->result();
	}

	function get_recent_event($limit=3){
		$CI =& get_instance();
		return $CI->db->limit($limit)->get("event")->result();
	}


}
?>