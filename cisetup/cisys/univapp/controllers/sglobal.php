<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Sglobal extends CI_Controller {

	public function index() {
		echo("You reached new controller");
		$this -> template -> title -> set('Home');
		$this -> template -> partial -> widget('login', array('1'));
		$this -> template -> publish();
		//$data = array('title' => 'Title goes here', );
		//$this -> templatelibrary -> load('CoreTemplate', 'header', 'contentHome', 'sideBarHome', 'footer', $data, $data);
		//$this->load->view('welcome_message');
	}

}