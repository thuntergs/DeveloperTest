<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photo extends CI_Controller {

	public function index() {
		$this->load->model('photos');
		echo json_encode( $this->photos->getAllPhotos() );
	}

}
