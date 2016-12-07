<h1>User: Edit</h1>


<form method="post" action="<?php echo URL;?>allStaff/editSave/<?php echo $this->user[0]['userid']; ?>">
    
	<label>Login</label><input type="text" name="login" value="<?php echo $this->user[0]['login']; ?>" /><br />
	<label>Password</label><input type="text" name="password" /><br />
	<label>Role</label>
		<select name="role">
			<option value="admin" <?php if($this->user[0]['role'] == 'admin') echo 'selected'; ?>>Admin</option>
			<option value="default" <?php if($this->user[0]['role'] == 'default') echo 'selected'; ?>>Default</option>
		</select><br />
	<label>&nbsp;</label><input type="submit" />
</form>