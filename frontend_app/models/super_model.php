<?php
class Super_model extends CI_Model{
	
	
	function get_homepage_listing($offset=0){
		$this->db->offset($offset);
		return $this->db->limit(4)->get('listing')->result();
	}

	function get_property_detail($LISTINGID){
		$query = $this->db->query("
			SELECT listing.LISTINGID, listing.JUDUL, status_data.NAMA_STATUS AS APPROVAL, status_jual.NAMA_STATUS AS STATUS_JUAL, lokasi.NAMA_LOKASI, area.NAMA_AREA, kota.NAMA_KOTA, propinsi.NAMA_PROPINSI, customer.CUSTOMERID, customer.NAMA, customer.EMAIL, customer.TELEPON, listing.ALAMAT_SINGKAT, listing.ALAMAT_LENGKAP, listing.LUAS_BANGUNAN, listing.LUAS_TANAH, listing.FURNISHED, listing.KAMAR_TIDUR, listing.LANTAI, listing.DAYA_LISTRIK, listing.HARGA, listing.SERTIFIKAT, listing.KONDISI, listing.KAMAR_MANDI, listing.GARASI, listing.JALUR_TELEPON, listing.LONGITUDE, listing.LATITUDE FROM listing INNER JOIN status_jual ON listing.STATUSJUALID = status_jual.STATUSJUALID INNER JOIN area ON listing.AREAID = area.AREAID INNER JOIN customer ON listing.CUSTOMERID = customer.CUSTOMERID INNER JOIN status_data ON listing.STATUSDATAID = status_data.STATUSDATAID INNER JOIN kota ON listing.KOTAID = kota.KOTAID INNER JOIN propinsi ON listing.PROPINSIID = propinsi.PROPINSIID INNER JOIN lokasi ON listing.LOKASIID = lokasi.LOKASIID WHERE status_data.NAMA_STATUS = 'Verified' AND listing.LISTINGID = 1 LIMIT 1
		");
		return $query->row();
	}
	
}
?>