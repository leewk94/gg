<h1>Change Password - Trainer </h1>


<form method="post" action="<?php echo URL;?>TraProfile/updatePassword/<?php echo $this->newPassword[0]['userid']; ?>">
	<table>
            <tr><td><label>New Password</label></td><td><input type="password" name="traPassword" required/></td></tr>
        </table>
	<label>&nbsp;</label><input type="submit" value="Change" />
</form>
<a href="<?php echo URL; ?>TraProfile"><input type="button" value="Back"></a>