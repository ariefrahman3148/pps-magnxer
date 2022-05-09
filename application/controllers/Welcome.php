<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	// public function index()
	// {
	// 	$this->load->view('welcome_message');
	// }

	function __construct() {
		parent::__construct();
		$this->load->library( array( 'form_validation', 'ion_auth', 'upload' ) );
		// $this->load->model( array( 'm_alpha', 'm_sigma', 'm_gamma' ) );

	}
	
	public function index()
	{
		if ($this->ion_auth->logged_in()){
			$user1 = $this->ion_auth->user()->row();
			$user_groups = $this->ion_auth->get_users_groups($user1->id)->result();
			$user = [
				'user' => $user1,
				'group' => $user_groups
			];
		} else {
			$user = null;
		}
		$data = array(
			'title' => "MAGNXER",
			'navroute' => "Home",
			'user' => $user
		);
		// $this->load->view('template/header', $data);
		// var_dump($this->user);
		// $this->load->view('welcome/index', $data);
		$this->load->view('welcome/index', $data);
		$this->load->view('template/footer');
	}

	public function user()
	{
		if ($this->ion_auth->logged_in()){
			$user1 = $this->ion_auth->user()->row();
			$user_groups = $this->ion_auth->get_users_groups($user1->id)->result();
			$user = [
				'user' => $user1,
				'group' => $user_groups
			];
		} else {
			$user = null;
		};
		echo json_encode($user);
	}
}
