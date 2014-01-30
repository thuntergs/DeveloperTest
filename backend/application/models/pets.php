<?php

class Pets extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	public function getAllPets() {
		return $this->db->query('SELECT id, name, photo_id, owner_id FROM pets')->result_array();
	}

	public function getPetDetails($petId) {
		return $this->db->query('SELECT id, color, weight, favtreat FROM petdetails WHERE (id=?)', array($petId))->result_array();
	}

}
