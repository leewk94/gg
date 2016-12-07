<h1>Add Trainer Account</h1>

<form method="post" action="<?php echo URL;?>addTrainer/create">
    <?php
    foreach($this->trainerList as $key => $value) {
		$value=$value["AUTO_INCREMENT"];
        echo"<input type='text' name='id' value='$value' hidden />";
	}
    ?>
         <label>Name</label><input type="text" name="login" required /><br />
	<label>Password</label><input type="password" name="password" required /><br />
        <label>IC</label><input type="text" name="ic" required /><br />
        <label>License</label><input type="text" name="license" required /><br />
        <label>Address </label> <textarea name="address" required></textarea><br />
        <label>Contact</label><input type="text" name="contact" required/><br />
        <label>Email</label><input type="email" name="email" required/><br />
	<label>Role</label>
		<select name="role">
                        <option value="trainer" selected>Trainer</option>
		</select><br />
	<label>&nbsp;</label><input type="submit" />
</form>

<hr />

<table>
<?php
if ( isset($_GET['success']) && $_GET['success'] == 1 )
{
     echo "<span class='message'>Account successfully created</span>";
}


/*	foreach($this->userList as $key => $value) {
		echo '<tr>';
		echo '<td>' . $value['userid'] . '</td>';
		echo '<td>' . $value['login'] . '</td>';
		echo '<td>' . $value['role'] . '</td>';
		echo '<td>
				<a href="'.URL.'user/edit/'.$value['userid'].'">Edit</a> 
				<a href="'.URL.'user/delete/'.$value['userid'].'">Delete</a></td>';
		echo '</tr>';


	} */
?>
</table>