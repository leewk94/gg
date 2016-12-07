<?php

class StudProgress extends Controller {
    public function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    public function index(){	
        $this->view->StudProgress = $this->model->StudProgress();
        $this->view->render('StudProgress/index');
    }
}

