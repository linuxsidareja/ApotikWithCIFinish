<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hapusdb extends CI_Model {

	public function hapusaccount($id)
	{
		# code...
		$this->db->where('NIP_KARYAWAN',$id)
				 ->delete('account');

		if ($this->db->affected_rows()) {
			# code...
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function hapuskaryawangagal($id)
	{
		# code...
		$this->db->where('NIP_KARYAWAN',$id)
				 ->delete('karyawan');

		if ($this->db->affected_rows()) {
			# code...
			return TRUE;
		}else{
			return FALSE;
		}
	}

}

/* End of file hapusdb.php */
/* Location: ./application/models/hapusdb.php */