<?php

class maintenance extends Controller {

	public function __construct() {
		parent::__construct();

	}
	//assign list model
	public function index() 
	{	
		$this->view->maintenanceList = $this->model->maintenanceList();
		$this->view->render('Maintenance/index');
	}
	// create array for maintenance
	public function create() 
	{
		$data = array();
		$data['ID'] = $ID;
			$data['Cond'] = $_POST['Cond'];
			$data['Sol'] = $_POST['Sol'];
		$data['Date'] = $_POST['Date'];
		$data['Timefrom'] = $_POST['Timefrom'];
			$data['Timeto'] = $_POST['Timeto'];
		$data['Workshop'] = $_POST['Workshop'];
		$data['Cost'] = $_POST['Cost'];
		// @TODO: Do your error checking!
		print_r($data);
		$this->model->create($data);
		header('location: ' . URL . 'maintenance');
	}
	// assign edit to model 
	public function edit($ID) 
	{
		$this->view->maintenanceSingleList = $this->model->maintenanceSingleList($ID);
		$this->view->render('Maintenance/edit');
	}
	
	
	//update the array for maintenance 
	
	public function editSave($ID)
	{
		$data = array();
		$data['ID'] = $ID;
		$data['Cond'] = $_POST['Cond'];
		$data['Sol'] = $_POST['Sol'];
		$data['Date'] = $_POST['Date'];
		$data['Timefrom'] = $_POST['Timefrom'];
		$data['Timeto'] = $_POST['Timeto'];
		$data['Workshop'] = $_POST['Workshop'];
		$data['Cost'] = $_POST['Cost'];
		
		
		// @TODO: Do your error checking!
		print_r($data);
		$this->model->editSave($data);
		header('location: ' . URL . 'maintenance');
	}
	// delete the array using id only 
	public function delete($ID)
	{
		$this->model->delete($ID);
		header('location: ' . URL . 'maintenance');
	}
	
	//delete session 
	function logout()
	{
		Session::destroy();
		header('location: ' . URL .  'login');
		exit;
	}
}