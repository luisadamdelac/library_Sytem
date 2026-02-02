<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction_model extends CI_Model {

    public function get_all_transactions() {
        $this->db->select('transactions.*, books.title as book_title, CONCAT(users.Fname, " ", users.Lname) as fullname, categories.category_name');
        $this->db->from('transactions');
        $this->db->join('books', 'books.book_id = transactions.book_id');
        $this->db->join('users', 'users.user_id = transactions.user_id');
        $this->db->join('categories', 'categories.category_id = books.category_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function insert_transaction($data) {
        $this->db->insert('transactions', $data);
    }

    public function update_transaction($transaction_id, $data) {
        $this->db->where('transaction_id', $transaction_id);
        $this->db->update('transactions', $data);
    }
}
