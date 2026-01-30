<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_model extends CI_Model {

	
        public function get_all_books() {
            $this->db->select('books.book_id, books.title, books.author, books.status, categories.category_name');
            $this->db->from('books');
            $this->db->join('categories','books.category_id = categories.category_id');
            $this->db->order_by('books.title', 'ASC');
            return $this->db->get()->result();
        }

        public function get_categories() {
            return $this->db->get('categories')->result();
        }

        public function insert_book($data) {
            return $this->db->insert('books',$data);
        }
	
}
 