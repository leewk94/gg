<?php

class TraProfile extends Controller {

	public function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}
	
	public function index() 
	{	
		$this->view->trainerList = $this->model->trainerList();
                $this->view->changePassword = $this->model->changePassword();
		$this->view->render('TraProfile/index');
	}
	
        public function edit($traID) 
	{
                $this->view->trainer = $this->model->trainerSingleList($traID);
		$this->view->render('TraProfile/edit');
	}

        //update trainer profile
	public function updateTraProfile($traID)
	{
                $data = array();
                $data['traID'] = $traID;
                $data['traName']=  $_POST['traName'];
                $data['traIC']=  $_POST['traIC'];
                $data['instructorLicense']=  $_POST['instructorLicense'];
                $data['traAddress']=  $_POST['traAddress'];
                $data['traContactNo']=  $_POST['traContactNo'];
                $data['traEmail']=  $_POST['traEmail'];
		
		$this->model->updateTraProfile($data);
		header('location: ' . URL . 'TraProfile');
	}
        
        // update password
        public function changePassword($traID) 
	{
                $this->view->newPassword = $this->model->newPassword($traID);
		$this->view->render('TraProfile/changePassword');
	}
        
        public function updatePassword($traID){
            $data=array();
            $data['traID'] = $traID;
            $data['traPassword']=  $_POST['traPassword'];
            $this->model->updatePassword($data);
            header('location: ' . URL . 'TraProfile/index/'.$traID.'');
        }
}