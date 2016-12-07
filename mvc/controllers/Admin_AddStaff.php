<?php

class Admin_AddStaff extends Controller {

	public function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}
	
	public function index() 
	{	
		
		$this->view->render('Admin_AddStaff/index');
	}
	
        public function allStaff(){
            $this->view->userList = $this->model->userList();
        }
	public function create() 
	{
		$data = array();
		$data['login'] = $_POST['login'];
		$data['password'] = $_POST['password'];
		$data['role'] = $_POST['role'];
		
		// @TODO: Do your error checking!
		
		$this->model->create($data);
		header('location: ' . URL . 'Admin_AllStaff');
	}
	

}