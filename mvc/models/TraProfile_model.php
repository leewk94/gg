<?php

class TraProfile_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
        
        //display trainer profile
	public function trainerList()
	{
          $traID= Session::get('userid');
          return $this->db->select('SELECT * FROM trainer WHERE traID = :userid', array(':userid' => $traID));        
	}
       
	//display trainer profile for edit
        public function trainerSingleList($traID)
	{
            return $this->db->select('SELECT * FROM trainer WHERE traID = :userid', array(':userid' => $traID));
	}
        

	//update trainer profile
	public function updateTraProfile($data)
	{
		$postData = array(
                        'traName' => $data['traName'],
                        'traIC' => $data['traIC'],
                        'intructorLicense' => $data['instructorLicense'],
                        'traAddress' => $data['traAddress'],
                        'traContactNo' => $data['traContactNo'],
                        'traEmail' => $data['traEmail'],
		);
                
                $postData_1= array(
                         'login' => $data['traName']
                );
		
		$this->db->update('trainer', $postData, "`traID` = {$data['traID']}");
                $this->db->update('user', $postData_1, "`userid` = {$data['traID']}");
	} 
        
        
        //upadte password
        public function changePassword()
	{
          $userid= Session::get('userid');
          return $this->db->select('SELECT * FROM user WHERE userid = :userid and role="trainer"', array(':userid' => $userid));
                
	}
        
	public function newPassword($userid)
	{
		return $this->db->select('SELECT * FROM user WHERE userid = :userid', array(':userid' => $userid));
	}
        
        public function updatePassword($data)
	{
		$postData = array(
                        'password' => Hash::create('sha256', $data['traPassword'], HASH_PASSWORD_KEY)
		);
                
                $this->db->update('user', $postData, "`userid` = {$data['traID']}");
	}
}