<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_blog extends CI_Model
{
	function add( $title,$thumb,$text,$author) {
		
		return $this->db->query( "INSERT INTO blogs (`title`,`thumbnail`,`text`,`author`) VALUES ('".$title."','".$thumb."','".$text."','".$author."')" );
	}
	
	function blogs(){
		return $this->db->query( "SELECT * FROM blogs" );
	}

	function blog($id){
		return $this->db->query( "SELECT * FROM blogs WHERE nama = '$id' " );
	}

	
	function update($id,$title,$thumb,$text){
		return $this->db->query( "UPDATE blogs SET `title` = '$title', `thumbnail` = '$thumb', `text` = '$text' WHERE id = $id" );
	}
}