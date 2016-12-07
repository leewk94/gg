<h1>Add Trainer Account</h1>

<form method="post" action="<?php echo URL;?>Admin_AddTrainer/create">
    <?php
    foreach($this->trainerList as $key => $value) {
		$value=$value["AUTO_INCREMENT"];
        echo"<input type='text' name='id' value='$value' hidden />";
	}
    ?>
         <label>Name</label><input type="text" size="50" name="login" required /><br />
	<label>Password</label><input type="password" size="50" name="password" required /><br />
        <label>IC</label><input type="text" name="ic" size="50" required /><br />
        <label>License</label><input type="text" size="50" name="license" required /><br />
        <label>Address </label> <textarea name="address" rows="5" cols="40" required></textarea><br />
        <label>Contact</label><input type="text" size="50" name="contact" required/><br />
        <label>Email</label><input type="email" size="50" name="email" required/><br />
	<label>Role</label>
		<select name="role">
                        <option value="trainer" selected>Trainer</option>
		</select><br />
	<label>&nbsp;</label><input type="submit" />
</form>

<hr />
