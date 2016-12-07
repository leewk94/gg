<?php

class payment extends Controller {

	public function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}
	
	public function index() 
	{	
		$this->view->payList = $this->model->payList();
		$this->view->render('payment/index');
	}

	public function create() 
	{
            $data = array(
                    'studID' => $_POST['studID'],
                    'payment' => $_POST['payment']
            );
            $this->model->create($data);
            header('location: ' . URL . 'checklist');
	}
        
        public function edit($id) 
	{
		$this->view->payment = $this->model->paySingleList($id);
	
		if (empty($this->view->payment)) {
			die('This is an invalid payment!');
		}
		
		$this->view->render('payment/edit');
	}
        
        public function editSave($studid)
	{
		$data = array(
			'studid' => $studid,
			'sum' => $_POST['sum']
		);
		
		$this->model->editSave($data);
		header('location: ' . URL . 'checklist');
	}
        
        public function delete($id)
	{
		$this->model->delete($id);
		header('location: ' . URL . 'checklist');
	}
}