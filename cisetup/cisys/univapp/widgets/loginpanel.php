<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class login extends Widget {
	public function display($args = array()) {
		foreach ($args as $value) {
			echo $value;
		}
	}
}