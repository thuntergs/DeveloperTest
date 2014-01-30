<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pet extends CI_Controller {

	public function index($petId=0) {
		$this->load->model('pets');
		if (0 == $petId) {
			echo json_encode( $this->pets->getAllPets() );
		} else {
			echo json_encode( $this->pets->getPetDetails((int)$petId) );
		}
	}

}
