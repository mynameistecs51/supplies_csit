<?php  defined('BASEPATH') OR exit('No direct script access allowed');
	class Sup_mod extends CI_model{
		public function __construct(){
			parent::__construct();
		}

		public function insert_supplies_store(){
			$insert_supplies = array(
				'supp_id'	=> '',
				'supp_name'	=>	$this->input->post('supplies_name'),
				'supp_amount'	=>	$this->input->post('supplies_amount'),
				'supp_date'	=> 	$this->input->post('supplies_date'),
				);
			$this->db->insert('supplies_store',$insert_supplies);
		}

		public function get_supplies_store(){
			$show_supplies = $this->db->query('SELECT * FROM supplies_store')->result();
			return $show_supplies;
		}

		public function get_user(){
			$show_user = $this->db->get('user_supplies');
			return $show_user->result();
		}
	}
?>