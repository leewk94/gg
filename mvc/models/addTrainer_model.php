<?php

class addTrainer_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	//get next auto increment id
    public function trainerList()
	{
		return $this->db->select('SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = "dsms" AND TABLE_NAME = "user"');
	}
	
        
	public function create($data)
	{
           
		$this->db->insert('user', array(
			'login' => $data['login'],
			'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
			'role' => $data['role']
		));
	}
        
        public function create_trainer($data)
	{
            
		$this->db->insert('trainer', array(
			'traID'=>$data['id'],
                        'traName' => $data['login'],
                        'traIC' => $data['ic'],
                        'intructorLicense' => $data['license'],
                        'traAddress' => $data['address'],
                        'traContactNo' => $data['contact'],
                        'traEmail' => $data['email']
		));
	}
	
	
}