<?php

class StudProfile extends Controller {
    
    public function __construct() {
        parent::__construct();
	Auth::handleLogin();
    }
    
    public function index(){	
        $this->view->studProfile = $this->model->studProfile();
        $this->view->render('StudProfile/index');
    }
    public function edit($id){
        $this->view->studProfile = $this->model->studProfileEdit($id);
        
        
        if (empty($this->view->studProfile)) {
            
            echo ("<script type='text/javascript'>window.alert('This is invalid student profile.')
						window.location.href='".URL."/studProfile';
						</script>");
        }else{
            $this->view->render('StudProfile/edit');
        }
    }
    public function editSave($id){
        
        if ($_POST['name'] && $_POST['ic'] && $_POST['DOB'] && $_POST['contact'] && $_POST['email'] &&$_POST['add']){
            $data = array();
            $data['studID'] = $_POST['studId'];
            $data['studName'] = $_POST['name'];
            $data['studIC'] = $_POST['ic'];
            $data['studDOB'] = $_POST['DOB'];
            $data['studContact'] = $_POST['contact'];
            $data['studEmail'] = $_POST['email'];
            $data['studAdd'] = $_POST['add'];
        
            $this->model->editSave($data);
            header('location: ' . URL . 'StudProfile');
        }else{
            echo ("<script type='text/javascript'>window.alert('All field are required.')
                    window.location.href='".URL."/StudProfile/edit/".$_POST['studId']."';</script>");
        }
        
        
        
    }
    public function changePassword($id){
        $this->view->studProfile = $this->model->studChangePassword($id);
        $this->view->render('StudProfile/changePassword');
    }
    public function updatePassword($id){
       $dbPassword=$_POST['dbPassword'];
        if($_POST['currentPassword'] && $_POST['newPassword'] && $_POST['newPassword']){
            if (Hash::create('sha256', $_POST['currentPassword'], HASH_PASSWORD_KEY)!= $dbPassword) {
                echo ("<script type='text/javascript'>window.alert('ERROR: Current password does not match.')
                        window.location.href='".URL."/StudProfile/changePassword/".$_POST['studID']."';</script>");
            }else{
                if(strlen($_POST['newPassword'])<5){
                    echo ("<script type='text/javascript'>window.alert('ERROR: New Password must contain at least six characters!')
						window.location.href='".URL."/StudProfile/changePassword/".$_POST['studID']."';</script>");
                }else{
                    if($_POST['newPassword'] != $_POST['confirmPassword']){
                        echo ("<script type='text/javascript'>window.alert('ERROR: New Password must contain at least six characters!')
						window.location.href='".URL."/StudProfile/changePassword/".$_POST['studID']."';</script>");
                    }else{
                        $data = array();
                        $data['userID'] = $id;$data['studID'] = $_POST['studID'];$data['newPassword'] = $_POST['newPassword'];
                        $this->model->updatePassword($data);
                        header('location: ' . URL . 'StudProfile');
                    }
                }
            }
        }else{
            echo ("<script type='text/javascript'>window.alert('All field are required.')
                    window.location.href='".URL."/StudProfile/changePassword/".$_POST['studID']."';</script>");
        }
        
    }
    
}