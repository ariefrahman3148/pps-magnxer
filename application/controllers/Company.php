<?php

defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

class Company extends CI_Controller {

	public

	function __construct() {
		parent::__construct();
		$this->load->library( 'session' );
		$this->load->helper( 'form' );
		$this->load->helper( 'url' );
		$this->load->library( 'ion_auth' );
		$this->load->model( array( 'm_job') );
		$this->load->model( array( 'm_companies') );
	}

	public

	function index() {
		if ( $this->ion_auth->logged_in() && $this->ion_auth->in_group( 'perusahaan' )) {
			// var_dump($this->ion_auth->user()->row()->company);
			// $company = $this->m_companies->user_company($this->ion_auth->user()->row()->company)->result();
			// var_dump($company);
			$data = array(
				'title' => "MAGNXER",
				'navroute' => "",
			);
			$this->load->view('company/dashboard', $data);
			
		} else {
			redirect( '', 'refresh' );
		}
	}



}

?>