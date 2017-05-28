<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginmodel extends CI_Model {

	public function proses()
	{
		# code...
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$query = $this->db->where('username',$username)
				 ->where('password',$password)
				 ->get('account');

		if ($query->num_rows() > 0) {
			# code...
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	public function getsession($username,$password)
	{
		# code...
		return $this->db->where('username',$username)
						->where('password',$password)
						->join('karyawan','account.NIP_KARYAWAN = karyawan.NIP_KARYAWAN')
						->get('account')
						->row();
	}
}

/* End of file loginmodel.php */
/* Location: ./application/models/loginmodel.php */