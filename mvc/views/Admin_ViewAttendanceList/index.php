<h1>View Student Attendance List</h1>

 
<table  border="1" style="border-collapse:collapse;" width="80%">
<?php
 $iNum = 0;

echo "<tr><th>No</th><th>Date</th><th>Time</th><th>Class Type</th><th>Trainer Name</th><th>Action</th></tr>";
	foreach($this->attendanceList as $key => $value) {
            $iNum++;
		echo '<tr>';
        echo '<td>' . $iNum . '</td>';
		echo '<td>' . $value['classesDate'] . '</td>';
		echo '<td>' . $value['classesTime'] . '</td>';
        echo '<td>' . $value['classesType'] . '</td>';
		echo '<td>' . $value['traName'] . '</td>';
		echo '<td><a href="'. URL . 'Admin_ViewAttendanceList/view/' . $value['classesID'].'">View</a></td>';
		echo '</tr>';
	}
?>
</table>

<script>
$(function() {
	
	$('.delete').click(function(e) {
		var c = confirm("Are you sure you want to delete?");
		if (c == false) return false;
		
	});
	
});
</script>