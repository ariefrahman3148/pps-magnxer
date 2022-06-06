<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_companies extends CI_Model
{
	function add( $name,$country) {
		return $this->db->query( "INSERT INTO company (`name`,`country`) VALUES ('$name','$country')" );
	}
	
	function companies(){
		return $this->db->query( "SELECT * FROM company" );
	}

	function user_company($id){
		return $this->db->query( "SELECT * FROM company WHERE 'id' = '$id' " );
	}

}