<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class TemplateLibrary {
	var $ci;
	function __construct() {
		$this -> ci = &get_instance();
	}

	function load($tpl_view, $header_view = null, $content_view = null, $sidebar_view = null, $footer_view = null, $contentdata = null, $sidebardata = null) {
		if (!is_null($header_view) && !is_null($content_view) && !is_null($sidebar_view) && !is_null($footer_view)) {

			if (file_exists(APPPATH . 'views/' . $tpl_view . '/' . $header_view)) {
				$header_view_path = $tpl_view . '/' . $header_view;
			} else if (file_exists(APPPATH . 'views/' . $tpl_view . '/' . $header_view . '.php')) {
				$header_view_path = $tpl_view . '/' . $header_view . '.php';
			} else if (file_exists(APPPATH . 'views/' . $header_view)) {
				$header_view_path = $header_view;
			} else if (file_exists(APPPATH . 'views/' . $header_view . '.php')) {
				$header_view_path = $header_view . '.php';
			} else {
				show_error('Unable to load the requested file: ' . $header_view . '.php');
			}

			if (file_exists(APPPATH . 'views/' . $tpl_view . '/' . $content_view)) {
				$content_view_path = $tpl_view . '/' . $content_view;
			} else if (file_exists(APPPATH . 'views/' . $tpl_view . '/' . $content_view . '.php')) {
				$content_view_path = $tpl_view . '/' . $content_view . '.php';
			} else if (file_exists(APPPATH . 'views/' . $content_view)) {
				$content_view_path = $content_view;
			} else if (file_exists(APPPATH . 'views/' . $content_view . '.php')) {
				$content_view_path = $content_view . '.php';
			} else {
				show_error('Unable to load the requested file: ' . $content_view . '.php');
			}

			if (file_exists(APPPATH . 'views/' . $tpl_view . '/' . $sidebar_view)) {
				$sidebar_view_path = $tpl_view . '/' . $sidebar_view;
			} else if (file_exists(APPPATH . 'views/' . $tpl_view . '/' . $sidebar_view . '.php')) {
				$sidebar_view_path = $tpl_view . '/' . $sidebar_view . '.php';
			} else if (file_exists(APPPATH . 'views/' . $sidebar_view)) {
				$sidebar_view_path = $sidebar_view;
			} else if (file_exists(APPPATH . 'views/' . $sidebar_view . '.php')) {
				$sidebar_view_path = $sidebar_view . '.php';
			} else {
				show_error('Unable to load the requested file: ' . $sidebar_view . '.php');
			}

			if (file_exists(APPPATH . 'views/' . $tpl_view . '/' . $footer_view)) {
				$footer_view_path = $tpl_view . '/' . $footer_view;
			} else if (file_exists(APPPATH . 'views/' . $tpl_view . '/' . $footer_view . '.php')) {
				$footer_view_path = $tpl_view . '/' . $footer_view . '.php';
			} else if (file_exists(APPPATH . 'views/' . $footer_view)) {
				$footer_view_path = $footer_view;
			} else if (file_exists(APPPATH . 'views/' . $footer_view . '.php')) {
				$footer_view_path = $footer_view . '.php';
			} else {
				show_error('Unable to load the requested file: ' . $footer_view . '.php');
			}

			$header = $this -> ci -> load -> view($header_view_path, $headerdata, TRUE);
			if (is_null($headerdata)) {
				$headerdata = array('header' => $header);
			} else if (is_array($headerdata)) {
				$headerdata['header'] = $header;
			} else if (is_object($headerdata)) {
				$headerdata -> header = $header;
			}

			$sidebar = $this -> ci -> load -> view($sidebar_view_path, $sidebardata, TRUE);
			if (is_null($sidebardata)) {
				$sidebardata = array('sidebar' => $sidebar);
			} else if (is_array($sidebardata)) {
				$sidebardata['sidebar'] = $sidebar;
			} else if (is_object($sidebardata)) {
				$sidebardata -> sidebar = $sidebar;
			}
			
			
			$content = $this -> ci -> load -> view($content_view_path, $contentdata, TRUE);
			if (is_null($contentdata)) {
				$contentdata = array('content' => $content);
			} else if (is_array($contentdata)) {
				$contentdata['content'] = $content;
			} else if (is_object($contentdata)) {
				$contentdata -> content = $content;
			}

			$sidebar = $this -> ci -> load -> view($sidebar_view_path, $sidebardata, TRUE);
			if (is_null($sidebardata)) {
				$sidebardata = array('sidebar' => $sidebar);
			} else if (is_array($sidebardata)) {
				$sidebardata['sidebar'] = $sidebar;
			} else if (is_object($sidebardata)) {
				$sidebardata -> sidebar = $sidebar;
			}

		}
		//show_404();
		$this -> ci -> load -> view('templates/' . $tpl_view, $contentdata);
	}

}