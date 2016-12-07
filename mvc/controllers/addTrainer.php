<?php

class AddTrainer extends Controller {

	public function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}
	
	public function index() 
	{	
		//$this->view->userList = $this->model->userList();
		
              $this->view->trainerList = $this->model->trainerList();
              $this->view->render('addTrainer/index');
	}
	
	public function create() 
	{ 
                
		$data = array();
                $data['id']=$_POST['id'];
		$data['login'] = $_POST['login'];
		$data['password'] = $_POST['password'];
		$data['role'] = $_POST['role'];
		$data['ic'] = $_POST['ic'];
                $data['license'] = $_POST['license'];
                $data['address'] = $_POST['address'];
                $data['contact'] = $_POST['contact'];
                $data['email'] = $_POST['email'];

		if($data['role'] == 'trainer'){
                $this->model->create_trainer($data);
                }
		$this->model->create($data);

        Header( "Location: ". URL ." addTrainer?success=1" );
	}
	
	
}