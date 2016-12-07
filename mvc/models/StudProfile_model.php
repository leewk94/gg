<?php

class StudProfile_model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function studProfile() {
        return $this->db->select('SELECT * FROM studprofile WHERE userID = :userID', array('userID' => $_SESSION['userid']));
    }
    public function studProfileEdit($userid){
        return $this->db->select('SELECT * FROM studprofile WHERE studID = :studID', array(':studID' => $userid));
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
    public function studChangePassword($id){
        $user = $this->getUserId($id);
        $userId = $user[0]['userID'];
        return $this->db->select('SELECT u.*,s.studID FROM user AS u INNER JOIN studprofile as s ON s.userID=u.userid WHERE u.userid=:userid',array(':userid'=>$userId));
    }
    public function getUserId($id){
        return $this->db->select('SELECT * FROM studprofile WHERE studID=:studID',array(':studID'=>$id));
    }
    public function updatePassword($data){
        
        $postData = array(
            'password'=>Hash::create('sha256', $data['newPassword'], HASH_PASSWORD_KEY)
        );
        $this->db->update('user', $postData,"`userid` = '{$data['userID']}'");
    }
    
}