<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Category_model');
    }
	public function index()
	{
        $data['title'] = 'Categories';
        $data['categories'] = $this->Category_model->get_all();

		$this->load->view('Templates/header', $data);
        $this->load->view('Templates/sidebar');
		$this->load->view('categories/index');
        $this->load->view('Templates/footer');
	}

	public function delete($category_id)
	{
        $this->Category_model->delete($category_id);
        redirect('categories');
	}

	public function add()
	{
        $data['title'] = 'Add Category';
		$this->load->view('Templates/header', $data);
        $this->load->view('Templates/sidebar');
		$this->load->view('categories/add');
        $this->load->view('Templates/footer');
	}

	public function save()
	{
        $data = array(
            'category_name' => $this->input->post('category_name')
        );
        $this->Category_model->insert($data);
        redirect('categories');
	}

	public function edit($category_id)
	{
        $data['title'] = 'Edit Category';
        $data['category'] = $this->Category_model->get_by_id($category_id);
		$this->load->view('Templates/header', $data);
        $this->load->view('Templates/sidebar');
		$this->load->view('categories/edit');
        $this->load->view('Templates/footer');
	}

	public function update($category_id)
	{
        $data = array(
            'category_name' => $this->input->post('category_name')
        );
        $this->Category_model->update($category_id, $data);
        redirect('categories');
	}
}
 