<?php
class Page extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->library("propertylib");
	}
	function contact(){
		$data = array();
		$this->load->view('contact',$data);
	}
	
	function about(){
		$data = array();
		$this->load->view('about',$data);
	}
	
	function careers(){
		$data = array();
		$this->load->view('careers',$data);
	}

}
?>