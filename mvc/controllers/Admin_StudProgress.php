<?php

class Admin_StudProgress extends Controller {
    
    public function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    
    public function index(){	
        $this->view->Admin_StudProgress = $this->model->Admin_StudProgress();
        $this->view->render('Admin_StudProgress/index');
    }
    public function view($id){
        
        $this->view->Admin_StudProgress = $this->model->Admin_StudProgressView($id);
        if (empty($this->view->Admin_StudProgress)) {
            
            echo ("<script type='text/javascript'>window.alert('This is invalid student.')
						window.location.href='".URL."/Admin_StudProgress';
						</script>");
        }else{
            $this->view->render('Admin_StudProgress/view');
        }
        
    }
    public function success($id){
        $data = array();
        $data['id'] = $id;
        $data['status'] = 'Pass';
        
        $this->model->success($data);
        header('location: ' . URL . 'Admin_StudProgress');
    }
    public function failure($id){
        $data = array();
        $data['id'] = $id;
        $data['status'] = 'Fail';
        
        $this->model->failure($data);
        header('location: ' . URL . 'Admin_StudProgress');
    }
    public function reset($id){
        $data = array();
        $data['id'] = $id;
        $data['status'] = 'Pending';
        
        $this->model->reset($data);
        header('location: ' . URL . 'Admin_StudProgress');
    }
    
}
