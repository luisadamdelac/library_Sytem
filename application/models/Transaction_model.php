<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_transaction() {
        $this->db->select('transactions.*, books.title, books.author, categories.category_name, CONCAT(users.Fname, " ", users.Lname) as fullname');
        $this->db->from('transactions');
        $this->db->join('books', 'transactions.book_id = books.book_id');
        $this->db->join('users', 'transactions.user_id = users.user_id');
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
}
