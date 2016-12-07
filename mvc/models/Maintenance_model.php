<?php

class maintenance_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
//calls the attributes in maintenance table
	public function maintenanceList()
	{
		return $this->db->select('SELECT * FROM maintenance');
	}
		//return the attributes when update table
	public function maintenanceSingleList($ID)
	{
		return $this->db->select('SELECT * FROM maintenance WHERE ID = :ID', array(':ID' => $ID));
	}
	
	//insert data to maintenance table
	public function create($data)
	{
		$this->db->insert('maintenance', array(
		 'ID' => $data['ID'],
            'Cond' => $data['Cond'],
            'Sol' => $data['Sol'],
			'Date' => $data['Date'],
            'Timefrom' => $data['Timefrom'],
			'Timeto' => $data['Timeto'],
            'Workshop' => $data['Workshop'],
			'Cost' => $data['Cost']
           
			
		));
		//$this->db->insert('car', $data);
		
		print_r($data);
		
	}
	
	
	
	//insert edited data to maintenance table
	public function editSave($data)
	{
		 $sth = $this->db->prepare('UPDATE maintenance
			SET `Cond` = :Cond, `Sol` = :Sol,`Date` = :Date,`Timefrom` = :Timefrom,`Timeto` = :Timeto,`Workshop` = :Workshop, `Cost` = :Cost
			WHERE ID = :ID
			');
		
		$sth->execute(array(
			':ID' => $data['ID'],
			':Cond' => $data['Cond'],
			':Sol' => $data['Sol'],
			':Date' => $data['Date'],
			':Timefrom' => $data['Timefrom'],
			':Timeto' => $data['Timeto'],
			':Workshop' => $data['Workshop'],
			':Cost' => $data['Cost']
		));
	print_r($data);	

	}
	//remove the array 
	public function delete($ID)
	{
	
		$this->db->delete('maintenance', "ID = '$ID'");
	}
}