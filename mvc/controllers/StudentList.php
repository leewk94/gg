<?php

class StudentList extends Controller {

	public function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}
	
	public function index() 
	{	
	$this->view->classesList = $this->model->classesList();	
            $this->view->userList = $this->model->userList();
            $this->view->studentListList = $this->model->studentListList();
		$this->view->render('StudentList/index');
	}
	
	public function create() 
	{
	
            $data = array(
			'selectedclass' => $_POST['regclass'],
			'selectedstud' => $_POST['regid']
		);
		$this->model->create($data);
		header('location: ' . URL . 'studentList');
	}
	
        
       
	
	public function delete($ID)
	{
		$this->model->delete($ID);
		header('location: ' . URL . 'studentList');
	}
}