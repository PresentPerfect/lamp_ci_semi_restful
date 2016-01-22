<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set("America/Los_Angeles");
	
	class Main extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			// $this->output->enable_profiler(TRUE);
			$this->load->model('Product');
		}

		public function index()
		{
			$all_products = $this->Product->get_all_products();
			$this->load->view('view_product',array('all_products'=>$all_products));
		}

		public function show($id)
		{
			$product_by_id = $this->Product->get_product_by_id($id);
			$this->load->view('view_show',array('product_by_id'=>$product_by_id));
		}

		public function edit($id)
		{
			$product_by_id = $this->Product->get_product_by_id($id);
			$this->load->view('view_edit',array('product_by_id'=>$product_by_id));
		}

		public function new_add()
		{
			$this->load->view('view_new_add');
		}

		public function add_product()
		{
			$this->Product->add_product($this->input->post());
			redirect('/');
		}

		public function update()
		{
			$update_product = $this->Product->update_product($this->input->post());
			redirect('/');
		}

		public function delete($id)
		{
			$this->Product->delete_product($id);
			redirect('/');
		}
	}

?>