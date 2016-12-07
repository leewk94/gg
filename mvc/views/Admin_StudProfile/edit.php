<h1>Edit - Student Profile</h1>

<form action="<?php echo URL;?>Admin_StudProfile/editSave/<?php echo $this->Admin_StudProfile[0]['studID']; ?>" method="POST">

    <table>
        <table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td>
                    <input type="text" size="50"  name="name" value="<?php echo $this->Admin_StudProfile[0]['studName']; ?>" />
                    <input type="hidden" name="studId" value="<?php echo $this->Admin_StudProfile[0]['studID'];?>"/>
                </td>
            </tr>
            <tr>
                <td>Identity Card Number</td>
                <td>:</td>
                <td>
                    <input type="text" name="ic"  size="50" pattern="[0-9]{12}" title="Twelve numeric. e.g.901121075001" value="<?php echo $this->Admin_StudProfile[0]['studIC']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td>:</td>
                <td>
                    <input type="date" name="DOB" value="<?php echo $this->Admin_StudProfile[0]['studDOB']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Contact Number</td>
                <td>:</td>
                <td>
                    <input type="tel" name="contact" size="50"  size="45" pattern="[0-9]{10,12}" title="Invalid contact number format. e.g.60126551212" value="<?php echo $this->Admin_StudProfile[0]['studContactNo']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input type="email" name="email" size="50" value="<?php echo $this->Admin_StudProfile[0]['studEmail']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>:</td>
                <td>
                    <textarea name="add" rows="5" cols="50">
                        <?php echo trim($this->Admin_StudProfile[0]['studAdd']); ?>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" name="submit" value="Update"/>
                </td>
            </tr>
        </table>
</table>
    
</form>
<a href="<?php echo URL; ?>Admin_StudProfile"><input type="button" value="Back"></a>