<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Sglobal extends CI_Controller {

	public function index() {
		echo("You reached new controller");
		$this -> template -> title -> set('Home');
		$this -> template -> publish();
	}

}
