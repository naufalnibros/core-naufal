<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Examples extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('twig');
	}

	public function index()
	{
		// $this->load->view('welcome_message');
		$this->twig->display('welcome', array(
			'title' => 'Welcome to codeigniter with Twig',
			'description' => 'This is a sample asdasda'
		));
	}
}
