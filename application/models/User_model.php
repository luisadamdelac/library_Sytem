<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    // Users CRUD
    public function get_all_users() {
        $this->db->select('users.*, roles.role_name');
        $this->db->from('users');
        $this->db->join('roles', 'users.role_id = roles.role_id');
        $this->db->order_by('users.Lname', 'ASC');
        return $this->db->get()->result();
    }

    public function get_user_by_id($user_id) {
        $this->db->select('users.*, roles.role_name');
        $this->db->from('users');
        $this->db->join('roles', 'users.role_id = roles.role_id');
        $this->db->where('users.user_id', $user_id);
        return $this->db->get()->row();
    }

    public function insert_user($data) {
        return $this->db->insert('users', $data);
    }

    public function update_user($user_id, $data) {
        $this->db->where('user_id', $user_id);
        return $this->db->update('users', $data);
    }

    public function delete_user($user_id) {
        return $this->db->delete('users', array('user_id' => $user_id));
    }

    // Roles CRUD
    public function get_all_roles() {
        return $this->db->get('roles')->result();
    }

    public function get_role_by_id($role_id) {
        return $this->db->get_where('roles', array('role_id' => $role_id))->row();
    }

    public function insert_role($data) {
        return $this->db->insert('roles', $data);
    }

    public function update_role($role_id, $data) {
        $this->db->where('role_id', $role_id);
        return $this->db->update('roles', $data);
    }

    public function delete_role($role_id) {
        return $this->db->delete('roles', array('role_id' => $role_id));
    }

    // Check if student_no exists
    public function check_student_no_exists($student_no, $user_id = null) {
        $this->db->where('student_no', $student_no);
        if ($user_id) {
            $this->db->where('user_id !=', $user_id);
        }
        return $this->db->get('users')->num_rows() > 0;
    }

    // Get user by student_no for login/authentication
    public function get_user_by_student_no($student_no) {
        $this->db->select('users.*, roles.role_name');
        $this->db->from('users');
        $this->db->join('roles', 'users.role_id = roles.role_id');
        $this->db->where('users.student_no', $student_no);
        return $this->db->get()->row();
    }
}
