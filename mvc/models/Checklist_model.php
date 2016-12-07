<?php

class checklist_model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function checkList()
	{
		return $this->db->select('SELECT studID FROM result GROUP BY studID');
	}
	
	public function checkSingleList()
	{
		return $this->db->select('SELECT * FROM result ORDER BY studid ASC');
	}

	public function editSave($data)
	{
		$postData = array(
			'title' => $data['title'],
			'content' => $data['content'],
		);
		
		$this->db->update('note', $postData, 
				"`noteid` = '{$data['noteid']}' AND userid = '{$_SESSION['userid']}'");
	}
	
	public function delete($id)
	{
		$this->db->delete('note', "`noteid` = {$data['noteid']} AND userid = '{$_SESSION['userid']}'");
	}
}