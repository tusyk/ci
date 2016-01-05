<?php
class Article_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		public function get_article($item_id)
		{
        $query = "SELECT * FROM articles where item_id=?";
		$stmt1 = $this->db->query($query, array('item_id' => $item_id));
        
        return $stmt1->row_array();
		}
		public function get_email()
		{
        $query = "SELECT mail FROM mailer order by mail";
		$stmt1 = $this->db->query($query, array());
        
        return $stmt1->row_array();
		}
}