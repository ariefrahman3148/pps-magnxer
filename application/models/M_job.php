<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_job extends CI_Model
{
	function create( $jobDesc,$jobStatus,$postedBy,$companyID) {
		
		return $this->db->query( "INSERT INTO Job (`jobDesc`,`jobStatus`,`postedBy`,`companyID`) VALUES ('".$jobDesc."','".$jobStatus."','".$postedBy."','".$companyID."')" );
	}
	
	function jobs (){
		return $this->db->query( "SELECT * FROM Job" );
	}

	function job ($id){
		return $this->db->query( "SELECT * FROM Job WHERE nama = '$id' " );
	}

	
	function update($id,$title,$thumb,$text){
		return $this->db->query( "UPDATE Job SET `jobDesc` = '$jobDesc', `jobStatus` = '$jobStatus', `postedBy` = '$postedBy' WHERE id = $id" );
	}
}