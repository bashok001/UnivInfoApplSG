<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index() {
		$data = array('title' => 'Title goes here', );
		$this -> load -> library('templateLibrary');
		$this -> template -> load('CoreTemplate', 'content', $data);
		//$this->load->view('welcome_message');
	}

}
