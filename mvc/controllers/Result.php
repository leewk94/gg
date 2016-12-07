<?php

class result extends Controller {

	public function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}
	
	public function index() 
	{	
		$this->view->resultList = $this->model->resultList();
		$this->view->render('Result/index');
	}
	
	public function create() 
	{
            echo $_POST['grade'];
		$data = array(
			'studID' => $_POST['studID'],
			'classID' => $_POST['classID'],
                        'grade' => $_POST['grade']
		);
		$this->model->create($data);
		header('location: ' . URL . 'Result/index');
	}
}