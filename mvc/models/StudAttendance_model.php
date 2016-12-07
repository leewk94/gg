<?php

class StudAttendance_model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function StudAttendance() {
        
        $userId = $this->getStudId($_SESSION['userid']);
        $sUserId = $userId[0]['studID'];
        //echo $sUserId;
        return $this->db->select('SELECT a.*,p.studName,p.studIC,p.studDOB,p.studContactNo,p.studEmail,c.classesDate,c.classesTime,c.classesType FROM studattendance AS a INNER JOIN studprofile AS p ON p.studID=a.studID LEFT JOIN studentlist AS l ON l.studID=a.studID LEFT JOIN classes AS c ON c.classesID=l.classesID WHERE a.studID=:studID',array('studID'=>$sUserId));
        
    }
    public function getStudId($id){
        return $this->db->select('SELECT * FROM studprofile WHERE userID=:userID',array('userID'=>$id));
    }
    
}