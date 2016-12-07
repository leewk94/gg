
 <h1>Register Car Maintenance</h1> 

<form method="post" action="<?php echo URL;?>maintenance/create">
	
       
	
<table>
	<tr>
	<td>Condition   : </td>
	<td><textarea  name="Cond" placeholder="Describe current condition here..."maxlength="200" cols="25" rows="5"></textarea> </td>
	</tr>
	<tr>
	<td>Solution  : </td>
	<td><textarea  name="Sol" placeholder="Describe current solution here..."maxlength="200" cols="25" rows="5"></textarea> </td>
	</tr>
	<tr>
	<td>Date   : </td>
	<td><input type="date" name="Date" /> </td>
	</tr>
	<tr>
	<td>Time From   : </td>
	<td><input type="time" name="Timefrom" /> </td>
</tr>
	<tr>
	<td>Time Finish  : </td>
<td><input type="time" name="Timeto" /> </td>
	</tr>
	<tr>
	<td>Workshop Info : </td>
	<td><textarea name="Workshop" placeholder="Name and address here..."maxlength="200" cols="25" rows="5"></textarea> </td>
	</tr>
	<tr>
	<td>Cost : RM </td>
	<td><input type="number" step="0.01" name="Cost" /> </td>
</tr>
	<tr>

       
     <td colspan=2>    
	<input type="submit" /></td>
	</td>
	</tr>
	</table>
</form>

<br>
<br>
<hr />
 <h3>List of Maintenance</h3> 
<table border="1" style="border-collapse:collapse;" width="100%">
<tr> <th>No </<th><th>Condition </th><th>Solution </th>
<th>Date</th><th>Time Start </th> <th>Time Finish </th><th>Workshop </th><th>Cost (RM) </th>
<th>Action</th></tr>
<?php
$i=1;
	foreach($this->maintenanceList as $key => $value) {
		echo '<tr>';
		echo '<td>' .$i . '</td>';
		echo '<td>' . $value['Cond'] . '</td>';
		echo '<td>' . $value['Sol'] . '</td>';
		echo '<td>' . $value['Date'] . '</td>';
		echo '<td>' . $value['Timefrom'] . '</td>';
		echo '<td>' . $value['Timeto'] . '</td>';
		echo '<td>' . $value['Workshop'] . '</td>';
		echo '<td>' . $value['Cost'] . '</td>';
		echo '<td>
				<a href="'.URL.'maintenance/edit/'.$value['ID'].'">Edit</a> 
				<a href="'.URL.'maintenance/delete/'.$value['ID'].'" class="delete">Delete</a></td>';
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


	