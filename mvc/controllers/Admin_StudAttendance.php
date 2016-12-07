<?php

class Admin_StudAttendance extends Controller {
    
    public function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    
    public function index(){	
        $this->view->Admin_StudAttendance = $this->model->Admin_StudAttendance();
        $this->view->render('Admin_StudAttendance/index');
    }
    public function view($id){
        
        $this->view->Admin_StudAttendance = $this->model->Admin_StudAttendanceView($id);
        
        if (empty($this->view->Admin_StudAttendance)) {
            
            echo ("<script type='text/javascript'>window.alert('This is invalid student.')
						window.location.href='".URL."/Admin_StudAttendance';
						</script>");
        }else{
            $this->view->render('Admin_StudAttendance/view');
        }
        
        
    }
    public function attend($id){
        $data = array();
        $data['id'] = $id;
        $data['status'] = 'Attend';
        
        $this->model->attend($data);
        header('location: ' . URL . 'Admin_StudAttendance');
    }
    public function absent($id){
        $data = array();
        $data['id'] = $id;
        $data['status'] = 'Absent';
        
        $this->model->absent($data);
        header('location: ' . URL . 'Admin_StudAttendance');
    }
    public function undo($id){
        $data = array();
        $data['id'] =$id;
        $data['status'] = "";
        $this->model->undo($data);
        header('location: ' . URL . 'Admin_StudAttendance');
    }
}
