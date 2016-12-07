




       
       
  <h1>Assign School's Car </h1> 
<form method="post" action="<?php echo URL;?>assign/create"  >
	
      

<table border="1" style="background-color:white;border-collapse:collapse;border:1px solid white ;color:#000000;">
	<tr>
		<td>Date:</td>
		<td><input type="date" name="Date" /></td>
	</tr>
	<tr>
		<td> Time Start: </td>
		<td><input type="time" name="Timefrom" /></td>
	</tr>
	<tr>
		<td>Time Finish :</td>
		<td><input type="time" name="Timeto"  /></td>
	</tr>
	<tr>
		<td>Status   :</td>
		<td><select name="Status">
			<option value="-">-</option>
  <option value="ON">ON</option>
  <option value="OFF">OFF</option>

  </select> </td>
	</tr>
	<tr>
		<td>Trainer   :</td>
		<td><input type="text" name="traName" /> </td>
	</tr>
	<tr>
		<td> Car Plate No :</td>
		<td><input type="text" name="Plate" /> </td>
	</tr>
	<tr>
		<td colspan=2 ><input type="submit" /></td>
		 </td>
	</tr>
</table>

</form>

<br>
<br>
<hr />
 <h3>List of Car Assigned </h3> 
<table border="1" style="border-collapse:collapse;" width="100%"> 
<tr> <th>No</th><th>Date</th><th>Time Start </th>
<th>Time Finish</th><th>Status </th><th>Trainer</th><th> Car Plate No </th><th>Action</th></tr>
<?php
$i=1;
	foreach($this->assignList as $key => $value) {
		echo '<tr>';
                echo '<td>' .$i . '</td>';
		echo '<td>' . $value['Date'] . '</td>';
		echo '<td>' . $value['Timefrom'] . '</td>';
		echo '<td>' . $value['Timeto'] . '</td>';

		echo '<td>' . $value['Status'] . '</td>';
		echo '<td>' . $value['traName'] . '</td>';
		echo '<td>' . $value['Plate'] . '</td>';
		echo '<td>
				<a href="'.URL.'assign/edit/'.$value['assignID'].'">Edit</a> 
				<a class="delete" href="'.URL.'assign/delete/'.$value['assignID'].'">Delete</a></td>';
		echo '</tr>';
                $i++;
	}
?>
</table>

<h4>*Please take the car key and return it the front counter. Thank you! </h4> 

<script>
$(function() {
	
	$('.delete').click(function(e) {
		var c = confirm("Are you sure you want to delete?");
		if (c == false) return false;
		
	});
	
});
</script>