<?php
class Pages_model extends CI_Model {
		 public function __construct()
			{
                $this->load->database();
			}
		
		public function get_banner()
		{
        
                $query = $this->db->get_where('banner', array('type' => '2','id'=> '2'));
                return $query->result_array();
       
		}
		
	}
?>