<?php

class Pets extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	public function getAllPets() {
		return $this->db->query('SELECT id, name, photo_id, owner_id FROM pets')->result_array();
	}

	public function getPetDetails($petId) {
		return $this->db->query('SELECT petdetails.id, color, weight, favtreat FROM petdetails JOIN pets ON petdetails.id = pets.petdetail_id  WHERE (pets.id=?)', array($petId))->row_array();
	}

}
