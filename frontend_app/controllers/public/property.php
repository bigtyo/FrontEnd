<?php
class Property extends CI_Controller {

	function details($LISTING_ID = 0) {
		$this->load->library("propertylib");
		$this->load->library("rumahsuper");

		$query = $this->db->query("
			SELECT
			listing.LISTINGID,
			listing.JUDUL,
			listing.ALAMAT_LENGKAP,
			listing.HARGA,
			listing.KAMAR_TIDUR,
			listing.KAMAR_MANDI,
			listing.LUAS_BANGUNAN,
			listing.LUAS_TANAH,
			listing.ALAMAT_SINGKAT,
			listing.DAYA_LISTRIK,
			listing.GARASI,
			listing.FURNISHED,
			listing.SERTIFIKAT,
			listing.KONDISI,
			listing.JALUR_TELEPON,
			listing.LANTAI,
			listing.DESCRIPTION,
			tipe_property.NAMA_TIPE AS tipe_property,
			`user`.NAMA AS MARKTEING_NAME,
			`user`.USERID AS MARKETING_ID,
			`user`.EMAIL AS MARKTETING_EMAIL,
			`user`.TELEPON AS MARKTETING_PHONE,
			office.OFFICEID,
			office.NAMA AS OFFICE_NAME,
			office.ALAMAT AS OFFICE_ADDRESS,
			office.TELEPON AS OFFICE_PHONE,
			office.EMAIL AS OFFICE_EMAIL
			FROM
			listing
			INNER JOIN tipe_property ON listing.TIPEPROPID = tipe_property.TIPEPROPID
			LEFT JOIN daftarlistingmarketing ON listing.LISTINGID = daftarlistingmarketing.LISTINGID
			LEFT JOIN `user` ON daftarlistingmarketing.MARKETINGID = `user`.MARKETINGID
			LEFT JOIN marketing ON daftarlistingmarketing.MARKETINGID = marketing.MARKETINGID
			LEFT JOIN office ON marketing.OFFICEID = office.OFFICEID
			WHERE
			listing.LISTINGID = $LISTING_ID
			LIMIT 1

			");

		$data["property"] = $query->row();
		$this->load->view("frontend/property_detail",$data);
	}


	function listing() {
		$sort = $this->input->get('sort',TRUE);
		
		// Triget Input By Form
		$sort_form = $this->input->post("sort_form",TRUE);	
		if($sort_form){
			$sort = $sort_form;
		}
		
		$full_url = "http://rumahsuper.com/public/property/listing/";
		$full_url .= "?sort=$sort";
		
		if($this->input->post($sort_form)){
			redirect($full_url);
		}
		
	
		$this->load->library("propertylib");
		$this->load->library("rumahsuper");
		$this->load->library('pagination');


		$config['suffix'] = "/?sort=$sort_by&order=$order_by";
		$config['base_url'] = "http://rumahsuper.com/public/property/listing";
		$config['first_url'] = $config['base_url'].'/0/'.$config['suffix'];
		$config['uri_segment'] = '4';
		$config['total_rows'] = $this->db->count_all('listing');
		$config['per_page'] = 10;
		$this->pagination->initialize($config);

		$offset = $this->uri->segment(4,0);
		$data["listing"] = $this->db->order_by(($sort_by == "published")? "LISTINGID" : "HARGA",$order_by)
		->select("listing.LISTINGID, listing.JUDUL, listing.HARGA")
		->from("listing")
		->limit($config['per_page'],$offset)->get()->result();

		$this->load->view("frontend/property_listing",$data);
	}
}
?>