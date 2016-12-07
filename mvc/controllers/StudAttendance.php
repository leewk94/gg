<?php

class StudAttendance extends Controller {
    
    public function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    
    public function index(){	
        $this->view->StudAttendance = $this->model->StudAttendance();
        $this->view->render('StudAttendance/index');
    }
    
}