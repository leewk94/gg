<?php

class assign extends Controller {

	public function __construct() {
		parent::__construct();

	}
	//assign the list to the models
	public function index() 
	{	
		$this->view->assignList = $this->model->assignList();
		$this->view->render('Assign/index');
	}
	//create array of attribute for assign 
	public function create() 
	{
		$data = array();
	$data['assignID'] = $assignID;
			$data['Date'] = $_POST['Date'];
			$data['Timefrom'] = $_POST['Timefrom'];
		$data['Timeto'] = $_POST['Timeto'];
		$data['Status'] = $_POST['Status'];
		$data['traName'] = $_POST['traName'];
		$data['Plate'] = $_POST['Plate'];
		// @TODO: Do your error checking!
			print_r($data);
		$this->model->create($data);
		header('location: ' . URL . 'assign');
	}
	
	public function edit($assignID) 
	{
		$this->view->assignSingleList = $this->model->assignSingleList($assignID);
		$this->view->render('Assign/edit');
	}
	// edit the assign car , update the values
	public function editSave($assignID)
	{
		$data = array();
				$data['assignID'] = $assignID;
			$data['Date'] = $_POST['Date'];
			$data['Timefrom'] = $_POST['Timefrom'];
		$data['Timeto'] = $_POST['Timeto'];
		$data['Status'] = $_POST['Status'];
		$data['traName'] = $_POST['traName'];
		$data['Plate'] = $_POST['Plate'];
		
		
		// @TODO: Do your error checking!
		print_r($data);
		$this->model->editSave($data);
	header('location: ' . URL . 'assign');
	}
	//delete all information using single id
	public function delete($assignID)
	{
		$this->model->delete($assignID);
		header('location: ' . URL . 'assign');
	}
	//destroy the session
	function logout()
	{
		Session::destroy();
		header('location: ' . URL .  'login');
		exit;
	}
}