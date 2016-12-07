
<h1>Attendance - Trainer : <?php echo $this->trainer[0]['traName'];?></h1>

<table border="1" style="border-collapse:collapse;" width="100%">
<?php
$i=1;
                echo '<tr>';
                echo '<th>No</th>';
		echo '<th>Date</th>';
		echo '<th>Time</th>';
		echo '<th>Type</th>';
                echo '<th>Class Status</th>';
                echo '<th>Check In Time</th>';
                echo '<th>Check Out Time</th>';
                echo '<th>Status</th>';
                echo '</tr>';
                
	foreach($this->attendance as $key => $value) {
		echo '<tr>';
                echo '<td>' . $i . '</td>';
		echo '<td>' . $value['classesDate'] . '</td>';
		echo '<td>' . $value['classesTime'] . '</td>';
		echo '<td>' . $value['classesType'] . '</td>';
                echo '<td>' . $value['classesStatus'] . '</td>';
                echo '<td>' . $value['checkIn'] . '</td>';
                echo '<td>' . $value['checkOut'] . '</td>';
                echo '<td>' . $value['attendanceStatus'] . '</td>';
                echo'<tr>';
                $i++;
	}
        
?>
</table>
<br>
<a href="<?php echo URL; ?>Admin_ViewTrainer"><input type="button" value="Back"></a>