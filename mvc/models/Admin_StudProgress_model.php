<?php

class Admin_StudProgress_model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function Admin_StudProgress() {
        return $this->db->select('SELECT a.*,p.studName,p.studIC FROM studprogress as a INNER JOIN studprofile as p ON p.studID=a.studID');
    }
    public function Admin_StudProgressView($id){
        
        return $this->db->select('SELECT a.*,p.studName,p.studIC,p.studDOB,p.studEmail,p.studContactNo FROM studprogress as a INNER JOIN studprofile as p ON p.studID=a.studID WHERE a.studID=:studID', array(':studID' => $id));
    }
    
    public function success($data){
        
        $postData = array(
            'studProgressStatus' => $data['status']
        );
        $this->db->update('studprogress', $postData,"`studID` = '{$data['id']}'");
    }
    public function failure($data){
        
        $postData = array(
            'studProgressStatus' => $data['status']
        );
        $this->db->update('studprogress', $postData,"`studID` = '{$data['id']}'");
    }
    public function reset($data){
        
        $postData = array(
            'studProgressStatus' => $data['status']
        );
        $this->db->update('studprogress', $postData,"`studID` = '{$data['id']}'");
    }
    
}
