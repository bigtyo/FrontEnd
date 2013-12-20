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
                $CI->db->select("event.eventid,event.judul,date_format(event.tanggal,'d M Y') as tanggal,event.description,event.Tempat",FALSE);
		return $CI->db->limit($limit)->get("event")->result();
	}

        function get_marketing_list($listingid){
            $CI =& get_instance();
            
            $q = "select u.nama as nama_marketing,u.gambar, u.telepon,u.email,o.nama as nama_kantor,
                    o.alamat as alamat_kantor,o.telepon as telepon_kantor,o.officeid,o.email as email_kantor
                    from marketing m 
                    join user u on u.marketingid = m.marketingid 
                    join daftarlistingmarketing dlm on dlm.marketingid = m.marketingid 
                    join office o on m.officeid = o.officeid 
                    where dlm.listingid = $listingid and u.email <> o.email order by  rand(m.marketingid)  LIMIT 0,3;";
            
            $query = $CI->db->query($q);
            
            return $query->result();
        }
        
        
}
?>