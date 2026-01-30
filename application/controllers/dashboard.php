<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
        $data['title'] = 'Dashboard';
		$this->load->view('Templates/header', $data);
        $this->load->view('Templates/sidebar');
		$this->load->view('dashboard/index');
        $this->load->view('Templates/footer');
	}
}
 