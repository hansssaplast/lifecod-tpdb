<?php

class Madmin extends CI_Model{
    public function cek_login($u, $p){
        $q = $this->db->get_where('tbl_admin', array('username'=>$u, 'password'=>$p));
        return $q;
    }

	public function login($username, $password)
	{
		// $this->db->query('select * from users where username='$username'');
		$this->db->select('*');
		$this->db->from('tbl_admin');
		$this->db->where(['username'=>$username]);// tanda [] ini sama dengan fungsi array
		$return = $this->db->get();
		// memeriksa datanya apakah ada atau tidak
		// jika ada maka akan menampilkan pesan sukses
		if ($return->num_rows() > 0) {
			// result sama funginya dennga mysql fetch array mengambil nilainya kembali
			foreach ($return->result() as $row) 
			{
				$this->load->model('m_hashed');
				if (!$this->m_hashed->hash_verify($password, $row->password)) {
					
                    redirect ('adminpanel');
				}
				else
				{
                    $data_session = array(
                        'username' => $username,
                        'status'  => 'login'
                    );
                    $this->session->set_userdata($data_session);
                    redirect('adminpanel/dashboard');
					}

				}
			}
		
		// jika gagal
		
		else{
			$this->session->set_flashdata('pesan', 'Username Dan password tidak valid');
			redirect('adminpanel');
		}

	}

    public function get_all_data($tabel){
		$q=$this->db->get($tabel);
		return $q;
	}

	public function insert($tabel, $data){
		$this->db->insert($tabel, $data);
	}

	public function get_by_id($tabel, $id){
		return $this->db->get_where($tabel, $id);
	}

	public function update($tabel, $data, $pk, $id){
		$this->db->where($pk, $id);
		$this->db->update($tabel, $data);
	}

	public function delete($tabel, $id, $val){
		$this->db->delete($tabel, array($id => $val));
	}

}