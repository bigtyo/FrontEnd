<?php
    class Homepage extends CI_Controller{
    
        function index(){
			$this->load->library("propertylib");
			$this->load->library("rumahsuper");
            $this->load->view('frontend/homepage');
        }
    }
?>