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
		$this->load->view('withdraw_supplies');
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

	public function withdraw_supplies(){
		$this->load->view('withdraw_supplies');
	}

	public function supplies_store(){
		$data = array(
			'show_supplies'  => $this->sup_mod->get_supplies_store(),
			);

		$this->load->view('supplies_store',$data);
	}

	public function add_withdraw(){

		$name = $this->input->post('namelist[]');	//รายการที่เบิก
		$number = $this->input->post('number[]');	//จำนวน
		$swd_name = $this->input->post('supplies_withdraw_name');	//ผู้เบิก
		$swd_date = $this->input->post('supplies_date'); //วันที่เบิก
		$swd_detail = $this->input->post('supplies_detail'); //หมายเหตุที่เบิก
		 //echo count($name);
		for($i=0; $i < count($name) ; $i++){
			$withdraw_insert = array(
				'list_id' => '',
				'list_name' => $name[$i],
				'list_amount' => $number[$i],
				'user_id' => $swd_name,
				'list_date' => $swd_date,
				'list_detail' => $swd_detail,
				);
			// echo "<pre>";
			// print_r($withdraw_insert);
			$this->db->insert('list_withdraw',$withdraw_insert);
		}
		redirect('sup_con');
	}
}
?>
