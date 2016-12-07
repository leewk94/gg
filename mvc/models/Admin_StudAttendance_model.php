<?php

class Admin_StudAttendance_model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Admin_StudAttendance() {
        return $this->db->select('SELECT a.*,p.studName,p.studIC FROM studattendance as a INNER JOIN studprofile as p ON p.studID=a.studID');
    }
    public function Admin_StudAttendanceView($id){
        
        return $this->db->select('SELECT a.*,p.studName,p.studIC,p.studDOB,p.studContactNo,p.studEmail,c.classesDate,c.classesTime,c.classesType FROM studattendance AS a INNER JOIN studprofile AS p ON p.studID=a.studID LEFT JOIN studentlist AS l ON l.studID=a.studID LEFT JOIN classes AS c ON c.classesID=l.classesID WHERE a.studID=:studID', array(':studID' => $id));
    }
    public function attend($data){
        
        $postData = array(
            'studAttendanceStatus' => $data['status']
        );
        $this->db->update('studattendance', $postData,"`studID` = '{$data['id']}'");
    }
    public function absent($data){
        
        $postData = array(
            'studAttendanceStatus' => $data['status']
        );
        $this->db->update('studattendance', $postData,"`studID` = '{$data['id']}'");
    }
    public function undo($data){
        $postData = array(
            'studAttendanceStatus' => $data['status']
        );
        $this->db->update('studattendance', $postData,"`studID` = '{$data['id']}'");
    }
            
}
