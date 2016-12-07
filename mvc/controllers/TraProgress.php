<?php

class TraProgress extends Controller {

	public function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}
	
	public function index() 
	{	
		$this->view->carList = $this->model->carList();
                $this->view->commentNum = $this->model->commentNum();
		$this->view->render('TraProgress/index');
	}

	public function edit($carID) 
	{
		$this->view->carSingleList = $this->model->carSingleList($carID);
                $this->view->commentList = $this->model->commentList($carID);
		$this->view->render('TraProgress/edit');
	}
	
        //insert trainer progress
	public function insertTraProgress($progressID)
	{
		$data = array();
		$data['id'] = $progressID;
                $data['timeFrom'] =  date('H:i', strtotime( $_POST['timeFromH'].":". $_POST['timeFromM']));
                $data['timeTo'] =  date('H:i', strtotime( $_POST['timeToH'].":". $_POST['timeToM']));
                $data['comment'] = $_POST['comment'];
		
		$this->model->insertTraProgress($data);
		header('location: ' . URL . 'TraProgress/edit/'.$progressID);
	}
	
        //delete comment
	public function delete($progressID)
	{
		$this->model->delete($progressID);
		header('location: ' . URL . 'TraProgress');
	}
}