<?php

class Schedule extends Controller {

	public function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}
	
	public function index() 
	{	
		$this->view->scheduleList = $this->model->scheduleList();
                $this->view->studentList = $this->model->studentList();
		$this->view->render('Schedule/index');
	}
	
	
	
	public function check($id) 
	{
            $this->view->scheduleList = $this->model->scheduleList();
            $this->view->studentList = $this->model->studentList();
		$this->view->schedule = $this->model->scheduleSingleList($id);

		
		$this->view->render('Schedule/check');
	}
	
	
	
	
	
}