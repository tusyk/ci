<?php
class Pages extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
				$this->load->model('Article_model');
                $this->load->helper('url_helper');
				$this->load->library('email');
        }
        public function view($page = 'HOME')
        {
			//global constant
			//echo SuperAdmin;
			$data['title'] = ucfirst($page); // Capitalize the first letter
			$page = strtoupper($page);
			
			if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
			{
					show_404();
			}
			switch ($page) {
				case 'HOME':
					$item_id=5;
					break;
				case 'ABOUT_US':
					$item_id=6;
					break;
				case 'CONTACT_US':
					$item_id=7;
					break;
			}
			$data['article'] = $this->Article_model->get_article($item_id);
			$data['header']=$data['article']['title'];
			
			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer', $data);
        }
		public function contact_form() {
			
			
				$field1 = @$_POST['first_name'];
				$field2 = @$_POST['last_name'];
				$field3 = @$_POST['email'];
				$field4 = @$_POST['phone'];
				$field5 = @$_POST['comments'];
				if (get_magic_quotes_gpc()) {
				$field5 = stripslashes($field5);
				}
				//$mail_to = @$_POST['mail_to'];
				$data['mail_to'] = $this->Article_model->get_email();
				$mail_to=$data['mail_to']['mail'];
				
                //Establish values that will be returned via ajax
                $return = array();
                $return['msg'] = '';
                $return['error'] = false;
 
                //Begin form validation functionality
                if (!isset($field1) || empty($field1) || !isset($field2) || empty($field2) || !isset($field3) || empty($field3) || !isset($field4) || empty($field4)){
                        $return['error'] = true;
                        $return['msg'] .= 'All fields are required.';
                } else {
				if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $field3))
				{
						$return['error'] = true;
                        $return['msg'] .= 'Not a valid e-mail address.';
                 }
				 }
				 
                //Begin form success functionality
                if ($return['error'] === false){

				$message1 = '
				<html>
				<head>
				<title>Decor Plus</title>
				</head>
				<body>
				Decor Plus, contact form
				<br><br>
				Name: '.$field1.' '.$field2.'<br>
				email: '.$field3.' <br>
				Phone: '.$field4.' <br>
				Message: '.$field5.' <br>
				</body>
				</html>'; 
				$subject='Decor Plus contact form';
				$headers = "Content-typtext/html; charset=utf-8 \r\n";
				if (mail($mail_to, $subjct, $message1, $headers)) {		
                        $return['msg'] = 'Your message was send successfully. We will contact you shortly';
                } else {
						$return['error'] = true;
                        $return['msg'] .= 'Message was not send. Please try again later.';
				}
                }
                echo json_encode($return);
		}
}