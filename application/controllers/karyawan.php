<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

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
			$data['main_view'] = 'karyawan_view';
			$this->load->view('template', $data);
		}else{
			redirect('login');
		}
	}

	public function detilkaryawan($id)
	{
		# code...
		if ($this->session->userdata('user')) {
			# code...
			$data['karyawan'] = $this->getdb->getdetilkaryawanjoin($id);
			$data['main_view'] = 'detil_karyawan_view';
			$this->load->view('template', $data);
		}else{
			redirect('login');
		}
	}

	public function addkaryawan()
	{
		# code...
		if ($this->session->userdata('role') == 'superadmin') {
			# code...
			$data['main_view'] = 'add_karyawan_view';
			$this->load->view('template', $data);
		}else{
			redirect('karyawan');
		}
	}

	public function editkaryawan($id)
	{
		# code...
		if ($this->session->userdata('role') == 'superadmin') {
			# code...
			$data['karyawan'] = $this->getdb->getdetilkaryawan($id);
			$data['main_view'] = 'edit_karyawan_view';
			$this->load->view('template', $data);
		}else{
			redirect('karyawan');
		}
	}

	public function proses()
	{
		# code...
		if ($this->session->userdata('role') == 'superadmin') {
			# code...
			$this->form_validation->set_rules('nama_karyawan', 'Nama', 'trim|required');
			$this->form_validation->set_rules('jk_karyawan', 'Jenis Kelamin', 'trim|required');
			$this->form_validation->set_rules('alamat_karyawan', 'Alamat', 'trim|required');
			$this->form_validation->set_rules('ttl_karyawan', 'Tanggal Lahir', 'trim|required');
			$this->form_validation->set_rules('role_karyawan', 'Role', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				# code...
				$config['upload_path'] = './assets/img/karyawan/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']  = 2000;
				
				$this->upload->initialize($config);

				if ($this->upload->do_upload('foto_karyawan')){
					if($this->insertdb->addkaryawan($this->upload->data()) == TRUE){
						$data['nip'] = $this->getdb->getnipterakhir();
						$data['nama'] = $this->input->post('nama_karyawan');
						$data['jk'] = $this->input->post('jk_karyawan');
						$data['alamat'] = $this->input->post('alamat_karyawan');
						$data['ttl'] = $this->input->post('ttl_karyawan');
						$data['status'] = 'aktif';
						$data['role'] = $this->input->post('role_karyawan');
						$data['main_view'] = 'add_account_view';
						$this->load->view('template', $data);
					}else{
						$this->session->set_flashdata('addkarg', 'Tambah Karyawan Gagal');
						redirect('karyawan/addkaryawan');
					}
				}else{
					$this->session->set_flashdata('addkarg', $this->upload->display_errors());
					redirect('karyawan/addkaryawan');
				}
			} else {
				# code...
				$this->session->set_flashdata('addkarg', validation_errors());
				redirect('karyawan/addkaryawan');
			}
		}else{
			redirect('karyawan');
		}
	}

	public function prosesaccount()
	{
		# code...
		if ($this->session->userdata('role') == 'superadmin') {
			# code...
			$this->form_validation->set_rules('username_karyawan', 'Username', 'trim|required');
			$this->form_validation->set_rules('password_karyawan', 'Password', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				# code...
				if ($this->insertdb->addaccount() == TRUE) {
					# code...
					$this->session->set_flashdata('addkars', 'Penambahan Karyawan Berhasil');
					redirect('karyawan');
				}else{
					if ($this->hapusdb->hapuskaryawangagal($this->getdb->getnipterakhir()->NIP_KARYAWAN) == TRUE) {
						# code...
						$this->session->set_flashdata('addkarg', 'Penambahan Karyawan Gagal');
						redirect('karyawan/addkaryawan');
					}
				}
			} else {
				# code...
				if ($this->hapusdb->hapuskaryawangagal($this->getdb->getnipterakhir()->NIP_KARYAWAN) == TRUE) {

					$this->session->set_flashdata('addkarg', 'Penambahan Karyawan Gagal');
					redirect('karyawan/addkaryawan');
				}
			}
		}else{
			redirect('karyawan');
		}
	}

	public function prosesedit()
	{
		# code...
		if ($this->session->userdata('role') == 'superadmin') {
			# code...
			if ($this->updatedb->editkaryawan() == TRUE) {
				# code...
				$this->session->set_flashdata('editkars', 'Data Karyawan Berhasil Diubah');
				redirect('karyawan');
			}else{
				$this->session->set_flashdata('editkarg', 'Data Karyawan Gagal Diubah');
				redirect('karyawan/editkaryawan/'.$this->input->post('nip_karyawan'));
			}
		}else{
			redirect('karyawan');
		}
	}

	public function hapus($id)
	{
		# code...
		if ($this->session->userdata('role') == 'superadmin') {
			# code...
			if($this->updatedb->editstatus($id) == TRUE){
				if($this->hapusdb->hapusaccount($id) == TRUE){
					$this->session->set_flashdata('delkars', 'Pemberhentian Karyawan Berhasil');
					redirect('karyawan');
				}else{
					$this->session->set_flashdata('delkarg', 'Hapus Account Gagal');
					redirect('karyawan');
				}
			}else{
				$this->session->set_flashdata('delkarg', 'Pemberhentian Karyawan Gagal');
				redirect('karyawan');
			}
		}else{
			redirect('karyawan');
		}
	}

}

/* End of file karyawan.php */
/* Location: ./application/controllers/karyawan.php */