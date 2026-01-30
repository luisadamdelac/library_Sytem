<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

	
        public function get_all() {

            return $this->db->get('categories')->result();
        }

        public function delete($category_id) {
            return $this->db->delete('categories', array('category_id' => $category_id));
        }

        public function insert($data) {
            return $this->db->insert('categories', $data);
        }

        public function get_by_id($category_id) {
            return $this->db->get_where('categories', array('category_id' => $category_id))->row();
        }

        public function update($category_id, $data) {
            $this->db->where('category_id', $category_id);
            return $this->db->update('categories', $data);
        }

}
 