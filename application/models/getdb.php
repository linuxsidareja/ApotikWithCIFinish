<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Getdb extends CI_Model {

	public function getkaryawan()
	{
		# code...
		return $this->db->where('STATUS_KARYAWAN','aktif')
						->get('karyawan')
						->result();
	}

	public function getdetilkaryawan($id)
	{
		# code...
		return $this->db->where('NIP_KARYAWAN',$id)
						->get('karyawan')
						->row();
	}

	public function getnipterakhir()
	{
		# code...
		return $this->db->order_by('NIP_KARYAWAN', 'desc')
						->limit(1)
						->get('karyawan')
						->row();
	}

	public function getsuplier()
	{
		# code...
		return $this->db->where('STATUS_SUPLIER','aktif')
						->get('suplier')
						->result();
	}

	public function getdetilsuplier($id)
	{
		# code...
		return $this->db->where('ID_SUPLIER',$id)
						->get('suplier')
						->row();
	}

	public function getobat()
	{
		# code...
		return $this->db->get('obat')
						->result();
	}

	public function getobatada()
	{
		# code...
		return $this->db->where('STATUS','ada')
						->get('obat')
						->result();
	}

	public function getdetilobat($id)
	{
		# code...
		return $this->db->where('ID_OBAT',$id)
						->get('obat')
						->row();
	}

	public function gettransaksi()
	{
		# code...
		return $this->db->join('detil_transaksi','data_transaksi.ID_TRANSAKSI = detil_transaksi.ID_TRANSAKSI')
						->get('data_transaksi')
						->result();
	}

	public function getdetiltransaksi($id)
	{
		# code...
		return $this->db->where('data_transaksi.ID_TRANSAKSI',$id)
						->join('detil_transaksi','data_transaksi.ID_TRANSAKSI = detil_transaksi.ID_TRANSAKSI')
						->get('data_transaksi')
						->row();
	}	

	public function gettranterakhir()
	{
		# code...
		return $this->db->order_by('ID_TRANSAKSI', 'desc')
						->limit(1)
						->get('data_transaksi')
						->row();
	}

	public function getdetilkaryawanjoin($id)
	{
		# code...
		return $this->db->where('karyawan.NIP_KARYAWAN',$id)
						->join('account','karyawan.NIP_KARYAWAN = account.NIP_KARYAWAN')
						->get('karyawan')
						->row();
	}

}

/* End of file getdb.php */
/* Location: ./application/models/getdb.php */