<?php

class Login_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function run()
	{
		$sth = $this->db->prepare("SELECT userid, role FROM user WHERE 
				login = :login AND password = :password");
		$sth->execute(array(
			':login' => $_POST['login'],
			':password' => Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY)
		));
		
		$data = $sth->fetch();
		
		$count =  $sth->rowCount();
		if ($count > 0) {
			// login
			Session::init();
			Session::set('role', $data['role']);
			Session::set('loggedIn', true);
			Session::set('userid', $data['userid']);
                        //if user login as trainer will redirect to trainer attendance page
                        if(Session::get('role')=="trainer"){
                         echo ("<script type='text/javascript'>window.alert('Login successful.')
                            window.location.href='".URL."/TraAttendance';</script>");
                        }elseif($data['role'] == 'student'){
                            echo ("<script type='text/javascript'>window.alert('Login successful.')
                            window.location.href='".URL."/StudProfile';</script>");
                        }elseif($data['role'] == 'admin'){
                            echo ("<script type='text/javascript'>window.alert('Login successful.')
                            window.location.href='".URL."/schedule';</script>");
                        }
		} else {
			//header('location: ../login');
                    echo ("<script type='text/javascript'>window.alert('Invalid username or password.')
                            window.location.href='".URL."login';</script>");
		}
		
	}
	
}