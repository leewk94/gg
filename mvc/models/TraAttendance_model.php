<?php

class TraAttendance_Model extends Model
{
	public function __construct(){
		parent::__construct();
	}
        
        //get list of classes
	public function classesList(){
            $user_id=Session::get('userid');
            return $this->db->select('SELECT * FROM classes INNER JOIN studentlist on classes.classesID=studentlist.classesID LEFT JOIN traattendance ON classes.classesID=traattendance.classesID WHERE classes.classesDate= CURDATE() and classes.classesStatus="active" and classes.traID =:userid GROUP BY classes.classesID' , array(':userid' => $user_id));
        }
	
        //get student detail base on classesId
	public function attendanceSingleList($classesID){
            return $this->db->select('SELECT * FROM classes LEFT JOIN studentlist  on classes.classesID=studentlist.classesID Inner JOIN studprofile ON studentlist.studID=studprofile.studID WHERE classes.classesID =:userid ORDER BY studentlist.studID', array(':userid' => $classesID));
	
	}
        
        //get student attendance status
	public function studentList($studID){
            return $this->db->select('SELECT * FROM studentlist LEFT JOIN studattendance on studentlist.classesID=studattendance.classID Inner JOIN studprofile ON studentlist.studID=studprofile.studID WHERE studentlist.classesID =:userid  and studentlist.studID = studattendance.studID GROUP BY studattendance.studID  ORDER BY studattendance.studID', array(':userid' => $studID));
        }
        
        //get trainer attendance status
        public function traAttendance($traID){
              return $this->db->select('SELECT  * FROM traattendance WHERE classesID =:userid', array(':userid' => $traID));
        }
        
	//insert student attendance
	public function insertStudAttendance($data)
	{
                      $this->db->insert('studattendance', array(
										'studID' => $data['studId'],
										'studAttendanceStatus' =>$data['studAttendanceStatus'],
										'classID'=>$data['classes']
		)); 
	}
       
        //update student attendance
        public function updateStudAttendance($data)
	{
		$postData = array(
			'studAttendanceStatus' =>$data['studAttendanceStatus']
		);
		
		$this->db->update('studattendance', $postData, "`studID` = {$data['studId']} and `classID` = {$data['classes']}");
               
	}
        
        //update trainer check in time
        public function traCheckIn($data)
	{
		$postData = array(
			'checkIn' =>$data['checkIn'],
                        'attendanceStatus' =>$data['attendancestatus'],
		);	
		$this->db->update('traattendance', $postData, "`classesID` = {$data['classes']}");
         
	}
        
        //update trainer check out time
        public function traCheckOut($data)
	{
		$postData = array(
			'checkOut' =>$data['checkOut'],
                        'attendanceStatus' =>$data['attendancestatus'],
		);	
		$this->db->update('traattendance', $postData, "`classesID` = {$data['classes']}");
         
	}
	

}