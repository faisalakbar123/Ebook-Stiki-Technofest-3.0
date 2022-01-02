<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}


	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login page';
			$this->load->view('templates_login/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates_login/auth_footer');
		} else {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$user = $this->db->get_where('user', ['email' => $email])->row_array();
			if ($user) {
				if ($user['is_active'] == 1) {
					if (password_verify($password, $user['password'])) {
						$data = [
							'email' => $user['email'],
							'role_id' => $user['role_id'],
							'name' => $user['name']
						];
						$this->session->set_userdata($data);

						if ($user['role_id'] == 1) {

							redirect('admin/dashboard_admin');
						}
						else if ($user['role_id'] == 2) {

							redirect('admin/kepala');
						}  else {
							redirect('Dashboard');
						}
					} else {
						$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">
						  wrong password
						</div>');
						redirect('auth');


					}

				} else {

					$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">
						  This email has not been activated
						</div>');
					redirect('auth');

				}


			} else {

				$this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">
						  email is not register
						</div>');
				redirect('auth');

			}


		}

	}


	public function registration()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Nama', 'required|trim');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'password dont metch!',
			'min_length' => 'password too shorth']);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'This email has already registered!']);


		if ($this->form_validation->run() == false) {


			$data['title'] = 'Registration';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('templates/auth_footer');


		} else {
			$data = [
				'name' => htmlentities($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time()

			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
						  Congratulation  your acount has been created.please login
						</div>');
			redirect('auth');
		}


	}

	public function logout()
	{

		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->unset_userdata('name');


		$this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
						  You have been logout
						</div>');
		redirect('auth');

	}


}
