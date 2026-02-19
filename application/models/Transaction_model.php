<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_transaction() {
        $this->db->select('transactions.*, books.title, books.author, categories.category_name, CONCAT(users.Fname, " ", users.Lname) as fullname, users.student_no, users.email, roles.role_name');
        $this->db->from('transactions');
        $this->db->join('books', 'transactions.book_id = books.book_id');
        $this->db->join('users', 'transactions.user_id = users.user_id');
        $this->db->join('roles', 'users.role_id = roles.role_id');
        $this->db->join('categories', 'books.category_id = categories.category_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_all_borrow() {
        $this->db->select('transactions.*, books.title, books.author, categories.category_name, CONCAT(users.Fname, " ", users.Lname) as fullname');
        $this->db->from('transactions');
        $this->db->join('books', 'transactions.book_id = books.book_id');
        $this->db->join('users', 'transactions.user_id = users.user_id');
        $this->db->join('categories', 'books.category_id = categories.category_id');
        $this->db->where('transactions.status', 'Borrowed');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_all_books() {
        $this->db->select('books.*, categories.category_name');
        $this->db->from('books');
        $this->db->join('categories', 'books.category_id = categories.category_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_all_users() {
        $this->db->select('*, CONCAT(Fname, " ", Lname) as fullname');
        $this->db->from('users');
        $query = $this->db->get();
        return $query->result();
    }

    public function borrow_save($user_id, $book_id, $borrow_date, $due_date) {
        $data = [
            'user_id' => $user_id,
            'book_id' => $book_id,
            'borrow_date' => $borrow_date,
            'due_date' => $due_date,
            'status' => 'Borrowed'
        ];
        $this->db->insert('transactions', $data);
    }
}
