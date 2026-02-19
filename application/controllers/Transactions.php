<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Transactions extends CI_Controller {

    public $Transaction_model;

    public function __construct() {

        parent::__construct();

        $this->load->model('Transaction_model');

    }

    

    public function all_transaction()

    {

        $data['title'] = 'All Transaction';

        $data['borrow'] = $this->Transaction_model->get_all_transaction();



        $this->load->view('Templates/header', $data);

        $this->load->view('Templates/sidebar');

        $this->load->view('Transactions/all_transactions', $data);

        $this->load->view('Templates/footer');

    }



    public function borrow()

    {

        $data['title'] = 'Borrowing/Returning of Books';

        $data['borrow'] = $this->Transaction_model->get_all_borrow();

        $data['books'] = $this->Transaction_model->get_all_books();

        $data['users'] = $this->Transaction_model->get_all_users();



        $this->load->view('Templates/header', $data);

        $this->load->view('Templates/sidebar');

        $this->load->view('Transactions/borrow', $data);

        $this->load->view('Templates/footer');

    }



    public function borrow_add()

    {

        $data['title'] = 'Borrow Book';

        $data['books'] = $this->Transaction_model->get_all_books();

        $data['users'] = $this->Transaction_model->get_all_users();



        if ($this->input->post()) {

            $borrow_date = $this->input->post('borrow_date') ?: date('Y-m-d');
            $due_date = $this->input->post('due_date') ?: date('Y-m-d', strtotime('+7 days'));

            $this->db->trans_start();

            $this->db->insert('transactions', array(

                'user_id' => $this->input->post('user_id'),

                'book_id' => $this->input->post('book_id'),

                'borrow_date' => $borrow_date,

                'due_date' => $due_date,

                'status' => 'Borrowed'

            ));

            $this->db->trans_complete();

            if ($this->db->trans_status()) {

                redirect('Transactions/borrow');

            } else {

                $data['error'] = 'Failed to borrow book.';

            }

        }



        $this->load->view('Templates/header', $data);

        $this->load->view('Templates/sidebar');

        $this->load->view('Transactions/borrow_add', $data);

        $this->load->view('Templates/footer');

    }



    public function return($id) {

        $this->db->trans_start();

        $this->db->where('transaction_id', $id)

                ->update('transactions', array(

                    'status' => 'Returned',

                    'return_date' => date('Y-m-d')

                ));

        $this->db->trans_complete();

        if ($this->db->trans_status()) {
            redirect('Transactions/borrow');
        } else {
            // Handle error, perhaps redirect with error message
            redirect('Transactions/borrow');
        }
    }

    public function borrow_save() {
            $book_id = $this->input->post('book_id');
            $user_id = $this->input->post('user_id');   
            $borrow_date = $this->input->post('borrow_date') ?: date('Y-m-d');
            $due_date = $this->input->post('due_date') ?: date('Y-m-d', strtotime('+7 days'));

            $this->Transaction_model->borrow_save($user_id, $book_id, $borrow_date, $due_date);
            redirect('Transactions/borrow');

    }

}

 