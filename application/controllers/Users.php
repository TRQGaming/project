<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {



 public function admin()
 {
 $this->load->view('index');
 }
	public function index()
	{
// <<<<<<< HEAD
		// $this->output->enable_profiler();

		$this->load->view('home');
// =======
// >>>>>>> master
	}
	public function orders()
	{
		$this->load->view('orders');
	}
	public function checkout()
	{
		$this->load->view('checkout');
	}
	public function home()
	{
		$this->load->view('home');
	}
	public function games()
	{
		$this->load->view('games');
	}
	public function get_page($num)
	{
	  $this->load->model("product");
	  $product = $this->Product->get_page($num);
	  header('content-type: application/json');
	  echo json_encode($product);
	}


	public function get_all()
	{
	$this->load->model('product');
	$model = $this->model->fetach_all();
	header('content-type: application/json');
	echo json_encode($product);
	}


	// public function user_register()
	// {
	// 	$first_name = $this->input->post('first_name');
	// 	$last_name = $this->input->post('last_name');
	// 	$user_name = $this->input->post('user_name');
	// 	$email = $this->input->post('email');
	// 	$password = md5($this->input->post('password'));
	// 	$password_conf = md5($this->input->post('password'));
	//
	// 	$this->load->library("form_validation");
	// 	$this->form_validation->set_rules("first_name", "last_name", "user_name", "trim|required");
	// 	$this->form_validation->set_rules("email", "trim|valid_email|required");
	// 	$this->form_validation->set_rules("password", "password_conf", "trim|min_length[8]|required|matches[confirm_password]|md5");
	// 	if($this->form_validation->run() === FALSE)
	// 	{
	// 		$this->session->error("login_errors", validation_errors());
	// 		redirect(base_url());
	// 	}
	// 	else
	// 	{
	// 	$this->load->model("user");
	// 	$register = $this->input->post();
	// 	$user_register = $this->users->user_input($register);
	// 	$this->load->view("index");
	// 	}
	// }

	public function user_login()
	{
							header('Location: views/orders');
								die();
				$email = $this->input->post('email');
				$password = md5($this->input->post('password'));
		//Change up the password encryption
				$this->load->model('login_verify');
				$emailDB && $passswordDB = $this->login_verify->get($emailDB && $passswordDB);
				if($email && $password == $emailDB && $passwordDB)
				{
						// $user_info = array(
						// 	 'user_id' => $user_info['id'],
						// 	 'user_email' => $user_info['email'],
						// 	 'user_first' => $user_info['first_name'],
						// 	 	 'user_last' => $user_info['last_name'],
						// 	 'is_logged_in' => true
						// );
						$this->session->set_userdata($user_info);
						$this->load->view('order');
						// 'this loads the view page order'
				}
				else
				{
						$this->session->set_flashdata("login_error", "Invalid email or password!");
						$this->load->view('order');
				}
	}

public function order_pagination()
			{

			}


public function cart()
			{
						$this->load->view('order');
						$user_order = $this->input->post();
						$user_order = $db_handle->runQuery("SELECT * FROM product ORDER BY id ASC");
						if (!empty($product_array))
							{
									foreach($user_order as $key=>$value)
											{
													return $user_order;
											}
							}
			}

			public function get_all()
			{
				$this->load->model('product');
				$model = $this->model->fetach_all();
				header('content-type: application/json');
				echo json_encode($product);
			}



}
