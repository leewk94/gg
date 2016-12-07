<h1> Change Password :Trainer</h1>


<form method="post" action="<?php echo URL;?>viewTrainer/updatePassword/<?php echo $this->newPassword[0]['userid']; ?>">
	<table>
        <tr><td><label>New Password</label></td><td><input type="password" name="password" /></td></tr>
        </table>
	<label>&nbsp;</label><input type="submit" value="Change" />
</form>
