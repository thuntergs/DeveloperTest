<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Owner extends CI_Controller {

	public function index($petId=0) {
		$this->load->model('owners');
		echo json_encode( $this->owners->getAllOwners() );
	}

}
