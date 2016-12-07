<?php

class Admin_ViewTrainer_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
        
        //list out trainer 
	public function trainerList()
	{
		return $this->db->select('SELECT * FROM trainer');
	} 
        
        //display single trainer profile
	public function trainerSingleList($userid)
	{
		return $this->db->select('SELECT * FROM trainer WHERE traID = :userid', array(':userid' => $userid));
	}
	

	//update profile
	public function editSave($data)
	{
			$postData = array(
                        'traName' => $data['name'],
                        'traIC' => $data['ic'],
                        'intructorLicense' => $data['license'],
                        'traAddress' => $data['address'],
                        'traContactNo' => $data['contact'],
                        'traEmail' => $data['email'],
		);
                
                $postData_1= array(
                         'login' => $data['name']
                );
		
		$this->db->update('trainer', $postData, "`traID` = {$data['id']}");
                $this->db->update('user', $postData_1, "`userid` = {$data['id']}");
	}
	
        //delete account
	public function delete($userid)
	{
		$this->db->delete('trainer', "traID = '$userid'");
                $this->db->delete('user', "userid = '$userid'");
	}
        
        //list out attendance
        public function attendanceList($userid){
            return $this->db->select('SELECT * FROM classes LEFT JOIN traattendance on traattendance.classesID=classes.classesID WHERE classes.traID = :userid ORDER BY classes.classesDate', array(':userid' => $userid));
        }
        
        //list out progress
        public function progressList($userid){
            return $this->db->select('SELECT * FROM assign LEFT JOIN traprogress on assign.assignID=traprogress.assignID WHERE traprogress.traID = :userid ORDER BY assign.Plate', array(':userid' => $userid));
        }
        
        //change password
          public function changePassword($userid)
	{
          return $this->db->select('SELECT * FROM user WHERE userid = :userid', array(':userid' => $userid));    
	}
        
	public function newPassword($userid)
	{
		return $this->db->select('SELECT * FROM user WHERE userid = :userid', array(':userid' => $userid));
	}
        
	 	public function updatePassword($data)
	{
		$postData = array(
                        'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY)
		);
                $this->db->update('user', $postData, "`userid` = {$data['id']}");
	}
}