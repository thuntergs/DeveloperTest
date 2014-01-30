<?php

class Owners extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	public function getAllOwners() {
		return $this->db->query('SELECT id, name, photo_id FROM owners')->result_array();
	}
}
