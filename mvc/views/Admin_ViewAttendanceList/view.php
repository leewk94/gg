<h1>View Student Attendance List</h1>

<table width="20%">
        <tr><td><label>Date</label></td><td><?php echo $this->classesDetail[0]['classesDate']; ?></td></tr>
        <tr><td><label>Time</label></td><td><?php echo $this->classesDetail[0]['classesTime']; ?></td></tr>
        <tr><td><label>Type</label></td><td><?php echo $this->classesDetail[0]['classesType']; ?></td></tr>
        <tr><td><label>Trainer</label></td><td><?php echo $this->classesDetail[0]['traName']; ?></td></tr>
</table>
<br>

<?php                 

echo "<table  border=\"1\" style=\"border-collapse: collapse;\" width=\"50%\" ><tr>
<th>Name</th>
<th>I/C</th>
<th>Contact No</th>
<th>Attendance Status</th></tr>";	

foreach($this->studentlist as $key => $value) {
            
           
		echo '<tr>';
        echo '<td>' . $value['studName'] . '</td>';
		echo '<td>' . $value['studIC'] . '</td>';
        echo '<td>' . $value['studContactNo'] . '</td>';
        echo '<td>' . $value['studAttendanceStatus'] . '</td>';
		echo '</tr>';
 
	}

?>
        </table>
		<br>
<a href="<?php echo URL; ?>Admin_ViewAttendanceList"><input type="button" value="Back"></a>
	
