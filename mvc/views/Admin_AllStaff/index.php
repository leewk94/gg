<h1>All Staff</h1>
<table border="1" style="border-collapse:collapse;" >
    <tr>
        <th>No</th>
        <th style="padding-left:100px;padding-right:100px">Name</th>
        <th>Action</th>
    </tr>
<?php
$i=1;
	foreach($this->userList as $key => $value) {
		echo '<tr>';
                $value['userid'];
		echo '<td>' . $i .'</td>';
		echo '<td>' . $value['login'] . '</td>';
		echo '<td>
				<a href="'.URL.'Admin_AllStaff/edit/'.$value['userid'].'">Edit</a> 
				<a href="'.URL.'Admin_AllStaff/delete/'.$value['userid'].'" class="delete">Delete</a></td>';
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