<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

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
			$data['obat'] = $this->getdb->getobat();
			$data['main_view'] = 'obat_view';
			$this->load->view('template', $data);
		}else{
			redirect('login');
		}
	}

	public function detilobat($id)
	{
		# code...
		if ($this->session->userdata('user')) {
			# code...
			$data['obat'] = $this->getdb->getdetilobat($id);
			$data['suplier'] = $this->getdb->getsuplier();
			$data['main_view'] = 'detil_obat_view';
			$this->load->view('template', $data);
		}else{
			redirect('login');
		}
	}

	public function addobat()
	{
		# code...
		if ($this->session->userdata('user')) {
			# code...
			$data['obat'] = $this->getdb->getobat();
			$data['suplier'] = $this->getdb->getsuplier();
			$data['main_view'] = 'add_obat_view';
			$this->load->view('template', $data);
		}else{
			redirect('obat');
		}
	}

	public function editobat($id)
	{
		# code...
		if ($this->session->userdata('user')) {
			# code...
			$data['obat'] = $this->getdb->getdetilobat($id);
			$data['main_view'] = 'edit_obat_view';
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
			$this->form_validation->set_rules('nama_obat', 'Nama Obat', 'trim|required');
			$this->form_validation->set_rules('suplier', 'Suplier', 'trim|required');
			$this->form_validation->set_rules('produsen_obat', 'Produsen', 'trim|required');
			$this->form_validation->set_rules('harga_obat', 'Harga', 'trim|required');
			$this->form_validation->set_rules('stock_obat', 'Stock', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				# code...
				$config['upload_path'] = './assets/img/obat/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']  = 2000;
				
				$this->upload->initialize($config);

				if ($this->upload->do_upload('foto_obat')){
					if($this->insertdb->addobat($this->upload->data()) == TRUE){
						$this->session->set_flashdata('addobs', 'Tambah Obat Berhasil');
						redirect('obat');
					}else{
						$this->session->set_flashdata('addobg', 'Tambah Obat Gagal');
						redirect('obat/addobat');
					}
				}else{
					$this->session->set_flashdata('addobg', $this->upload->display_errors());
					redirect('obat/addobat');
				}
			} else {
				# code...
				$this->session->set_flashdata('addobg', validation_errors());
				redirect('obat/addobat');
			}
		}else{
			redirect('obat');
		}
	}

	public function prosesedit()
	{
		# code...
		if ($this->session->userdata('user')) {
			# code...
			if ($this->updatedb->editobat($this->input->post('id_obat')) == TRUE) {
				# code...
				$this->session->set_flashdata('editobs', 'Data Obat Berhasil Diubah');
				redirect('obat');
			}else{
				$this->session->set_flashdata('editobg', 'Data Obat Gagal Diubah');
				redirect('obat/editobat/'.$this->input->post('id_obat'));
			}
		}else{
			redirect('obat');
		}
	}

	public function prosesstock()
	{
		# code...
		if ($this->session->userdata('user')) {
			# code...
			$stockt = $this->input->post('stock_obat');
			$stockl = $this->getdb->getdetilobat($this->input->post('obat'))->STOCK_OBAT;
			$stock = (int)$stockt + (int)$stockl;
			if ($this->updatedb->editstock($stock) == TRUE) {
				# code...
				$this->session->set_flashdata('addobs', 'Penambahan Stock Berhasil');
				redirect('obat');
			}else{
				$this->session->set_flashdata('addobg', 'Penambahan Stock Gagal');
				redirect('obat/addobat');
			}
		}else{
			redirect('obat');
		}
	}
	
	public function hapus($id)
	{
		# code...
		if ($this->session->userdata('user')) {
			# code...
			if ($this->updatedb->editstatusobat($id) == TRUE) {
				# code...
				$this->session->set_flashdata('delobs', 'Obat Berhasil Di hapus');
				redirect('obat');
			}else{
				$this->session->set_flashdata('delobg', 'Obat Gagal Di hapus');
				redirect('obat');
			}
		}else{
			redirect('obat');
		}
	}

}

/* End of file obat.php */
/* Location: ./application/controllers/obat.php */