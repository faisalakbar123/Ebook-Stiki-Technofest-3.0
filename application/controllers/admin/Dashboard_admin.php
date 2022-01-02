<?php

class Dashboard_admin extends CI_Controller
{

	public function index()
	{
		if ($this->session->userdata('role_id') == "1") {
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/dashboard');
			$this->load->view('templates_admin/footer');
		} else {
			redirect(base_url());
		}

	}
}


?>
