<?php
class Search extends CI_Controller{
	
	function redirect(){
		$sort = $this->input->post('inputOrder',TRUE);
		$current_url = current_url();
		
		$sort_by = $this->input->get("sort",TRUE);
		$order_by = $this->input->get("order",TRUE);
		
		redirect($current_url ."/". $sort);
	}
}
?>