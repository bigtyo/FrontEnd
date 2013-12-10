<?php
	class Main extends CI_Controller{

		
		public function __construct(){
            parent::__construct();
       		$this->load->model('property_model');
       		$this->load->library("propertylib");
	   }
		
		function index(){

			$data = array();
			$data["model"] = $this->property_model;
                        $data['marketings'] = $this->property_model->getMarketingByListingid(0);
                        $data['hotpicks'] = $this->property_model->getHotPick(3);
                        $data['recents'] = $this->property_model->getNewListing();
			$this->load->view('homepage', $data);
		}


		function listing(){
                        $where['tipepropid'] = $this->input->post('tipepropid');
                    
                    $where['propinsiid'] = $this->input->post('propinsi');
                    $where['kotaid'] = $this->input->post('kota');
                    $where['areaid'] =$this->input->post('area');
                    $where['lokasiid'] = $this->input->post('lokasi');
                    
                    $harga = $this->input->post('harga');
                    $where['harga_awal'] = null;
                    $where['harga_akhir'] = null;
                    if($harga != null && $harga != "" && explode(';', $harga) )
                    {
                        $arr = explode(';', $harga);
                        $where['harga_awal']= $arr[0];
                        $where['harga_akhir'] = $arr[1];
                    }
                    
                    
                    if($where['harga_awal'] != null && $where['harga_awal'] != "")
                    {
                        //$where['harga_awal'] = ">= ".$where['harga_awal'];
                        if($where['harga_akhir'] == "")
                        {
                            $where['harga <'] = $where['harga_awal'];
                        }
                        else {
                            $where['harga >='] = $where['harga_awal'];
                        }
                        
                        unset($where['harga_awal']);
                    }
                    
                    if($where['harga_akhir'] != null && $where['harga_akhir'] != "")
                    {
                        if($where['harga_awal'] == "")
                        {
                            $where['harga >'] = $where['harga_akhir'];
                        }  
                        else {
                            $where['harga <='] = $where['harga_akhir'];
                        }
                        
                        unset($where['harga_akhir']);
                        //$where['harga_akhir'] = "<= ".$where['harga_akhir'];
                    }
                    
                    $where['luas_bangunan'] = $this->input->post('luas_bangunan');
                    $where['kamar_tidur'] = $this->input->post('kamar_tidur');
                    $where['kamar_mandi'] = $this->input->post('kamar_mandi');
                    $where['garasi'] = $this->input->post('garasi');
                    
                    foreach ($where as $obj)
                    {
                        if($obj == "" || $obj == null)
                        {
                            $key = array_search($obj,$where);
                            if($key!==false){
                                unset($where[$key]);
                            }
                        }


                    }
                    if(count($where))$where = null;
			$data = $this->property_model->get_listing($where);
                        $data['scripts'] = array(
                            "listing"
                        );
                        $data['recents'] = $this->property_model->getNewListing();
                        //echo json_encode($data);
                        $data['marketings'] = $this->property_model->getMarketingByListingid();
                        $data['hotpicks'] = $this->property_model->getHotPick(3);
                        
			$this->load->view('listing',$data);

		}

		function single($LISTINGID=0){
			$data["property"] = $this->property_model->get_property_detail($LISTINGID);
                        $data['marketings'] = $this->property_model->getMarketingByListingid($LISTINGID);
                        $data['hotpicks'] = $this->property_model->getHotPick(3);
                        $data['recents'] = $this->property_model->getNewListing();
			$this->load->view('property_detail', $data);
		}

		function contact(){
			$data = array();
			$this->load->view('contact', $data);
		}
		
		function event_detail($LISTINGID=0){
			$data["property"] = $this->property_model->get_property_detail($LISTINGID);
			$this->load->view('event_detail', $data);
		}
                
                function listingsearch()
                {
                    $begin =$this->input->get('begin');
                    $end = $this->input->get('end');
                    $where['tipepropid'] = $this->input->get('tipepropid');
                    
                    $where['propinsiid'] = $this->input->get('propinsi');
                    $where['kotaid'] = $this->input->get('kota');
                    $where['areaid'] =$this->input->get('area');
                    $where['lokasiid'] = $this->input->get('lokasi');
                    $where['harga_awal']= $this->input->get('harga_awal');
                    $where['harga_akhir'] = $this->input->get('harga_akhir');
                    
                    if($where['harga_awal'] != null && $where['harga_awal'] != "")
                    {
                        //$where['harga_awal'] = ">= ".$where['harga_awal'];
                        if($where['harga_akhir'] == "")
                        {
                            $where['harga <'] = $where['harga_awal'];
                        }
                        else {
                            $where['harga >='] = $where['harga_awal'];
                        }
                        
                        unset($where['harga_awal']);
                    }
                    
                    if($where['harga_akhir'] != null && $where['harga_akhir'] != "")
                    {
                        if($where['harga_awal'] == "")
                        {
                            $where['harga >'] = $where['harga_akhir'];
                        }  
                        else {
                            $where['harga <='] = $where['harga_akhir'];
                        }
                        
                        unset($where['harga_akhir']);
                        //$where['harga_akhir'] = "<= ".$where['harga_akhir'];
                    }
                    
                    $where['luas_bangunan'] = $this->input->get('luas_bangunan');
                    $where['kamar_tidur'] = $this->input->get('kamar_tidur');
                    $where['kamar_mandi'] = $this->input->get('kamar_mandi');
                    $where['garasi'] = $this->input->get('garasi');
                    
                    foreach ($where as $obj)
                    {
                        if($obj == "" || $obj == null)
                        {
                            $key = array_search($obj,$where);
                            if($key!==false){
                                unset($where[$key]);
                            }
                        }


                    }
                    $json = $this->property_model->search_listing($where,$begin,$end);
                    $json['where'] = $where;
                    
                    
                    $json['html'] = $this->load->view('listingsearch',$json,true);
                    $data['json'] = json_encode($json);
                    $this->load->view('json_view',$data);
                }
                
                function getMarketingByListingid()
                {
                    $listingid = $this->input->get('listingid');
                    $this->property_model->getMarketingByListingid($listingid);
                }

	}
?>