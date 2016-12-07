<h1>Staff - Edit</h1>


<form method="post" action="<?php echo URL;?>Admin_AllStaff/editSave/<?php echo $this->user[0]['userid']; ?>">
    
	<label>Login</label><input type="text" name="login" value="<?php echo $this->user[0]['login']; ?>" /><br />
	<label>Password</label><input type="text" name="password" /><br />
	<label>Role</label>
		<select name="role">
			<option value="admin" <?php if($this->user[0]['role'] == 'admin') echo 'selected'; ?>>Staff</option>
		</select><br />
	<label>&nbsp;</label><input type="submit" />
</form>
<a href="<?php echo URL; ?>Admin_AllStaff"><input type="button" value="Back"></a>