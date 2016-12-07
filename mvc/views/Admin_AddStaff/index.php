<h1>Add Staff</h1>

<form method="post" action="<?php echo URL;?>Admin_AddStaff/create">
	<label>Username</label><input type="text" size="50" name="login" /><br />
	<label>Password</label><input type="text" size="50" name="password" /><br />
	<label>Role</label>
		<select name="role">
			<option value="admin">Staff</option>
		</select><br />
	<label>&nbsp;</label><input type="submit" />
</form>
