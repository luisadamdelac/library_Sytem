<?php
defined('BASEPATH') OR exit('No direct script access allowed');

#[\AllowDynamicProperties]
class Reports extends CI_Controller {

    public $Transaction_model;
    public $User_model;
    public $Book_model;

    public function __construct() {
        parent::__construct();
        $this->load->model('Transaction_model');
        $this->load->model('User_model');
        $this->load->model('Book_model');
    }

    public function book_list() {
        $data['title'] = 'Report - List of All Books';
        $data['books'] = $this->Book_model->get_all_books();

        $this->load->view('Templates/header', $data);
        $this->load->view('Templates/sidebar');
        $this->load->view('Reports/book_list', $data);
        $this->load->view('Templates/footer');  
    }

    public function book_list_pdf() {
        $data['title'] = 'Report - List of All Books';
        $data['books'] = $this->Book_model->get_all_books();

        $this->load->view('Reports/book_list_pdf', $data);
    }

    public function borrow_return_report() {
        $data['title'] = 'Report - Borrow / Return Report';
        $data['transactions'] = $this->Transaction_model->get_all_transaction();

        $this->load->view('Templates/header', $data);
        $this->load->view('Templates/sidebar');
        $this->load->view('Reports/borrow_return', $data);
        $this->load->view('Templates/footer');
    }

    public function users_report() {
        $data['title'] = 'Report - Users Report';
        $data['users'] = $this->User_model->get_all_users();

        $this->load->view('Templates/header', $data);
        $this->load->view('Templates/sidebar');
        $this->load->view('Reports/users_report', $data);
        $this->load->view('Templates/footer');
    }

    public function attendance_report() {
        $data['title'] = 'Report - Attendance Report';
        $data['transactions'] = $this->Transaction_model->get_all_transaction();

        $this->load->view('Templates/header', $data);
        $this->load->view('Templates/sidebar');
        $this->load->view('Reports/attendance_report', $data);
        $this->load->view('Templates/footer');
    }
}
