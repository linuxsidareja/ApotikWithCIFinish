<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('getdb');
		$this->load->model('insertdb');
		$this->load->model('updatedb');
		$this->load->model('hapusdb');
	}

	public function index()
	{
		if ($this->session->userdata('user')) {
			# code...
			$data['karyawan'] = $this->getdb->getkaryawan();
			$data['obat'] = $this->getdb->getobatada();
			$data['suplier'] = $this->getdb->getsuplier();
			$data['transaksi'] = $this->getdb->gettransaksi();
			$data['main_view'] = 'dashboard_view';
			$this->load->view('template', $data);
		}else{
			redirect('login');
		}
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */