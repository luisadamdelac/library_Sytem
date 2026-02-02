<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transactions extends CI_Controller {

    public $Transaction_model;

    public function __construct() {
        parent::__construct();
        $this->load->model('Transaction_model');
        $this->load->model('Book_model');
    }

    public function all_transactions()
    {
        $data['title'] = 'All Transactions';
        $data['Transactions'] = $this->Transaction_model->get_all_transactions();
        $this->load->view('Templates/header', $data);
        $this->load->view('Templates/sidebar');
        $this->load->view('Transactions/all_transactions', $data);
        $this->load->view('Templates/footer');
    }

    public function add() {
        $data['title'] = 'Borrow Book';
        $data['books'] = $this->Book_model->get_all_books();

        $this->load->view('Templates/header', $data);
        $this->load->view('Templates/sidebar');
        $this->load->view('Transactions/add_transaction', $data);
        $this->load->view('Templates/footer');
    }

    public function save() {
        $data = array(
            'book_id' => $this->input->post('book_id'),
            'user_id' => $this->input->post('user_id'),
            'borrow_date' => $this->input->post('borrow_date'),
            'due_date' => $this->input->post('due_date'),
            'status' => 'Borrowed'
        );

        $this->Transaction_model->insert_transaction($data);
        redirect('transactions/all_transactions');
    }

    public function return_book() {
        $data['title'] = 'Return Book';

        $this->load->view('Templates/header', $data);
        $this->load->view('Templates/sidebar');
        $this->load->view('Transactions/return_book', $data);
        $this->load->view('Templates/footer');
    }

    public function return_save() {
        $data = array(
            'return_date' => $this->input->post('actual_return_date'),
            'status' => 'Returned'
        );

        $this->Transaction_model->update_transaction($this->input->post('transaction_id'), $data);
        redirect('transactions/all_transactions');
    }
}
