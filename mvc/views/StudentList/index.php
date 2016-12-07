<h1>Register Student </h1>


<form method="post" action="<?php echo URL;?>studentList/create">
	
    
    <label>Class Date Available:</label> 
    <select name="regclass">
<?php 
foreach ($this->classesList as $key => $value)
{
    echo "<option value='".$value['classesID']."'>".$value['classesDate']." ".$value['classesTime']." ".$value['classesType']."</option>";
}
?>        
</select>
<br/>
<label>Student: </label> 
 <select name="regid">
<?php 
foreach ($this->userList as $key => $value)
{
    echo "<option value='".$value['studID']."'>".$value['studIC']." ".$value['studName']."</option>";
}
?>        
</select><br/>
	<label>&nbsp;</label><input type="submit" />
</form>
<hr />
<strong>Latest Student-Class Registration Record </strong><br/><br/>
<table border="1" style="border-collapse:collapse;" width="80%">
    
    
    <tr><th>No</th><th>Class ID</th><th>Class Type</th><th>Date</th><th>Time</th><th>Student IC</th><th>Name</th><th>Action</th></tr>
    
<?php
$i=0;
	foreach($this->studentListList as $key => $value) {
	$i++;	
                echo '<tr>';
                echo '<td>' . $i . '</td>';
		echo '<td>' . $value['classesID'] . '</td>';
		echo '<td>' . $value['classesType'] . '</td>';
                echo '<td>' . $value['classesDate'] . '</td>';
                echo '<td>' . $value['classesTime'] . '</td>';
                echo '<td>' . $value['studIC'] . '</td>';
                echo '<td>' . $value['studName'] . '</td>';
		echo '<td><a class="delete" href="'. URL . 'studentList/delete/' . $value['studentListID'].' " >Delete</a></td>';
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