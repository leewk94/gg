<?php

class Admin_AllStaff_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function userList()
	{
		return $this->db->select('SELECT userid, login, role FROM user where role="admin"');
	}
	
	public function userSingleList($userid)
	{
		return $this->db->select('SELECT userid, login, role FROM user WHERE userid = :userid', array(':userid' => $userid));
	}
	
	public function create($data)
	{
		$this->db->insert('user', array(
			'login' => $data['login'],
			'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
			'role' => $data['role']
		));
	}
	
	public function editSave($data)
	{
		$postData = array(
			'login' => $data['login'],
			'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
			'role' => $data['role']
		);
                $user_id=$data['id'];
		
		$this->db->update('user', $postData, "`userid` = $user_id");
	}
	
	public function delete($userid)
	{
		$result = $this->db->select('SELECT role FROM user WHERE userid = :userid', array(':userid' => $userid));

		if ($result[0]['role'] == 'owner')
		return false;
		
                if($reusult[0]['role']=='trainer'){
                $this->db->delete('trainer', "traID = '$userid'");
                }
		$this->db->delete('user', "userid = '$userid'");
	}
}