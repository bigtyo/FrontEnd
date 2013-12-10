<?php
class Property_model extends CI_Model{
	
	
	function get_homepage_listing($offset=0){
		$this->db->offset($offset);
		return $this->db->limit(4)->get('view_listing')->result();
	}
        
        function getHotPick($limit = 7)
        {
            $this->db->from('hot_pick');
            $this->db->join('hot_pick_list','hot_pick.hot_pick_list_id = hot_pick_list.hot_pick_list_id');
            $this->db->join('view_listing','hot_pick.listingid = view_listing.listingid');
            $this->db->select('view_listing.*');
            $query = $this->db->limit($limit)->get();
            
            return $query->result();
        }
        
	function get_property_detail($LISTINGID){
		$query = $this->db->query("SELECT * from view_listing where listingid = $LISTINGID");
		return $query->row();
	}
	function get_listing(){
		$query = "SELECT * FROM view_listing limit 0,10";
                $count = "SELECT COUNT(*) FROM view_listing";
                $data['listing'] = $this->db->query($query)->result();
                $data['count'] = $this->db->count_all_results('view_listing');
		return $data; 
	}
        
        public function search_listing($where,$begin,$offset)
        {
            
            $query = $this->db->get_where('view_listing',$where,$offset,$begin);
            $data['listing'] = $query->result();
            
            //$this->db->where($where);
            //$this->db->from('view_listing');
            $data['count'] = count($data['listing']);
            $data['begin'] = $begin;
            $data['offset'] = $offset;
            return $data;
        }
        
        public function getMarketingByListingid($listingid = 0,$limit = 3)
        {
            if($listingid != 0)
            {
                $_where = " where dlm.listingid = $listingid";
            }else
            {
                $_where = "";
            }
            
            if($limit != 0)
            {
                $_limit = " limit 0,$limit";
            }
            $_query = "select distinct u.nama,u.telepon,u.email,o.nama as nama_kantor
                        from daftarlistingmarketing dlm 
                        join marketing m on m.marketingid = dlm.marketingid
                        join office o on o.officeid = m.officeid
                        join user u on u.marketingid = m.marketingid".$_where.$_limit;
            return $this->db->query($_query)->result();
        }
        
        public function getNewListing($offset = 3,$begin = 0)
        {
            $this->db->from('view_listing');
            $this->db->limit($offset,$begin);
            $this->db->order_by("waktuupdate", "desc"); 
            $query = $this->db->get();
            return $query->result();
            
            //$this->db->where($where);
            //$this->db->from('view_listing');
//            $data['count'] = count($data['listing']);
//            $data['begin'] = $begin;
//            $data['offset'] = $offset;
//            return $data;
        }
	
}
?>