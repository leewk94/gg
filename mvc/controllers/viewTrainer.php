<?php

class viewTrainer extends Controller {

	public function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}
	
	public function index() 
	{  
		$this->view->trainerList = $this->model->trainerList();
		$this->view->render('viewTrainer/index');
	}
	

	
	public function edit($id) 
	{
                $this->view->changePassword = $this->model->changePassword($id);
		$this->view->trainer = $this->model->trainerSingleList($id);
		$this->view->render('viewTrainer/edit');
	}
        
        public function attendance($id){
            $this->view->trainer = $this->model->trainerSingleList($id);
            $this->view->attendance = $this->model->attendanceList($id);
            $this->view->render('viewTrainer/attendance');
        }
        
        public function progress($id){
            $this->view->trainer = $this->model->trainerSingleList($id);
            $this->view->progress = $this->model->progressList($id);
            $this->view->render('viewTrainer/progress');
        }
        
        //change password
         public function changePassword($id) 
	{
                $this->view->newPassword = $this->model->newPassword($id);
		$this->view->render('viewTrainer/changePassword');
	}
        public function updatePassword($id){
            $data=array();
            $data['id'] = $id;
            $data['password']=  $_POST['password'];
            $this->model->updatePassword($data);
            header('location: ' . URL . 'viewTrainer/index/'.$id.'?updatePassword=1');
        }
	
        //update profile
	public function editSave($id)
	{
		$data = array();
                $data['id'] = $id;
                $data['name']=  $_POST['name'];
                $data['ic']=  $_POST['ic'];
                $data['license']=  $_POST['license'];
                $data['address']=  $_POST['address'];
                $data['contact']=  $_POST['contact'];
                $data['email']=  $_POST['email'];
		
		$this->model->editSave($data);
		header('location: ' . URL . 'viewTrainer?edit=1');
	}
	
        //delete account
	public function delete($id)
	{
		$this->model->delete($id);
		header('location: ' . URL . 'viewTrainer?delete=1');
	}
}