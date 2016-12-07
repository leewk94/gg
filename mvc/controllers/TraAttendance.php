<?php

class TraAttendance extends Controller {

	public function __construct() {
		parent::__construct();
		Auth::handleLogin();
	}
	
	public function index() 
	{	
		$this->view->ClassesList = $this->model->classesList();
		$this->view->render('TraAttendance/index');
	}
	
	
	public function edit($classesID) 
	{
		$this->view->attendance = $this->model->attendanceSingleList($classesID);
                $this->view->studentlist = $this->model->studentList($classesID);
                $this->view->traAttendance = $this->model->traAttendance($classesID);
		$this->view->render('TraAttendance/edit');
	}
	
        //insert student attendance
	public function insertStudAttendance()
	{
                $no= $_POST['noStud'];
		$data = array();
                for($i=0;$i<$no;$i++){
                $data['no']=$_POST['noStud'];
				$data['studId'] = $_POST['studId_'.$i.''];
				$data['studAttendanceStatus'] = $_POST['studAttendanceStatus_'.$i.''];
                $data['classes']=$_POST['classes'];
                $this->model->insertStudAttendance($data);
                }		
		header('location: ' . URL . 'TraAttendance');
	}
	
        //update student attendance
        public function updateStudAttendance()
	{
                $no= $_POST['noStud'];
		$data = array();
                for($i=0;$i<$no;$i++){
                $data['noStud']=$_POST['noStud'];
				$data['studId'] = $_POST['studId_'.$i.''];
				$data['studAttendanceStatus'] = $_POST['studAttendanceStatus_'.$i.''];
                $data['classes']=$_POST['classes'];
                $this->model->updateStudAttendance($data);
                }	
		header('location: ' . URL . 'TraAttendance');
	}
        
        // trainer chack in
        public function traCheckIn($classes){
            date_default_timezone_set("Asia/Kuala_Lumpur");
            $data = array();
            $data['classes']=$classes;
            $data['checkIn']=  date("H:i");
            $data['attendancestatus']="InProgress";
            $this->model->traCheckIn($data);
            header('location: ' . URL . 'TraAttendance');
        }
        
         // trainer chack out
            public function traCheckOut($classes){
            date_default_timezone_set("Asia/Kuala_Lumpur");
            $data = array();
            $data['classes']=$classes;
            $data['checkOut']=  date("H:i");
            $data['attendancestatus']="Completed";
            $this->model->traCheckOut($data);
            header('location: ' . URL . 'TraAttendance');
        }
        
}