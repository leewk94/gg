<h1>View Trainer Information</h1>


<table border="1" style="border-collapse:collapse;" width="100%">
    
<?php
$i=1;
            echo '<tr>';
                echo '<th>No</th>';
		echo '<th>Name</th>';
		echo '<th>I/C</th>';
		echo '<th>License</th>';
                echo '<th>Address</th>';
                echo '<th>Contact No</th>';
                echo '<th>Email</th>';
                echo '<th>Action</th>';
                echo '</tr>';
                
	foreach($this->trainerList as $key => $value) {
		echo '<tr>';
                echo '<td>' . $i . '</td>';
		echo '<td>' . $value['traName'] . '</td>';
		echo '<td>' . $value['traIC'] . '</td>';
		echo '<td>' . $value['intructorLicense'] . '</td>';
                echo '<td>' . $value['traAddress'] . '</td>';
                echo '<td>0' . $value['traContactNo'] . '</td>';
                echo '<td>' . $value['traEmail'] . '</td>';
		echo '<td>
				<a href="'.URL.'Admin_ViewTrainer/edit/'.$value['traID'].'">Edit</a> 
                                <a href="'.URL.'Admin_ViewTrainer/attendance/'.$value['traID'].'">Attendance</a>
                                <a href="'.URL.'Admin_ViewTrainer/progress/'.$value['traID'].'">Progress</a> 
				<a href="'.URL.'Admin_ViewTrainer/delete/'.$value['traID'].'" class="delete">Delete</a></td>';
		echo '</tr>';
                $i++;
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