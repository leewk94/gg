<?php

class TraProgress_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
        
        //get list of car
	public function carList()
	{
            $user_id=Session::get('userid');
            return $this->db->select('SELECT * FROM assign LEFT JOIN  trainer on assign.traName= trainer.traName where trainer.traID=:userid and Date =CURDATE() and status="ON" ORDER BY assignID' , array(':userid' => $user_id));
	}
        
        //count number of comment
	public function commentNum()
	{
            $user_id=Session::get('userid');
            return $this->db->select(' SELECT *, IFNULL(comments.total,0) As comments
                                    From assign Left Join
                                    (SELECT assignID,count(comment) as total FROM  traprogress
                                    where traID=:userid GROUP BY assignID ORDER BY assignID) comments
                                    On assign.assignID = comments.assignID
                                    where assign.Date =CURDATE() and assign.status="ON"' , array(':userid' => $user_id));
        }
        
        //get specific car detail
	public function carSingleList($carID)
	{
		return $this->db->select('SELECT * FROM assign WHERE assignID = :carid', array(':carid' => $carID));
	}
        
        //insert trainer progress/comment
	public function insertTraProgress($data)  
	{   $user_id=Session::get('userid');
            $this->db->insert('traprogress', array(
			'assignID' => $data['id'],
                        'traID'=>$user_id,
			'timeFrom' =>$data['timeFrom'],
			'timeTo' =>$data['timeTo'],
                        'comment'  => $data['comment']
		));
	}
        
        //display comment
        public function commentList($carID){
           $user_id=Session::get('userid');
           return $this->db->select('SELECT * FROM assign LEFT JOIN traprogress on assign.assignID= traprogress.assignID WHERE traprogress.assignID =:carid and traprogress.traID=:useid', array(':carid' => $carID,':useid'=>$user_id));
        }
	
        //delete comment
	public function delete($progressID)
	{
		$this->db->delete('traprogress', "progressID = '$progressID'");
	}
}