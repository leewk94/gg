<?php

class registercar extends Controller {

	public function __construct() {
		parent::__construct();

	}
	// assign register to model
	public function index() 
	{	
		$this->view->registercarList = $this->model->registercarList();
		$this->view->render('RegisterCar/index');
	}
	//create array of attribute for register car
	public function create() 
	{
		$data = array();
		$data['carID'] = $carID;
			$data['Name'] = $_POST['Name'];
			$data['Plate'] = $_POST['Plate'];
		$data['Brand'] = $_POST['Brand'];
		$data['Status'] = $_POST['Status'];
		
		// @TODO: Do your error checking!
		
		$this->model->create($data);
		header('location: ' . URL . 'registercar');
	}
	//assign the id to edit model
	public function edit($carID) 
	{
		$this->view->registercarSingleList = $this->model->registercarSingleList($carID);
		$this->view->render('RegisterCar/edit');
	}
	// delete the array using id only 
	public function editSave($carID)
	{
		$data = array();
			$data['carID'] = $carID;
			$data['Name'] = $_POST['Name'];
			$data['Plate'] = $_POST['Plate'];
		$data['Brand'] = $_POST['Brand'];
			$data['Status'] = $_POST['Status'];
		
		
		// @TODO: Do your error checking!
		print_r($data);
		$this->model->editSave($data);
	header('location: ' . URL . 'RegisterCar');
	}
	// delete the array using only 
	public function delete($carID)
	{
		$this->model->delete($carID);
		header('location: ' . URL . 'RegisterCar');
	}
	//delete session 
	function logout()
	{
		Session::destroy();
		header('location: ' . URL .  'login');
		exit;
	}
}