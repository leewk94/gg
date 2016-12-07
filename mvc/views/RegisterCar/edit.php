<h1 align="left">Edit - School's Car Registration </h1> 
<form method="post" action="<?php echo URL;?>registercar/editSave/<?php echo $this->registercarSingleList[0]['carID']; ?>">

  
	
	<table border="1"  style="background-color:white;border-collapse:collapse;border:1px solid white;color:#000000;width:30%" cellpadding="3" cellspacing="3">
	<tr>
		<td>Brand :</td>
		
		<td><select name="Brand">
			<option value="Perodua" <?php if($this->registercarSingleList[0]['Brand'] == 'Perodua') echo 'selected'; ?>>Perodua</option>
			<option value="Proton" <?php if($this->registercarSingleList[0]['Brand'] == 'Proton') echo 'selected'; ?>>Proton</option>			
				
		</select></td>
	</tr>
	<tr>
		<td>  Model : </td>
		<td><select name="Name">
			<option value="MyVi" <?php if($this->registercarSingleList[0]['Name'] == 'MyVi') echo 'selected'; ?>>MyVi</option>
			<option value="Viva" <?php if($this->registercarSingleList[0]['Name'] == 'Viva') echo 'selected'; ?>>Viva</option>			
			<option value="Kancil" <?php if($this->registercarSingleList[0]['Name'] == 'Kancil') echo 'selected'; ?>>Kancil</option>
			<option value="Saga" <?php if($this->registercarSingleList[0]['Name'] == 'Saga') echo 'selected'; ?>>Saga</option>	
		</select></td>
	</tr>
	<tr>
		<td>Plate  :</td>
		<td><input type="text" name="Plate" <input type="text" name="Plate" value="<?php echo $this->registercarSingleList[0]['Plate']; ?>" /> </td>
	</tr>
	<tr>
		<td>Status   :</td>
		<td><select name="Status">
			<option value="New" <?php if($this->registercarSingleList[0]['Status'] == 'New') echo 'selected'; ?>>New</option>
			<option value="Used" <?php if($this->registercarSingleList[0]['Status'] == 'Used') echo 'selected'; ?>>Used</option>			
		
		</select></td>
	</tr>
	<tr>
		<td colspan=2 align="center" ><input type="submit"  /></td>
	
	</tr>
</table>
	
</form>

<a href="<?php echo URL; ?>RegisterCar"><input type="button" value="Back"></a>


