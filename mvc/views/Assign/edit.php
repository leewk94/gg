 <h1>Edit - Assign Car </h1> 
<form method="post" action="<?php echo URL;?>assign/editSave/<?php echo $this->assignSingleList[0]['assignID']; ?>">

	
	
	<table border="1"  style="background-color:white;border-collapse:collapse;border:1px solid white;color:#000000;">
	<tr>
		<td>Date :</td>
		<td><input type="date" name="Date"  value="<?php echo $this->assignSingleList[0]['Date']; ?>"/></td>
	</tr>
	<tr>
		<td>  Time Start : </td>
		<td><input type="time" name="Timefrom" value="<?php echo $this->assignSingleList[0]['Timefrom']; ?>"  /></td>
	</tr>
	<tr>
		<td>Time Finish  :</td>
		<td><input type="time" name="Timeto"  value="<?php echo $this->assignSingleList[0]['Timeto']; ?>" /> </td>
	</tr>
	<tr>
		<td>Status   :</td>
		<td><select name="Status">
			<option value="ON" <?php if($this->assignSingleList[0]['Status'] == 'ON') echo 'selected'; ?>>ON</option>
			<option value="OFF" <?php if($this->assignSingleList[0]['Status'] == 'OFF') echo 'selected'; ?>>OFF</option>			
		
		</select></td>
	</tr>
	<tr>
		<td>Trainer   :</td>
		<td><input type="text" name="traName" value="<?php echo $this->assignSingleList[0]['traName']; ?>" /> </td>
	</tr>
	<tr>
		<td>Car Plate No: :</td>
		<td><input type="text" name="Plate" value="<?php echo $this->assignSingleList[0]['Plate']; ?>" /> </td>
	</tr>
	<tr>
		<td colspan=2 align="center" ><input type="submit"  /></td>
	
	</tr>
</table>
	
</form>

<a href="<?php echo URL; ?>Assign"><input type="button" value="Back"></a>


