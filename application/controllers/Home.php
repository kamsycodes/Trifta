<?php
class Home extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}
	function index() {
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('footer');
	}
}
?>