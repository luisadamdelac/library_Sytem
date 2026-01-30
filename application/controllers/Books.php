<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {

	public function index()
	{
        $data['title'] = 'All Books';
        $data['books'] = $this->Book_model->get_all_books();
		$this->load->view('Templates/header', $data);
        $this->load->view('Templates/sidebar');
		$this->load->view('Books/all_books', $data);
        $this->load->view('Templates/footer');
	}
    public function add() {
        $data['title'] = 'Adding of New Books';
        $data['categories'] = $this->Book_model->get_categories();

		$this->load->view('Templates/header', $data);
        $this->load->view('Templates/sidebar');
		$this->load->view('Books/add_books', $data);
        $this->load->view('Templates/footer');
    }

    public function save() {
        $data = array( 
            'title' => $this->input->post('title'),
            'author' => $this->input->post('author'),
            'category_id' => $this->input->post('category_id')
        );

        $this->Book_model->insert_book($data);
        redirect('Books');
    }
}
 