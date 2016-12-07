<h2>Change Password</h2>

<br/>

<form action="<?php echo URL;?>StudProfile/updatePassword/<?php echo $this->studProfile[0]['userid'];?>" method="POST">
    <table style="border: 1px dotted black">
        <tr>
            <th style="text-align: left">
                <span>Note:</span>
            </th>
        </tr>
        <tr>
            <td>
                <span>Password is case-sensitive.</span>
                <br/>
                <span>Password is taking all whitespaces into account.</span>
                <br/>
                <span>Password must contain at least <b>6</b> characters.</span>
            </td>
        </tr>
    </table>
    <br/>
    <table>
        <tr>
            <td style="text-align: right;">
                <span>Current Password</span>
            </td>
            <td style="text-align: center;">
                <span>:</span>
            </td>
            <td style="text-align: left;">
                <input type="password" name="currentPassword" id="currentPassword" size="30"/>
                <input type="hidden" name="studID" id="studID" value="<?php echo $this->studProfile[0]['studID'] ?>"/>
                <input type="hidden" name="dbPassword" id="dbPassword" value="<?php echo $this->studProfile[0]['password']; ?>"/>
            </td>
        </tr>
        <tr>
            <td style="text-align: right;">
                <span>New Password</span>
            </td>
            <td style="text-align: center;">
                <span>:</span>
            </td>
            <td style="text-align: left;">
                <input type="password" name="newPassword" id="newPassword" size="30"/>
            </td>
        </tr>
        <tr>
            <td style="text-align: right;">
                <span>Confirm Password</span>
            </td>
            <td style="text-align: center;">
                <span>:</span>
            </td>
            <td style="text-align: left;">
                <input type="password" name="confirmPassword" id="confirmPassword" size="30"/>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <input type="submit" name="submit" id="submit" value="Change"/>
				<a href="<?php echo URL; ?>StudProfile"><input type="button" value="Back"></a>
            </td>
        </tr>
    </table>
</form>