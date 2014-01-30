<?php

class Photos extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	public function getAllPhotos() {
		return $this->db->query('SELECT id, thumbnailpath, imagepath FROM photos')->result_array();
	}
}
