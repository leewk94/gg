<?php

class StudProgress_model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function StudProgress() {
        $userId = $this->getStudId($_SESSION['userid']);
        $sUserId = $userId[0]['studID'];
        //echo $sUserId;
        return $this->db->select('SELECT s.*,p.studName,p.studIC,p.studDOB,p.studContactNo,p.studEmail FROM studprogress AS s INNER JOIN studprofile AS p ON p.studID=s.studID WHERE s.studID=:studID',array('studID'=>$sUserId));
    }
    public function getStudId($id){
        return $this->db->select('SELECT * FROM studprofile WHERE userID=:userID',array('userID'=>$id));
    }
    
}