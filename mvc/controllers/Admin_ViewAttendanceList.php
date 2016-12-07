<?php

class Admin_ViewAttendanceList extends Controller {

	public function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}
	
	public function index() 
	{	
		$this->view->attendanceList = $this->model->attendanceList();
             
		$this->view->render('Admin_ViewAttendanceList/index');
	}
	
	
	

	
		public function view($classesID) 
	{
            //$this->view->scheduleList = $this->model->scheduleList();
            $this->view->studentlist = $this->model->studentList($classesID);
			$this->view->classesDetail = $this->model->classesDetail($classesID);
		//$this->view->schedule = $this->model->scheduleSingleList($id);

		
		$this->view->render('Admin_ViewAttendanceList/view');
	}
	
	
	
}