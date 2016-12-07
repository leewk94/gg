<?php

class Admin_ViewAttendanceList_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function attendanceList()
	{
            return $this->db->select('SELECT * FROM classes INNER JOIN studentlist on classes.classesID=studentlist.classesID INNER JOIN trainer ON classes.traID=trainer.traID   WHERE classes.classesStatus="active" group by classes.classesID ORDER BY classes.classesDate DESC ');	
        }
        
	public function studentList($classID){
            return $this->db->select('SELECT * FROM studentlist LEFT JOIN studattendance on studentlist.classesID=studattendance.classID Inner JOIN studprofile on studentlist.studID=studprofile.studID WHERE studentlist.classesID =:userid and studentlist.studID = studattendance.studID GROUP BY studattendance.studID ORDER BY studattendance.studID', array(':userid' => $classID));
        }
		
	public function classesDetail($classID)
	{
            return $this->db->select('SELECT * FROM classes LEfT JOIN trainer on classes.traID=trainer.traID where classesID=:userid', array(':userid' => $classID));	
        }
	
}