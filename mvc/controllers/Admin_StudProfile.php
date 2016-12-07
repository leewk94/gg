<?php

class Admin_StudProfile extends Controller {
    
    public function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    
    public function index(){	
        $this->view->Admin_StudProfile = $this->model->Admin_StudProfile();
        $this->view->render('Admin_StudProfile/index');
    }
    
    public function create(){
        $name = $_POST['name'];
        $IC =$_POST['IC'];
        $DOB = $_POST['DOB'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $address= $_POST['address'];
        
        
        if($name && $IC && $DOB && $contact && $email && $address){
            
            $data = array();
            $data['name'] = strtoupper($name);
            $data['IC'] = $IC;
            $data['DOB'] = $DOB;
            $data['contact'] = $contact;
            $data['email'] = $email;
            $data['address'] = strtoupper($address);
            $this->model->create($data);
            header('location: ' . URL . 'Admin_StudProfile');
        }else{
            echo ("<script type='text/javascript'>window.alert('All field are required.')
						window.location.href='".URL."/Admin_StudProfile/add';
						</script>");
        }
            
    }
    public function edit($id){
        $this->view->Admin_StudProfile = $this->model->Admin_StudProfileEdit($id);
        
        if (empty($this->view->Admin_StudProfile)) {
            
            echo ("<script type='text/javascript'>window.alert('This is invalid student profile.')
						window.location.href='".URL."/Admin_StudProfile';
						</script>");
        }else{
            $this->view->render('Admin_StudProfile/edit');
        }
    }
    public function add(){
        $this->view->render('Admin_StudProfile/add');
    }
    public function editSave($id){
        
        if($_POST['name'] && $_POST['ic'] && $_POST['DOB'] && $_POST['contact'] && $_POST['email'] && trim($_POST['add']," ")){
            
            $data = array();
            $data['studID'] = $id;
            $data['studName'] = strtoupper($_POST['name']);
            $data['studIC'] = $_POST['ic'];
            $data['studDOB'] = $_POST['DOB'];
            $data['studContact'] = $_POST['contact'];
            $data['studEmail'] = $_POST['email'];
            $data['studAdd'] = trim(strtoupper($_POST['add']));
            $this->model->editSave($data);
            header('location: ' . URL . 'Admin_StudProfile');
        }else{
            
            echo ("<script type='text/javascript'>window.alert('All fields are required.')
                window.location.href='".URL."/Admin_StudProfile/edit/".$id."';</script>");
        }
        
    }
    public function delete($id){
        $this->model->delete($id);
        header('location: ' . URL . 'Admin_StudProfile');
    }
}