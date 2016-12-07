<h1> Edit - Trainer</h1>

<form method="post" action="<?php echo URL;?>TraProfile/updateTraProfile/<?php echo $this->trainer[0]['traID']; ?>">
	<table>
        <tr><td><label>Name</label></td><td><input type="text" name="traName" value="<?php echo $this->trainer[0]['traName']; ?>" required/></td></tr>
        <tr><td><label>I/C</label></td><td><input type="text" name="traIC" value="<?php echo $this->trainer[0]['traIC']; ?>" required/></td></tr>
        <tr><td><label>License</label></td><td><input type="text" name="instructorLicense" value="<?php echo $this->trainer[0]['intructorLicense']; ?>"required/></td></tr>
        <tr><td><label>Address</label></td><td><textarea name='traAddress'required><?php echo $this->trainer[0]['traAddress']; ?></textarea></td></tr>
        <tr><td><label>Contact</label></td><td><input type="text" name="traContactNo" value="<?php echo $this->trainer[0]['traContactNo']; ?>" required/></td></tr>
        <tr><td><label>Email</label></td><td><input type="email" name="traEmail" value="<?php echo $this->trainer[0]['traEmail']; ?>" required/></td></tr>
        </table>
	<label>&nbsp;</label><input type="submit" />
</form>
<a href="<?php echo URL; ?>Traprofile"><input type="button" value="Back"></a>
