<?php

class registercar_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
//calls the attributes in registercar table
	public function registercarList()
	{
		return $this->db->select('SELECT * FROM registercar');
	}
		//return the attributes when update table

	public function registercarSingleList($carID)
	{
		return $this->db->select('SELECT * FROM registercar WHERE carID = :carID', array(':carID' => $carID));
	}
	
		//insert data to registercar table
	public function create($data)
	{
		$this->db->insert('registercar', array(
		 'carID' => $data['carID'],
            'Name' => $data['Name'],
            'Plate' => $data['Plate'],
			'Brand' => $data['Brand'],
            'Status' => $data['Status']
			
		));
		//$this->db->insert('car', $data);
		
		
		
	}
	
	
	
	//insert edited data to registercar table
	public function editSave($data)
	{
		 $sth = $this->db->prepare('UPDATE registercar
			SET `Name` = :Name, `Plate` = :Plate,`Brand` = :Brand,`Status` = :Status
			WHERE carID = :carID
			');
		
		$sth->execute(array(
			':carID' => $data['carID'],
			':Name' => $data['Name'],
			':Plate' => $data['Plate'],
			':Brand' => $data['Brand'],
			':Status' => $data['Status']
		));
		
print_r($data);
	}
	//remove the array 
	public function delete($carID)
	{
	
		$this->db->delete('registercar', "carID = '$carID'");
	}
}