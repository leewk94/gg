<?php

class StudentList_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
        
          public function userSigleList($ID)
	{
		return $this->db->select('SELECT studID FROM user WHERE studIC= :ID' ,
				array('userid' => $_SESSION['userid']));
	}
        
        
       public function classesList()
	{
		return $this->db->select('SELECT * FROM classes LEFT JOIN trainer ON classes.traID=trainer.traID WHERE classesStatus="active"', 
				array('userid' => $_SESSION['userid']));
	}
        
         public function userList()
	{
		return $this->db->select('SELECT * FROM studprofile', 
				array('userid' => $_SESSION['userid']));
	}
        
        
        
	public function studentListList()
	{
		return $this->db->select('SELECT * FROM studentlist LEFT JOIN classes ON studentlist.classesID=classes.classesID LEFT JOIN studprofile ON studentlist.studID=studprofile.studID WHERE studName!="" ORDER BY studentlistID DESC');
	}
        
       
	
	public function studentListSingleList($studentListID)
	{
		return $this->db->select('SELECT * FROM studentList LEFT JOIN classes ON studentlistID.classesID=classes.classesID WHERE studentListID = :studentListID', 
			array('studentListid' => $studentListid));
	}
	
	public function create($data)
	{
      
           
		$this->db->insert('studentlist', array(
			'classesID' => $data['selectedclass'],
			'studID' => $data['selectedstud']
                      
			
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
		
		$this->db->update('studentList', $postData, 
				"`studentListID` = '{$data['studentListID']}' ");
            
            
            
	

	}
	
   public function delete($studentListID)
	{
		$result = $this->db->select('SELECT * FROM studentList WHERE studentListID = :studentListID', array(':studentListID' => $studentListID));

		//if ($result[0]['role'] == 'owner')
		//return false;
		
		$this->db->delete('studentList', "studentListID = '$studentListID'");
	}
}