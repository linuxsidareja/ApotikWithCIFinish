<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insertdb extends CI_Model {

	public function addkaryawan($foto)
	{
		# code...
		$object = array(
			'NAMA_KARYAWAN' => $this->input->post('nama_karyawan'),
			'JK_KARYAWAN' => $this->input->post('jk_karyawan'),
			'FOTO_KARYAWAN' => $foto['file_name'], 
			'ALAMAT_KARYAWAN' => $this->input->post('alamat_karyawan'), 
			'TTL_KARYAWAN' => $this->input->post('ttl_karyawan'), 
			'STATUS_KARYAWAN' => 'aktif', 
			'ROLE_KARYAWAN' => $this->input->post('role_karyawan'), 
			);

		$this->db->insert('karyawan', $object);

		if ($this->db->affected_rows()) {
			# code...
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function addaccount()
	{
		# code...
		$object = array(
			'USERNAME' => $this->input->post('username_karyawan'),
			'NIP_KARYAWAN' => $this->input->post('nip_karyawan'),
			'PASSWORD' => $this->input->post('password_karyawan'),
			);

		$this->db->insert('account', $object);

		if ($this->db->affected_rows()) {
			# code...
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function addsuplier()
	{
		# code...
		$object = array(
			'NAMA_SUPLIER' => $this->input->post('nama_suplier'),
			'ALAMAT_SUPLIER' => $this->input->post('alamat_suplier'),
			'KOTA_SUPLIER' => $this->input->post('kota_suplier'),
			'TELP_SUPLIER' => $this->input->post('telp_suplier'),
			'STATUS_SUPLIER' => 'aktif'
			);

		$this->db->insert('suplier', $object);

		if ($this->db->affected_rows()) {
			# code...
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function addobat($foto)
	{
		# code...
		$object = array(
			'NAMA_OBAT' => $this->input->post('nama_obat'),
			'ID_SUPLIER' => $this->input->post('suplier'),
			'FOTO_OBAT' => $foto['file_name'], 
			'HARGA_OBAT' => $this->input->post('harga_obat'), 
			'STATUS' => 'ada', 
			'STOCK_OBAT' => $this->input->post('stock_obat'), 
			'PRODUSEN_OBAT' => $this->input->post('produsen_obat'), 
			);

		$this->db->insert('obat', $object);

		if ($this->db->affected_rows()) {
			# code...
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function adddatatransaksi($harga,$nip)
	{
		# code...
		$object = array(
			'NIP_KARYAWAN' => $nip,
			'NAMA_PEMBELI' => $this->input->post('nama_pembeli'),
			'TGL_BELI' => $this->input->post('tgl_beli'),
			'TOTAL_HARGA' => $harga
			);

		$this->db->insert('data_transaksi', $object);

		if ($this->db->affected_rows()) {
			# code...
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function adddetiltransaksi($obat)
	{
		# code...
		$object = array(
			'ID_TRANSAKSI' => $this->input->post('id_transaksi'),
			'ID_OBAT' => $this->input->post('obat'),
			'JUMLAH_PEMBELIAN' => $this->input->post('jumlah_obat'),
			'NAM_OBAT' => $obat,
			'HARGA_PEROBAT' => $this->input->post('harga_obat'),
			);

		$this->db->insert('detil_transaksi', $object);

		if ($this->db->affected_rows()) {
			# code...
			return TRUE;
		}else{
			return FALSE;
		}
	}
}

/* End of file insertdb.php */
/* Location: ./application/models/insertdb.php */