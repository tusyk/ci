<?php
class Catalog_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function get_catalog_menu() { 
			$query = "SELECT * FROM catalog
				ORDER BY title";
			$stmt1 = $this->db->query($query, array());
			 return $stmt1->result_array();
		}
		public function get_category_info($cat_id) { 
		
			if($cat_id==NULL)
			{
				$query = "SELECT * FROM catalog
				ORDER BY title limit 1";
				$stmt1 = $this->db->query($query, array());
			} else {
				$query = "SELECT * FROM catalog
				where cat_id=?
					ORDER BY title";
				$stmt1 = $this->db->query($query, array('cat_id' => $cat_id));
			}
			$category=$stmt1->row_array();
			return $category;
		}
		
		public function get_category_list($cat_id) { 
			if($cat_id==NULL)
			{
				$query = "SELECT * FROM shop
				where cat_id=(select cat_id from catalog order by title limit 1)
				ORDER BY item_id";
				$stmt1 = $this->db->query($query, array());
			} else {
				$query = "SELECT * FROM shop
				where cat_id=?
				ORDER BY item_id";
				$stmt1 = $this->db->query($query, array('cat_id' => $cat_id));
			}
			return $stmt1->result_array();
		}
		public function get_catalog_item($item_id) { 
			if($item_id==NULL)
			{
				$query = "SELECT * FROM shop
				ORDER BY item_id limit 1";
				$stmt1 = $this->db->query($query, array());
			} else {
				$query = "SELECT * FROM shop
				where item_id=?
				ORDER BY item_id";
				$stmt1 = $this->db->query($query, array('item_id' => $item_id));
			}
			return $stmt1->row_array();
		}
		
		public function get_catalog_number($cat_id) { 
		$query = "SELECT count(1) as count FROM shop
			where cat_id=? 
			";
			$stmt1 = $this->db->query($query, array('cat_id' => $cat_id));
			$count=$stmt1->row_array();
			return $count['count'];
		}
		public function get_category_list_limit($cat_id, $group_no) { 
			
			$position = ($group_no * pNumber);
				$query = "SELECT * FROM shop
				where cat_id=?
				ORDER BY item_id
				LIMIT ?, ".pNumber."";
				$stmt1 = $this->db->query($query, array('cat_id' => $cat_id, 'position'=>$position));
			
			return $stmt1->result_array();
		}


}