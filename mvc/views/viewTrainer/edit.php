<h1> Edit :Trainer</h1>


<form method="post" action="<?php echo URL;?>viewTrainer/editSave/<?php echo $this->trainer[0]['traID']; ?>">
	<table>
        <tr><td><label>Name</label></td><td><input type="text" name="name" value="<?php echo $this->trainer[0]['traName']; ?>" /></td></tr>
        <tr><td><label>I/C</label></td><td><input type="text" name="ic" value="<?php echo $this->trainer[0]['traIC']; ?>" /></td></tr>
        <tr><td><label>License</label></td><td><input type="text" name="license" value="<?php echo $this->trainer[0]['intructorLicense']; ?>" /></td></tr>
        <tr><td><label>Address</label></td><td><textarea name='address'><?php echo $this->trainer[0]['traAddress']; ?></textarea></td></tr>
        <tr><td><label>Contact</label></td><td><input type="text" name="contact" value="<?php echo $this->trainer[0]['traContactNo']; ?>" /></td></tr>
        <tr><td><label>Email</label></td><td><input type="email" name="email" value="<?php echo $this->trainer[0]['traEmail']; ?>" /></td></tr>
        </table>
	<label>&nbsp;</label><input type="submit" />
</form>

<table>
<?php

foreach($this->changePassword as $key => $value) {
                echo '<tr>';
		echo '<td>
				<a href="'.URL.'viewTrainer/changePassword/'.$value['userid'].'">Change Password</a>';
		echo '</tr>';
}
?>
</table>