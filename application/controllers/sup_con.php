<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sup_con extends CI_Controller {
/*
	controller supplies cs&it
 */
	public function __construct(){
		parent::__construct();
		$this->load->model('sup_mod','',TRUE);
	}
	public function index()
	{
		$data = array(
			'show_supplies'  => $this->sup_mod->get_supplies_store(),
			);

		$this->load->view('index',$data);
	}

	public function add_supplies(){
		$this->load->view('add_supplies');
	}

	public function insert_supp_list(){
		$insert_supplies = $this->sup_mod->insert_supplies_store();
		redirect('index','refresh');
	}

	public function get_supplies(){
		// $show_supplies  = $this->sup_mod->get_supplies_store();

	}
}
