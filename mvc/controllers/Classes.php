<?php

class Classes extends Controller {

	public function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}
	
	public function index() 
	{	
		$this->view->classesList = $this->model->classesList();
                $this->view->trainerList = $this->model->trainerList();
		$this->view->getid = $this->model->getid();
                $this->view->render('Classes/index');
                
                
               
	}
	
	public function create() 
	{
		$data = array(
			'classesDate' => $_POST['classDate'],
			'classesTime' => $_POST['classTime'],
                        'traID' => $_POST['classTrainer'],
                        'classesType'=>$_POST['classType'],
                         'getid'=>$_POST['getid']
		);
		$this->model->create($data);
		header('location: ' . URL . 'classes');
	}
	
	public function edit($classesID) 
	{
		$this->view->classes = $this->model->classesSingleList($classesID);
                $this->view->trainerList = $this->model->trainerList();
		if (empty($this->view->classes)) {
			die('This is an invalid classes!');
		}
		
		$this->view->render('Classes/edit');
	}
	
	public function editSave($classesID)
	{
		$data = array(
                    'classesID' => $classesID,
                    'classesDate' => $_POST['classDate'],
                    'classesTime' => $_POST['classTime'],
                        'traID' => $_POST['classTrainer'],
                        'classesType'=>$_POST['classType'],
                        'classesStatus'=>$_POST['classesStatus']
                   
		);
		
		// @TODO: Do your error checking!
		
		$this->model->editSave($data);
               
		header('location: ' . URL . 'classes');
	}
	
	public function delete($classesID)
	{
		$this->model->delete($classesID);
		header('location: ' . URL . 'classes');
	}
}