<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sup_con extends CI_Controller {
/*
	controller supplies cs&it
 */
	public function index()
	{
		$this->load->view('index');
	}

	public function add_supplies(){
		$this->load->view('add_supplies');
	}
}
