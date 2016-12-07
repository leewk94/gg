<?php

class assign_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
//calls the attributes in assign table
	public function assignList()
	{
		return $this->db->select('SELECT * FROM assign');
	}
	//return the attributes when update table
	public function assignSingleList($assignID)
	{
		return $this->db->select('SELECT * FROM assign WHERE assignID = :assignID', array(':assignID' => $assignID));
	}
	//insert data to assign table
	public function create($data)
	{
		$this->db->insert('assign', array(
		 'assignID' => $data['assignID'],
            'Date' => $data['Date'],
            'Timefrom' => $data['Timefrom'],
			'Timeto' => $data['Timeto'],
            'Status' => $data['Status'],
			'traName' => $data['traName'],
			'Plate' => $data['Plate']
			
		));
		//$this->db->insert('car', $data);
	}
	
	//insert edited data to assign table
	public function editSave($data)
	{
		 $sth = $this->db->prepare('UPDATE assign
			SET `assignID` = :assignID,`Date` = :Date, `Timefrom` = :Timefrom,`Timeto` = :Timeto,`Status` = :Status,`traName` = :traName,`Plate` = :Plate
			WHERE assignID = :assignID
			');
		
		$sth->execute(array(
		'assignID' => $data['assignID'],
            'Date' => $data['Date'],
            'Timefrom' => $data['Timefrom'],
			'Timeto' => $data['Timeto'],
            'Status' => $data['Status'],
			'traName' => $data['traName'],
			'Plate' => $data['Plate']
		));
		
print_r($data);
	}
	//remove the array 
	public function delete($assignID)
	{
	
		$this->db->delete('assign', "assignID = '$assignID'");
	}
}
