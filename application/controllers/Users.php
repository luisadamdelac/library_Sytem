<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public $User_model;
    public $form_validation;
    public $session;
    public $input;

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->library('session');
    }

    // List all users
    public function index() {
        $data['users'] = $this->User_model->get_all_users();
        $data['roles'] = $this->User_model->get_all_roles();
        $data['title'] = 'Add User';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('users/index', $data);
        $this->load->view('templates/footer');
    }

    // Add new user
    public function add() {
        $data['title'] = 'Add User';
        $data['roles'] = $this->User_model->get_all_roles();

        $this->form_validation->set_rules('student_no', 'Student Number', 'required|is_unique[users.student_no]');
        $this->form_validation->set_rules('Lname', 'Last Name', 'required');
        $this->form_validation->set_rules('Fname', 'First Name', 'required');
        $this->form_validation->set_rules('role_id', 'Role', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('Users');
        } else {
            $user_data = array(
                'student_no' => $this->input->post('student_no'),
                'Lname' => $this->input->post('Lname'),
                'Fname' => $this->input->post('Fname'),
                'Mname' => $this->input->post('Mname'),
                'email' => $this->input->post('email'),
                'role_id' => $this->input->post('role_id'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
            );

            if ($this->User_model->insert_user($user_data)) {
                $this->session->set_flashdata('success', 'User added successfully!');
                redirect('Users');
            } else {
                $this->session->set_flashdata('error', 'Failed to add user.');
                redirect('Users');
            }
        }
    }

    // Edit user
    public function edit($user_id = null) {
        if (!$user_id) {
            $user_id = $this->input->post('user_id');
        }
        $data['title'] = 'Edit User';
        $data['user'] = $this->User_model->get_user_by_id($user_id);
        $data['roles'] = $this->User_model->get_all_roles();

        if (!$data['user']) {
            show_404();
        }

        $this->form_validation->set_rules('student_no', 'Student Number', 'required');
        $this->form_validation->set_rules('Lname', 'Last Name', 'required');
        $this->form_validation->set_rules('Fname', 'First Name', 'required');
        $this->form_validation->set_rules('role_id', 'Role', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('users/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $user_data = array(
                'student_no' => $this->input->post('student_no'),
                'Lname' => $this->input->post('Lname'),
                'Fname' => $this->input->post('Fname'),
                'Mname' => $this->input->post('Mname'),
                'email' => $this->input->post('email'),
                'role_id' => $this->input->post('role_id')
            );

            if ($this->input->post('password')) {
                $user_data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            }

            if ($this->User_model->update_user($user_id, $user_data)) {
                $this->session->set_flashdata('success', 'User updated successfully!');
                redirect('Users');
            } else {
                $this->session->set_flashdata('error', 'Failed to update user.');
                redirect('Users/edit/' . $user_id);
            }
        }
    }

    // Delete user
    public function delete($user_id) {
        if ($this->User_model->delete_user($user_id)) {
            $this->session->set_flashdata('success', 'User deleted successfully!');
        } else {
            $this->session->set_flashdata('error', 'Failed to delete user.');
        }
        redirect('Users');
    }

    // Manage roles
    public function roles() {
        $data['title'] = 'User Roles';
        $data['roles'] = $this->User_model->get_all_roles();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('users/roles', $data);
        $this->load->view('templates/footer');
    }

    // Add role
    public function add_role() {
        $this->form_validation->set_rules('role_name', 'Role Name', 'required|is_unique[roles.role_name]');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('Users/roles');
        } else {
            $role_data = array('role_name' => $this->input->post('role_name'));

            if ($this->User_model->insert_role($role_data)) {
                $this->session->set_flashdata('success', 'Role added successfully!');
            } else {
                $this->session->set_flashdata('error', 'Failed to add role.');
            }
            redirect('Users/roles');
        }
    }

    // Update role
    public function update_role() {
        $role_id = $this->input->post('role_id');
        $this->form_validation->set_rules('role_name', 'Role Name', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('Users/roles');
        } else {
            $role_data = array('role_name' => $this->input->post('role_name'));

            if ($this->User_model->update_role($role_id, $role_data)) {
                $this->session->set_flashdata('success', 'Role updated successfully!');
            } else {
                $this->session->set_flashdata('error', 'Failed to update role.');
            }
            redirect('Users/roles');
        }
    }

    // Delete role
    public function delete_role($role_id) {
        if ($this->User_model->delete_role($role_id)) {
            $this->session->set_flashdata('success', 'Role deleted successfully!');
        } else {
            $this->session->set_flashdata('error', 'Failed to delete role.');
        }
        redirect('Users/roles');
    }
}
