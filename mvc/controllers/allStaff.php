<?php

class allStaff extends Controller {

	public function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}
	
	public function index() 
	{	
		   $this->view->userList = $this->model->userList();
		$this->view->render('allStaff/index');
	}
	

	public function create() 
	{
		$data = array();
		$data['login'] = $_POST['login'];
		$data['password'] = $_POST['password'];
		$data['role'] = $_POST['role'];
		
		// @TODO: Do your error checking!
		
		$this->model->create($data);
		header('location: ' . URL . 'allStaff?success=1');
	}
	
	public function edit($id) 
	{
		$this->view->user = $this->model->userSingleList($id);
		$this->view->render('allStaff/edit');
	}
	
	public function editSave($id)
	{
		$data = array();
		$data['id'] = $id;
		$data['login'] = $_POST['login'];
		$data['password'] = $_POST['password'];
		$data['role'] = $_POST['role'];
		
		// @TODO: Do your error checking!
		
		$this->model->editSave($data);
		header('location: ' . URL . 'allStaff?success=1');
	}
	
	public function delete($id)
	{
		$this->model->delete($id);
		header('location: ' . URL . 'allStaff');
	}
}