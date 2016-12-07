<?php

class result_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function resultList()
	{
		return $this->db->select('SELECT * FROM result WHERE studID = :userid', 
				array('userid' => $_SESSION['userid']));
	}
	
	public function create($data)
	{
		$this->db->insert('result', array(
			'resultClass' => $data['classID'],
			'grade' => $data['grade'],
			'studID' => $data['studID'],
		));
	}

}