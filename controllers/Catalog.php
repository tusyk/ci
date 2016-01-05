<?php
class Catalog extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Catalog_model');
                $this->load->helper('url_helper');
        }

        public function index_old($slug = NULL)
        {
                $arr=explode("_",$slug);
				$cat_id=$arr[0];
				
				$data['menu'] = $this->Catalog_model->get_catalog_menu();
				$cat = $this->Catalog_model->get_category_info($cat_id);
				$data['category_title']=$cat['title'];
				$data['header']=$cat['title'];
				$data['category_list'] = $this->Catalog_model->get_category_list($cat_id);
				
				if(empty($data['category_list'])) {
					show_404();
				}
				
				$this->load->view('templates/header', $data);
				$this->load->view('catalog/index', $data);
				$this->load->view('templates/footer');
        }
		public function item($slug)
        {
			$arr=explode("_",$slug);
			$item_id=$arr[0];
				
				$data['menu'] = $this->Catalog_model->get_catalog_menu();
				$data['catalog_item'] = $this->Catalog_model->get_catalog_item($item_id);
				if(empty($data['catalog_item'])) {
					show_404();
				}
				$data['header']=$data['catalog_item']['title'];
				$data['category_info'] = $this->Catalog_model->get_category_info($data['catalog_item']['cat_id']);
				
				
				$this->load->view('templates/header', $data);
				$this->load->view('catalog/item', $data);
				$this->load->view('templates/footer');
		
		}
		public function index($slug=NULL)
        {
			$arr=explode("_",$slug);
			$cat_id=$arr[0];
			$data['menu'] = $this->Catalog_model->get_catalog_menu();
			
			$data['category_info']=$this->Catalog_model->get_category_info($cat_id);;
			$data['header']=$data['category_info']['title'];
			
			if (empty($cat_id)) {$cat_id=$data['category_info']['cat_id'];};
			$count = $this->Catalog_model->get_catalog_number($cat_id);
			$data['total_groups'] = ceil($count/pNumber);
			
				$this->load->view('templates/header', $data);
				$this->load->view('catalog/index1', $data);
				$this->load->view('templates/footer');
			
		}
		public function new_item_list($slug = NULL)
        {
			$data['category_list'] = $this->Catalog_model->get_category_list_limit($_POST['cat_id'],$_POST['group_no']);
			
						foreach ($data['category_list'] as $category_list_item)
						{
							echo '<div class="col-md-6 text-center" style="padding-bottom:10px;">';
							$link_segment2=str_replace("/"," ",$category_list_item['title']);
							$link_segment2=stripslashes(str_replace(" ","_",$link_segment2));
							$link_segment3=base_url_2().'catalog/items/'.$category_list_item['item_id'].'_'.$link_segment2.'/';
							echo '<a href="'.$link_segment3.'">
							<img  src="'.base_url().'assets/'.$category_list_item['photo1_l'].'" class="img-responsive" style="max-width:100%; margin-left: auto;
							margin-right: auto;" alt="Image">
							</a>
							</div>';
						
						};
		}
        
}