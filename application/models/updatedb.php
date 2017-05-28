<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Updatedb extends CI_Model {

	public function editstatus($id)
	{
		# code...
		$object = array(
			'STATUS_KARYAWAN' => 'tidak aktif'
			);
		$this->db->where('NIP_KARYAWAN',$id)
				 ->update('karyawan', $object);

		if ($this->db->affected_rows()) {
			# code...
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function editkaryawan()
	{
		# code...
		$object = array(
			'NAMA_KARYAWAN' => $this->input->post('nama_karyawan'),
			'JK_KARYAWAN' => $this->input->post('jk_karyawan'),
			'TTL_KARYAWAN' => $this->input->post('ttl_karyawan'),
			'ALAMAT_KARYAWAN' => $this->input->post('alamat_karyawan'),
			'ROLE_KARYAWAN' => $this->input->post('role_karyawan'),
			);
		$this->db->where('NIP_KARYAWAN',$this->input->post('nip_karyawan'))
				 ->update('karyawan', $object);

		if ($this->db->affected_rows()) {
			# code...
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function editsuplier()
	{
		# code...
		$object = array(
			'NAMA_SUPLIER' => $this->input->post('nama_suplier'),
			'ALAMAT_SUPLIER' => $this->input->post('alamat_suplier'),
			'KOTA_SUPLIER' => $this->input->post('kota_suplier'),
			'TELP_SUPLIER' => $this->input->post('telp_suplier'),
			);

		$this->db->where('ID_SUPLIER',$this->input->post('id_suplier'))
				 ->update('suplier', $object);

		if ($this->db->affected_rows()) {
			# code...
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function editstatusobat($id)
	{
		# code...
		$object = array(
			'STATUS' => 'hapus',
			'STOCK_OBAT' => 0
			);
		$this->db->where('ID_OBAT',$id)
				 ->update('obat', $object);

		if ($this->db->affected_rows()) {
			# code...
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function editstock($stock)
	{
		# code...
		$object = array(
			'STOCK_OBAT' => $stock
			);
		$this->db->where('ID_OBAT',$this->input->post('obat'))
				 ->update('obat', $object);

		if ($this->db->affected_rows()) {
			# code...
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function editobat($id)
	{
		# code...
		$object = array(
			'NAMA_OBAT' => $this->input->post('nama_obat'),
			'HARGA_OBAT' => $this->input->post('harga_obat'),
			'PRODUSEN_OBAT' => $this->input->post('produsen_obat')
			);
		$this->db->where('ID_OBAT',$id)
				 ->update('obat', $object);

		if ($this->db->affected_rows()) {
			# code...
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function editstatussuplier($id)
	{
		# code...
		$object = array(
				'STATUS_SUPLIER' => 'tidak aktif', 
			);

		$this->db->where('ID_SUPLIER',$id)
				 ->update('suplier', $object);

		if ($this->db->affected_rows()) {
			# code...
			return TRUE;
		}else{
			return FALSE;
		}
	}
}

/* End of file updatedb.php */
/* Location: ./application/models/updatedb.php */