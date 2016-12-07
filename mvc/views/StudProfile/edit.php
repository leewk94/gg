<h2>Edit - Profile</h2>

<form action="<?php echo URL;?>StudProfile/editSave/<?php echo $this->studProfile[0]['studID']; ?>" method="POST">

    <table>
        <table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td>
                    <input type="text" name="name" value="<?php echo $this->studProfile[0]['studName']; ?>" />
                    <input type="hidden" name="studId" value="<?php echo $this->studProfile[0]['studID'];?>"/>
                </td>
            </tr>
            <tr>
                <td>Identity Card Number</td>
                <td>:</td>
                <td>
                    <input type="text" name="ic"  pattern="[0-9]{12}" title="Twelve numeric. e.g.901121075001"  value="<?php echo $this->studProfile[0]['studIC']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td>:</td>
                <td>
                    <input type="date" name="DOB" value="<?php echo $this->studProfile[0]['studDOB']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Contact Number</td>
                <td>:</td>
                <td>
                    <input type="tel" name="contact"  pattern="[0-9]{10,12}" title="Invalid contact number format. e.g.60126551212"  value="<?php echo $this->studProfile[0]['studContactNo']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input type="email" name="email" size="80" value="<?php echo $this->studProfile[0]['studEmail']; ?>" />
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>:</td>
                <td>
                    <textarea name="add" rows="5" cols="50">
                        <?php echo trim($this->studProfile[0]['studAdd']); ?>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" name="submit" value="Update"/>
					<a href="<?php echo URL; ?>StudProfile"><input type="button" value="Back"></a>
                </td>
            </tr>
        </table>
</table>
</form>
