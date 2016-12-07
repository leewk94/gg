<?php

class Admin_StudProfile_model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Admin_StudProfile() {
        return $this->db->select('SELECT * FROM studprofile');
    }
    
    public function create($data){
        $sUserName = $data['name'];
        $sUserName = str_replace(" ", "", $sUserName);
        $postData2 = array(
            'login' => $sUserName,'password'=>Hash::create('sha256', $sUserName, HASH_PASSWORD_KEY),'role'=>'student'
        );
        $this->db->insert('user',$postData2);
        
        $userId = $this->getUserId($sUserName,Hash::create('sha256', $sUserName, HASH_PASSWORD_KEY));
        $sUserId = $userId[0]['userid'];
        $postData = array(
            'studName' => $data['name'],'userID'=>$sUserId,'studIC' =>$data['IC'],'studDOB' =>$data['DOB'],
            'studContactNo' =>$data['contact'],'studEmail' =>$data['email'],'studAdd' =>$data['address']
        );
        $this->db->insert('studprofile',$postData);
        
        $studId = $this->getStudId($data['name'],$data['IC']);
        $sStudId = $studId[0]['studId'];
        
        $postData3 = array(
            'studAttendanceStatus'=>'Pending','studID'=>$sStudId
        );
        $this->db->insert('studattendance',$postData3);
        
        $postData4 = array(
            'studProgressStatus'=>'Pending','studID'=>$sStudId
        );
        $this->db->insert('studprogress',$postData4);
    }
    public function Admin_StudProfileEdit($userid){
        return $this->db->select('SELECT * FROM studprofile WHERE studID = :studID', array(':studID' => $userid));
    }
    public function getStudId($name,$IC){
        
        return $this->db->select("SELECT studId FROM studprofile WHERE studName='$name' AND studIC='$IC'");
    }
    public function getUserId($name,$password){
        return $this->db->select("SELECT userid FROM user WHERE login='$name' AND password='$password'");
    }
    public function getUserIds($id){
        return $this->db->select("SELECT userID FROM studprofile WHERE studID='$id'");
    }
    public function delete($id){
        
        //echo $id;
        $userId = $this->getUserIds($id);
        $userIds = $userId[0]['userID'];
        //echo $userIds;
        $this->db->delete('studattendance',"studID='$id'");
        $this->db->delete('studprogress',"studID='$id'");
        $this->db->delete('studprofile',"studID='$id'");
        $this->db->delete('user',"userid='$userIds'");
    }
    public function editSave($data){
        
        $postData = array(
            'studName' => $data['studName'],
            'studIC' =>$data['studIC'],
            'studDOB' =>$data['studDOB'],
            'studContactNo' =>$data['studContact'],
            'studEmail' =>$data['studEmail'],
            'studAdd' =>$data['studAdd']
        );
        $this->db->update('studprofile', $postData,"`studID` = '{$data['studID']}'");
        
    }
}
