<?php

class checklist extends Controller {

	public function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}
	
	public function index() 
	{	
		$this->view->checkList = $this->model->checkList();
                $this->view->checkSingleList = $this->model->checkSingleList();
		$this->view->render('checklist/index');
	}

}