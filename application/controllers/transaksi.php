<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

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
			$data['transaksi'] = $this->getdb->gettransaksi();
			$data['main_view'] = 'transaksi_view';
			$this->load->view('template', $data);
		}else{
			redirect('login');
		}
	}

	public function detiltransaksi($id)
	{
		# code...
		if ($this->session->userdata('user')) {
			# code...
			$data['transaksi'] = $this->getdb->getdetiltransaksi($id);
			$data['main_view'] = 'detil_transaksi_view';
			$this->load->view('template', $data);
		}else{
			redirect('login');
		}
	}

	public function addtransaksi()
	{
		# code...
		if ($this->session->userdata('user')) {
			# code...
			$data['obat'] = $this->getdb->getobat();
			$data['main_view'] = 'add_transaksi_view';
			$this->load->view('template', $data);
		}else{
			redirect('transaksi');
		}
	}

	public function edittransaksi($id)
	{
		# code...
		if ($this->session->userdata('user')) {
			# code...
			$data['main_view'] = 'edit_transaksi_view';
			$this->load->view('template', $data);
		}else{
			redirect('transaksi');
		}
	}

	public function proses()
	{
		# code...
		if ($this->session->userdata('user')) {
			# code...
			$this->form_validation->set_rules('nama_pembeli', 'Nama Pembeli', 'trim|required');
			$this->form_validation->set_rules('obat', 'Obat', 'trim|required');
			$this->form_validation->set_rules('jumlah_obat', 'Jumlah Pembelian', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				$harga = $this->getdb->getdetilobat($this->input->post('obat'))->HARGA_OBAT;
				$jumbel = $this->input->post('jumlah_obat');
				$hargatotal = (int)$harga * (int)$jumbel;
				$stockl = $this->getdb->getdetilobat($this->input->post('obat'))->STOCK_OBAT;
				$stock = (int)$stockl - (int)$jumbel;
				if($stock >= 0){
					if($this->insertdb->adddatatransaksi($hargatotal,$this->session->userdata('nip')) == TRUE){
						$data['idtran'] = $this->getdb->gettranterakhir()->ID_TRANSAKSI;
						$data['idobat'] = $this->input->post('obat');
						$data['namaobat'] = $this->getdb->getdetilobat($this->input->post('obat'))->NAMA_OBAT;
						$data['jumlahbeli'] = $jumbel;
						$data['hargaobat'] = $harga;
						$data['nip'] = $this->session->userdata('nip');
						$data['namapel'] = $this->input->post('nama_pembeli');
						$data['tglbeli'] = $this->input->post('tgl_beli');
						$data['totalharga'] = $hargatotal;
						$data['main_view'] = 'add_detailtransaksi_view';
						$this->load->view('template', $data);
					}else{
						$this->session->set_flashdata('addtrang', 'Tambah Transaksi Gagal');
						redirect('transaksi/addtransaksi');
					}
				}else{
					$this->session->set_flashdata('addtrang', 'Stock Barang Tidak Mencukupi');
					redirect('transaksi/addtransaksi');
				}
			}else{
				$this->session->set_flashdata('addtrang', validation_errors());
				redirect('transaksi/addtransaksi');
			}
		}else{
			redirect('transaksi');
		}
	}

	public function prosesdetil()
	{
		# code...
		if ($this->session->userdata('user')) {
			# code...
			$namaobat = $this->getdb->getdetilobat($this->input->post('obat'))->NAMA_OBAT;
			if ($this->insertdb->adddetiltransaksi($namaobat) == TRUE) {
				# code...
				$stockl = $this->getdb->getdetilobat($this->input->post('obat'))->STOCK_OBAT;
				$stockk = $this->input->post('jumlah_obat');
				$stock = (int)$stockl - (int)$stockk;
				if ($this->updatedb->editstock($stock) == TRUE) {
					# code...
					$this->session->set_flashdata('addtrans', 'Transaksi Berhasil');
					redirect('transaksi');
				}else{
					$this->session->set_flashdata('addtrang', 'Pengurangan Stock Gagal');
					redirect('transaksi/addtransaksi');
				}
			}else{
				$this->session->set_flashdata('addtrang', 'Penambahan Detil Transaksi Gagal');
				redirect('transaksi/addtransaksi');
			}
		}else{
			redirect('transaksi');
		}
	}
}

/* End of file transaksi.php */
/* Location: ./application/controllers/transaksi.php */