<!doctype html>
<html>
<head>
	<title>Driving School Management System</title>
	<link rel="stylesheet" href="<?php echo URL; ?>public/css/style.css" />	
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/sunny/jquery-ui.css" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>

	<?php
	if (isset($this->js)) 
	{
		foreach ($this->js as $js)
		{
			echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
		}
	}
	?>
</head>
<body>

<?php Session::init(); ?>
	
<div id="header">
    <p class="title">Driving School Management System </p>
<ul id="nav">
	<?php if (Session::get('loggedIn') == false):?>
		<li><a href="<?php echo URL; ?>index">Index</a></li>
		<li><a href="<?php echo URL; ?>help">Help</a></li>
	<?php endif; ?>	
	<?php if (Session::get('loggedIn') == true):?>
<!--		<li><a href="<?php echo URL; ?>dashboard">Dashboard</a></li>
		<li><a href="<?php echo URL; ?>note">Notes</a></li>-->
		
		<?php if (Session::get('role') == 'admin'):?>
                <li><a href="#">Staff</a>
                    <ul>
                     <li><a href="<?php echo URL; ?>Admin_AddStaff">Add Staff</a></li>
                     <li><a href="<?php echo URL; ?>Admin_AllStaff">View/Edit Staff</a></li>
                    </ul>  
                </li >             
               
                <li><a href="#">Student</a>
                    <ul>
			<li><a href="<?php echo URL;?>Admin_StudProfile">Student Profile</a></li>
			<li><a href="<?php echo URL;?>Admin_StudAttendance">Student Attendance</a></li>
			<li><a href="<?php echo URL;?>Admin_StudProgress">Student Progress</a></li>
                    </ul>
		</li>
                 <li><a href="#">Trainer</a>
                    <ul>
                     <li><a href="<?php echo URL; ?>Admin_AddTrainer">Add Trainer</a></li>
                     <li><a href="<?php echo URL; ?>Admin_ViewTrainer">View/Edit Trainer</a></li>
					 <li><a href="<?php echo URL; ?>Admin_ViewAttendanceList">View Student Attendance</a></li>
                    </ul>
                </li>
                <li><a href="#">Classes</a>
                    <ul>
                        <li><a href="<?php echo URL; ?>classes">Classes</a></li>
                        <li><a href="<?php echo URL; ?>studentlist">Register</a></li>
                        <li><a href="<?php echo URL; ?>schedule">Schedule</a></li>
                        
                    </ul>
                </li>
                <li><a href="#">Car</a>
                    <ul>
                       <li><a href="<?php echo URL; ?>registercar">Add Car</a></li>
                       <li><a href="<?php echo URL; ?>assign">Assign </a></li>
                       <li><a href="<?php echo URL; ?>maintenance">Maintenance</a></li>  
                    </ul>
                </li>	
                <li><a href="#">Checklist</a>
                    <ul>
                        <li><a href="<?php echo URL; ?>result">Result</a></li>
                        <li><a href="<?php echo URL; ?>checklist">Checklist</a></li>   
                    </ul>
                </li>
                
                
		<?php endif; ?>
                
                <!--if user logged as trainer-->
                <?php if (Session::get('role') == 'trainer'):?>
                    <li><a href="<?php echo URL; ?>TraAttendance">Attendance</a></li>
                    <li><a href="<?php echo URL; ?>TraProgress">Progress</a></li>
                    <li><a href="<?php echo URL; ?>TraProfile">Profile</a></li>
                      <li><a href="<?php echo URL; ?>Schedule">Schedule</a></li>
                      <li><a href="<?php echo URL; ?>result">Result</a></li>
                <?php endif; ?>
                <?php if (Session::get('role') == 'student'):?>
                    <li><a href="<?php echo URL; ?>StudProfile">Profile</a></li>
                    <li><a href="<?php echo URL; ?>StudProgress">Progress</a></li>
                    <li><a href="<?php echo URL; ?>StudAttendance">Attendance</a></li>
		<?php endif; ?>
		
		<li><a href="<?php echo URL; ?>dashboard/logout">Logout</a></li>	
	<?php else: ?>
		<li><a href="<?php echo URL; ?>login">Login</a></li>
	<?php endif; ?>
                

 
</ul>
</div>
	
<div id="content">
	
	