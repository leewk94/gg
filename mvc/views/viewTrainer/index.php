<h1>View Trainer Information</h1>


<table class="center">
<?php
            echo '<tr>';
		echo '<th>Name</th>';
		echo '<th>I/C</th>';
		echo '<th>License</th>';
                echo '<th>Address</th>';
                echo '<th>Contact No</th>';
                echo '<th>Email</th>';
                echo '<th></th>';
                echo '</tr>';
                
	foreach($this->trainerList as $key => $value) {
		echo '<tr>';
		echo '<td>' . $value['traName'] . '</td>';
		echo '<td>' . $value['traIC'] . '</td>';
		echo '<td>' . $value['intructorLicense'] . '</td>';
                echo '<td>' . $value['traAddress'] . '</td>';
                echo '<td>' . $value['traContactNo'] . '</td>';
                echo '<td>' . $value['traEmail'] . '</td>';
		echo '<td>
				<a href="'.URL.'viewTrainer/edit/'.$value['traID'].'">Edit</a> 
                                <a href="'.URL.'viewTrainer/attendance/'.$value['traID'].'">Attendance</a>
                                <a href="'.URL.'viewTrainer/progress/'.$value['traID'].'">Progress</a> 
				<a href="'.URL.'viewTrainer/delete/'.$value['traID'].'">Delete</a></td>';
		echo '</tr>';
	}
?>
</table>
<?php
if ( isset($_GET['edit']) && $_GET['edit'] == 1 )
{
    echo " <span class='message'> Profile successfully updated</span>";
}
if ( isset($_GET['delete']) && $_GET['delete'] == 1 )
{
    echo " <span class='message'>Account successfully deleted</span>";
}

if ( isset($_GET['updatePassword']) && $_GET['updatePassword'] == 1 )
{
    echo " <span class='message'>Password successfully updated</span>";
}