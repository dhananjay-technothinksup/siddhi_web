<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
	    parent::__construct();
	    $this->load->helper('string');
	    $this->load->Model('Admin_Model');
	  }

	public function index()
	{
		$this->load->view('admin/index');
	}
	public function make_name()
	{
		$this->load->view('admin/form1');
	}

	public function catagory_name()
	{
		$data['make_list']=$this->Admin_Model->get_make();
		$this->load->view('admin/catagory',$data);
	}

	public function product_name()
	{
		$data['make_list']=$this->Admin_Model->get_make();
		$data['category_list']=$this->Admin_Model->get_category();
		$this->load->view('admin/product',$data);
	}

	public function add_make()
	{
		$save_make = array(
				'make_name' => $this->input->post('make_name')
			);
				$this->Admin_Model->save_make($save_make);
				  header('location:'.base_url().'Admin');
	}

	public function Add_category()
	{
		$save_category = array(
				'make_id' => $this->input->post('make_id'),
				'category_name' => $this->input->post('category_name')
			);
				$this->Admin_Model->save_category($save_category);
					header('location:'.base_url().'Admin');
	}

	// public function Add_product()
	// {
	// 		$config['allowed_types'] = 'pdf|csv';
	// 		$this->load->library('upload', $config);
	// 		$this->upload->initialize($config);
	// 		$save_ = array(
	// 				'make_id' => $this->input->post('make_id'),
	// 				'category_name' => $this->input->post('category_name')
	// 			);
	// 			$this->Admin_Model->save_product($save_product);
	// 				header('location:'.base_url().'Admin');
	// }


}
