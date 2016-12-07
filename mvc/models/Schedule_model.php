<?php

class Schedule_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function scheduleList()
	{
            return $this->db->select('SELECT * FROM classes LEFT JOIN trainer ON classes.traID=trainer.traID WHERE traName!="" ORDER BY classesDate DESC');	
//classes no student wont list out
        }
        
         public function classesList()
	{
		return $this->db->select('SELECT * FROM classes LEFT JOIN trainer ON classes.traID=trainer.traID', 
				array('userid' => $_SESSION['userid']));
	}
	
       
        
     	public function scheduleSingleList($scheduleID)
	{
		return $this->db->select('SELECT * FROM studentlist WHERE classesID = :scheduleid',array(':scheduleid' => $scheduleID));
	}
	
        public function studentList()
	{
		return $this->db->select('SELECT * FROM studentlist LEFT JOIN classes ON studentlist.classesID=classes.classesID LEFT JOIN studprofile ON studentlist.studID=studprofile.studID ORDER BY studentlistID DESC');
	}
	
}