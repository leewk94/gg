<h1>Edit - Car Maintenance </h1> 
<form method="post" action="<?php echo URL;?>maintenance/editSave/<?php echo $this->maintenanceSingleList[0]['ID']; ?>">
<table border="1"  style="background-color:white;border-collapse:collapse;border:1px solid white;color:#000000;width:30%" cellpadding="3" cellspacing="3">
	<tr>
		<td>Condition</td>
		<td><input type="text" name="Cond" value="<?php echo $this->maintenanceSingleList[0]['Cond']; ?>" /></td>
		</tr>
	<tr>
	<td>Solution</td>
	<td><input type="text" name="Sol" value="<?php echo $this->maintenanceSingleList[0]['Sol']; ?>" /></td>
	</tr>
	<tr>
	<td>Date</td>
	<td><input type="date" name="Date" value="<?php echo $this->maintenanceSingleList[0]['Date']; ?>" /></td>
	</tr>
	<tr>
	<td>Time From</td>
	<td><input type="time"  name="Timefrom" value="<?php echo $this->maintenanceSingleList[0]['Timefrom']; ?>" /></td>
	</tr>
	<tr>
			<td>Time Finish</td>
			<td><input type="time"  name="Timeto" value="<?php echo $this->maintenanceSingleList[0]['Timeto']; ?>" /></td>
			</tr>
	<tr>
	<td>Workshop Info</td>
	<td><input type="text" name="Workshop" value="<?php echo $this->maintenanceSingleList[0]['Workshop']; ?>" /></td>
	</tr>
	<tr>
	<td>Cost : RM</td>
	<td><input type="number" step="0.01" name="Cost" value="<?php echo $this->maintenanceSingleList[0]['Cost']; ?>" /></td>
	</tr>
	<tr>

	
        <tr>
		<td colspan=2 align="center" ><input type="submit"  /></td>
	
	</tr>
</table>
</form>

<a href="<?php echo URL; ?>Maintenance"><input type="button" value="Back"></a>




	