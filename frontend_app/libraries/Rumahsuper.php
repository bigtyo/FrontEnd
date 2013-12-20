<?php
class Rumahsuper {

	function get_all_area() {
		$CI =& get_instance();
		return $CI->db->get("area")->result();
	}

	function homepage_project() {
		$CI =& get_instance();
		$query = $CI->db->query("
			SELECT
			listing.LISTINGID,
			listing.JUDUL,
			listing.ALAMAT_LENGKAP,
			listing.HARGA,
			listing.KAMAR_TIDUR,
			listing.KAMAR_MANDI,
			listing.LUAS_BANGUNAN,
			listing.LUAS_TANAH,
			listing.ALAMAT_SINGKAT
			FROM
			listing
			LIMIT 4
			");
		return $query->result();
	}

	function homepage_listing($offset = 0) {
		$CI =& get_instance();
		$query = $CI->db->query("
			SELECT
			listing.LISTINGID,
			listing.JUDUL,
			listing.ALAMAT_LENGKAP,
			listing.HARGA,
			listing.KAMAR_TIDUR,
			listing.KAMAR_MANDI,
			listing.LUAS_BANGUNAN,
			listing.LUAS_TANAH,
			listing.ALAMAT_SINGKAT
			FROM
			listing
			ORDER BY
			listing.LISTINGID DESC
			LIMIT $offset,4
			");
		return $query->result();
	}

	function footer_recent() {
		$CI =& get_instance();
		$query = $CI->db->query("
			SELECT
			listing.LISTINGID,
			listing.JUDUL,
			listing.HARGA,
			listing.ALAMAT_SINGKAT,
			lokasi.NAMA_LOKASI,
			kota.NAMA_KOTA
			FROM
			listing
			LEFT JOIN lokasi ON listing.LOKASIID = lokasi.LOKASIID
			LEFT JOIN kota ON listing.KOTAID = kota.KOTAID
			LIMIT 3
			");
		return $query->result();
	}

	function footer_featured() {
		$CI =& get_instance();
		$random = rand(1,10);
		$query = $CI->db->query("
			SELECT
			listing.LISTINGID,
			listing.JUDUL,
			listing.HARGA,
			listing.ALAMAT_SINGKAT,
			lokasi.NAMA_LOKASI,
			kota.NAMA_KOTA
			FROM
			listing
			LEFT JOIN lokasi ON listing.LOKASIID = lokasi.LOKASIID
			LEFT JOIN kota ON listing.KOTAID = kota.KOTAID
			LIMIT $random,3
			");
		return $query->result();
	}

	function footer_marketing() {
		$CI =& get_instance();
		$random = rand(1,10);
		$query = $CI->db->query("
			SELECT
			m.MARKETINGID,
			u.NAMA,
			u.TELEPON,
			o.NAMA AS OFFICE,
			o.ALAMAT AS OFFICE_ADDRESS
			FROM
			marketing AS m
			LEFT JOIN `user` AS u ON m.MARKETINGID = u.MARKETINGID
			INNER JOIN office AS o ON m.OFFICEID = o.OFFICEID
			ORDER BY rand()
			LIMIT 3
			");
		return $query->result();
	}


}
?>