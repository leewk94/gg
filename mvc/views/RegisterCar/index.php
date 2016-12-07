




       
        <h1 align="left">Register School's Car </h1> 

<form method="post" action="<?php echo URL;?>registercar/create"  >
	
       

<table border="1"  style="background-color:white;border-collapse:collapse;border:1px solid white;color:#000000;">
	<tr>
		<td>Brand :</td>
		<td><select name="Brand">
			<option value="-">-</option>
  <option value="Perodua">Perodua</option>
  <option value="Proton">Proton</option>

  </select> </td>
	</tr>
	<tr>
		<td>  Model : </td>
		<td><select name="Name">
			<option value="-">-</option>
  <option value="MyVi">MyVi</option>
  <option value="Viva">Viva</option>
  <option value="Kancil">Kancil</option>
   <option value="Saga">Saga</option>
  </select> </td>
	</tr>
	<tr>
		<td>Plate  :</td>
		<td><input type="text" name="Plate"  placeholder="Enter plate number  here..."/></td>
	</tr>
	<tr>
	<td>Status   :</td>
		<td><select name="Status">
			<option value="-">-</option>
  <option value="New">New</option>
  <option value="Used">Used</option>

  </select> </td>
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
 <h3>List of Car Registered</h3> 
<table border="1" style="border-collapse:collapse;" width="60%">
<tr> <th>ID </th><th>Brand </th><th>Name </th>
<th>Plate</th><th>Status </th><th>Action</th></tr>
<?php
$i=0;	
foreach($this->registercarList as $key => $value) {
$i++;		
    echo '<tr>';
		echo '<td>' . $i . '</td>';
				echo '<td>' . $value['Brand'] . '</td>';
		echo '<td>' . $value['Name'] . '</td>';
		echo '<td>' . $value['Plate'] . '</td>';

		echo '<td>' . $value['Status'] . '</td>';
		echo '<td>
				<a href="'.URL.'registercar/edit/'.$value['carID'].'">Edit</a> 
				<a class="delete" href="'.URL.'registercar/delete/'.$value['carID'].'">Delete</a></td>';
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
