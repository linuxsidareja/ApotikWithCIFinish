<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('loginmodel');
	}

	public function index()
	{
		if (!$this->session->userdata('user')) {
			# code...
			$data['main_view'] = 'login_view';
			$this->load->view('template', $data);
		}else{
			redirect('dashboard');
		}
	}

	public function proses()
	{
		# code...
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			# code...
			if($this->loginmodel->proses() == TRUE){
				$array = array(
					'user' => $this->input->post('username'),
					'role' => $this->loginmodel->getsession($this->input->post('username'),$this->input->post('password'))->ROLE_KARYAWAN,
					'status'=> $this->loginmodel->getsession($this->input->post('username'),$this->input->post('password'))->STATUS_KARYAWAN,
					'nip'=> $this->loginmodel->getsession($this->input->post('username'),$this->input->post('password'))->NIP_KARYAWAN
				);
				
				$this->session->set_userdata( $array );
				$this->session->set_flashdata('logins', 'Login Berhasil');
				redirect('dashboard');
			}else{
				$this->session->set_flashdata('loging', 'Username atau Password Salah');
				redirect('login');
			}
		} else {
			# code...
			$this->session->set_flashdata('loging', validation_errors());
			redirect('login');
		}
	}

	public function logout()
	{
		# code...
		session_destroy();
		redirect('login');
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */