<?php

class Classes_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
        
        public function trainerList()
	{
		return $this->db->select('SELECT * FROM trainer',
				array('userid' => $_SESSION['userid']));
                
	}
        public function getid(){
              return $this->db->select('SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = "dsms" AND TABLE_NAME = "classes"');
        }
        
	public function classesList()
	{
		return $this->db->select('SELECT * FROM classes LEFT JOIN trainer ON classes.traID=trainer.traID WHERE traName!=""', 
				array('userid' => $_SESSION['userid']));
                
               
	}
	
	public function classesSingleList($classesID)
	{
		return $this->db->select('SELECT * FROM classes LEFT JOIN trainer ON classes.traID=trainer.traID WHERE classesid = :classesid', 
			array('classesid' => $classesID));
	}
	
	public function create($data)
	{
		$this->db->insert('classes', array(
			'classesType' => $data['classesType'],
			'traID' => $data['traID'],
			'classesDate' => $data['classesDate'],
                         'classesTime' => $data['classesTime'],
			'classesStatus' => 'active'
		));
                
               
               $this->db->insert('traattendance', array(
			'classesID' => $data['getid']
		));
               
                
	}
	
    
        
	public function editSave($data)
	{
            
            
            $postData = array(
			'traID' => $data['traID'],
			'classesDate' => $data['classesDate'],
                'classesTime' => $data['classesTime'],
                'classesType' => $data['classesType'],
                'classesStatus' => $data['classesStatus'],
                
		);
		
		$this->db->update('classes', $postData, 
				"`classesID` = '{$data['classesID']}' ");
            
            
            
	

	}
	
   public function delete($classesID)
	{
		$result = $this->db->select('SELECT * FROM classes WHERE classesID = :classesID', array(':classesID' => $classesID));

		//if ($result[0]['role'] == 'owner')
		//return false;
		
		$this->db->delete('classes', "classesID = '$classesID'");
	}
}