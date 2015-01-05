<?php
class User_model extends CI_Model{

	const TBL_USER = 'user';


	public function login($username,$password){
		$condition = array(
				'username' => $username,
				'password' => md5($password)
			);
		$query = $this->db->where($condition)->get(self::TBL_USER);
		$result = $query->row_array();
		if($result && is_array($result)){
			if($result['username']==$username && $result['password']==MD5($password)){
				return $result;	
			}else{
				return FALSE;	
			}
		}else{
			return false;
		}
	}	
	
	public function get_all_user(){
		$query = $this->db->order_by('c_time desc')->get('user');
		$result = $query->result_array();
		if($result && is_array($result)){
			return $result;
		}else{
			return FALSE;
		}
		
	}

	public function get_one_user($mid){
		$query = $this->db->where('id',intval($mid))->get('user');
		$result = $query->row_array();
		if($result && is_array($result)){
			return $result;
		}else{
			return FALSE;
		}
	}
	
	public function del_one_user($mid){
		$this->db->where('id',intval($mid));
		if($this->db->delete('user')){
			return TRUE;
		}else{
			return FALSE;
		}
	}



}



