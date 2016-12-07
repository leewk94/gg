<h1>User</h1>

<form method="post" action="<?php echo URL;?>user/create">
	<label>Login</label><input type="text" name="login" /><br />
	<label>Password</label><input type="text" name="password" /><br />
	<label>Role</label>
		<select name="role">
			<option value="default">Default</option>
			<option value="admin">Admin</option>
		</select><br />
	<label>&nbsp;</label><input type="submit" />
</form>

<?php
if ( isset($_GET['success']) && $_GET['success'] == 1 )
{
     echo "<span class='message'>Account successfully created</span>";
}
