<h2>Attendence</h2>

<table>
    <tr>
        <td style="text-align: right;">
            <span>Name</span>
        </td>
        <td style="text-align: center;">
            <span>:</span>
        </td>
        <td style="text-align: left;">
            <span><?php echo $this->StudAttendance[0]['studName']; ?></span>
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <span>Indentity Card Number</span>
        </td>
        <td style="text-align: center;">
            <span>:</span>
        </td>
        <td style="text-align: left;">
            <span><?php echo $this->StudAttendance[0]['studIC']; ?></span>
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <span>Date of Birth</span>
        </td>
        <td style="text-align: center;">
            <span>:</span>
        </td>
        <td style="text-align: left;">
            <span><?php echo $this->StudAttendance[0]['studDOB']; ?></span>
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <span>Contact Number</span>
        </td>
        <td style="text-align: center;">
            <span>:</span>
        </td>
        <td style="text-align: left;">
            <span><?php echo $this->StudAttendance[0]['studContactNo']; ?></span>
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <span>Email</span>
        </td>
        <td style="text-align: center;">
            <span>:</span>
        </td>
        <td style="text-align: left;">
            <span><?php echo $this->StudAttendance[0]['studEmail']; ?></span>
        </td>
    </tr>
    <?php if (($this->StudAttendance[0]['classesDate'] == "") && ($this->StudAttendance[0]['classesTime'] == "") && ($this->StudAttendance[0]['classesType'] == "")){ ?>
    <tr>
        <td style="text-align: right;">
            <span>Attendance Status</span>
        </td>
        <td style="text-align: center;">
            <span>:</span>
        </td>
        <td style="text-align: left;">
            <span><?php echo (($this->StudAttendance[0]['studAttendanceStatus']=="")?"Haven't attend any class.": $this->StudAttendance[0]['studAttendanceStatus'])?></span>
        </td>
    </tr>
    <?php }else{ ?>
    <tr>
        <td style="text-align: right;">
            <span>Class Type</span>
        </td>
        <td style="text-align: center;">
            <span>:</span>
        </td>
        <td style="text-align: left;">
            <span><?php echo $this->StudAttendance[0]['classesType']; ?></span>
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <span>Class Date Time</span>
        </td>
        <td style="text-align: center;">
            <span>:</span>
        </td>
        <td style="text-align: left;">
            <span><?php echo $this->StudAttendance[0]['classesDate'].' - '.$this->StudAttendance[0]['classesTime']; ?></span>
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <span>Attendance Status</span>
        </td>
        <td style="text-align: center;">
            <span>:</span>
        </td>
        <td style="text-align: left;">
            <span><?php echo (($this->StudAttendance[0]['studAttendanceStatus']=="")?"Haven't attend any class.": $this->StudAttendance[0]['studAttendanceStatus'])?></span>
        </td>
    </tr>
    <?php } ?>
</table>