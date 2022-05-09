<?php

defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Login extends CI_Controller {

	public

	function __construct() {
		parent::__construct();
		$this->load->library( 'session' );
		$this->load->helper( 'form' );
		$this->load->helper( 'url' );
		$this->load->library( 'ion_auth' );
		// $this->load->model( array( 'm_team') );
	}

	public

	function proseslogin() {
		if ( $this->input->post() ) {
			$this->load->library( 'form_validation' );
			$this->form_validation->set_rules( 'email', 'Email', 'required' );
			$this->form_validation->set_rules( 'remember', 'Remember me', 'integer' );
			if ( $this->form_validation->run() == TRUE ) {
				$remember = ( bool )$this->input->post( 'remember' );
				if ( $this->ion_auth->login( $this->input->post( 'email' ), $this->input->post( 'password' ), $remember ) ) {
					redirect( '', 'refresh' );
				} else {
					$this->session->flashdata( 'message', $this->ion_auth->errors() );
					redirect( '', 'refresh' );
				}
			}
		}

		// if ( !$this->ion_auth->logged_in() ) {
		// 	$data = array( 'content' => 'welcome/formlogin',
		// 		'judul' => 'Login Page',
		// 		'description' => 'Login page' );
		// 	$this->load->view( 'welcome/formlogin', $data );
		// } else {
		// 	if ( $this->ion_auth->in_group( 'admin' ) ) {
		// 		redirect( 'team', 'refresh' );
		// 	} else if ( $this->ion_auth->in_group( 'members' ) ) {
		// 		redirect( 'member', 'refresh' );
		// 	} else if ( $this->ion_auth->in_group( 'pasien' ) ) {
		// 		redirect( 'user', 'refresh' );
		// 	}
		// }
	}


	public

	function logout() {
		$this->ion_auth->logout();
		redirect( '', 'refresh' );
	}

	public

	function registrasi() {
		$in = $this->session->flashdata( 'message' );
		if ( $in == "error" ) {
			$data = array( 'tipe' => 'Team Laeder',
				'message' => 'Registrasi gagal diproses',
				'title' => "MAGNXER",
				'navroute' => "",
				'user' => null
			);
			$this->load->view( 'welcome/formregistrasi', $data );
		} else {
			$data = array( 'tipe' => 'Team Leader',
				'message' => '',
				'title' => "MAGNXER",
				'user' => null,
				'navroute' => "");
			$this->load->view( 'welcome/formregistrasi', $data );
		}
	}

	public

	function prosesregistrasi() {
		if ( $this->input->post() ) {
			$this->load->library('form_validation');
			$this->load->helper(array('security'));
			$this->form_validation->set_rules('first_name', 'Nama Depan', 'trim|required|xss_clean');
			$this->form_validation->set_rules('last_name', 'Nama Belakang', 'trim|required|xss_clean');
			$this->form_validation->set_rules('phone', 'No Tlp', 'trim|required|xss_clean');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		
			if ( $this->form_validation->run() == false ) {
				$data = array(
					'title' => "MAGNXER",
					'navroute' => "",
					'user' => null,
					'message' => validation_errors()
				);
				$this->load->view( 'welcome/formregistrasi', $data );				

				// $this->session->flashdata( 'message', validation_errors() );
				// redirect( '/login/registrasi', 'refresh' );				
			} else {
				$password = $this->input->post( 'password' );
				$username = $this->input->post( 'username' );
				$email = $this->input->post( 'email' );
				$g = $this->input->post( 'group' );
				$additional_data = array(
					'first_name' => $this->input->post('first_name'),
					'last_name' => $this->input->post('last_name'),
					'phone'=>$this->input->post('phone')
				);

				if ( !$this->ion_auth->username_check( $email ) ) //cek username sudah terdaftar apa belum
				{
					// $group = array( $g );
					if($this->ion_auth->register( $email, $password, $email, $additional_data, array( $g ) )){
						redirect('');
					}else {
						// $this->session->set_flashdata( 'message', "error" );
						redirect( 'registrasi' );
					}
				} else {
					$data = array(
						'message'=>'Email sudah terdaftar',
						'title' => "MAGNXER",
						'user' => null,
						'navroute' => ""
					);
					$this->load->view('welcome/formregistrasi', $data);
				}
			}
		}
	}

}

?>