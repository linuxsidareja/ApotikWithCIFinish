<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suplier extends CI_Controller {
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
			$data['suplier'] = $this->getdb->getsuplier();
			$data['main_view'] = 'suplier_view';
			$this->load->view('template', $data);
		}else{
			redirect('login');
		}
	}

	public function detilsuplier($id)
	{
		# code...
		if ($this->session->userdata('user')) {
			# code...
			$data['suplier'] = $this->getdb->getdetilsuplier($id);
			$data['main_view'] = 'detil_suplier_view';
			$this->load->view('template', $data);
		}else{
			redirect('login');
		}
	}

	public function addsuplier()
	{
		# code...
		if ($this->session->userdata('user')) {
			# code...
			$data['main_view'] = 'add_suplier_view';
			$this->load->view('template', $data);
		}else{
			redirect('obat');
		}
	}

	public function editsuplier($id)
	{
		# code...
		if ($this->session->userdata('user')) {
			# code...
			$data['suplier'] = $this->getdb->getdetilsuplier($id);
			$data['main_view'] = 'edit_suplier_view';
			$this->load->view('template', $data);
		}else{
			redirect('obat');
		}
	}

	public function proses()
	{
		# code...
		if ($this->session->userdata('user')) {
			# code...
			$this->form_validation->set_rules('nama_suplier', 'Nama', 'trim|required');
			$this->form_validation->set_rules('alamat_suplier', 'Alamat', 'trim|required');
			$this->form_validation->set_rules('kota_suplier', 'Kota', 'trim|required');
			$this->form_validation->set_rules('telp_suplier', 'No. Telp', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				# code...
				if($this->insertdb->addsuplier() == TRUE){
					$this->session->set_flashdata('addsups', 'Tambah Suplier Berhasil');
					redirect('suplier');
				}else{
					$this->session->set_flashdata('addsupg', 'Tambah Suplier Gagal');
					redirect('suplier/addsuplier');
				}
			} else {
				# code...
				$this->session->set_flashdata('addsupg', validation_errors());
				redirect('suplier/addsuplier');
			}
		}else{
			redirect('suplier');
		}
	}

	public function prosesedit()
	{
		# code...
		if ($this->session->userdata('user')) {
			# code...
			if ($this->updatedb->editsuplier() == TRUE) {
				# code...
				$this->session->set_flashdata('editsups', 'Data Suplier Berhasil Diubah');
				redirect('suplier');
			}else{
				$this->session->set_flashdata('editsupg', 'Data Suplier Gagal Diubah');
				redirect('suplier/editsuplier/'.$this->input->post('id_suplier'));
			}
		}else{
			redirect('suplier');
		}
	}

	public function hapus($id)
	{
		# code...
		if ($this->session->userdata('user')) {
			if ($this->updatedb->editstatussuplier($id) == TRUE) {
				# code...
				$this->session->set_flashdata('delsups', 'Data Suplier Berhasil Dihapus');
				redirect('suplier');
			}else{
				$this->session->set_flashdata('delsupg', 'Data Suplier Gagal Dihapus');
				redirect('suplier');
			}
		}else{

		}
	}
}

/* End of file suplier.php */
/* Location: ./application/controllers/suplier.php */