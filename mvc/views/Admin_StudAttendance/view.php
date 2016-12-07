<h1>View - Student Attendance</h1>

<table>
    <tr>
        <td style="text-align: right;">
            <span>Name</span>
        </td>
        <td style="text-align: center;">
            <span>:</span>
        </td>
        <td style="text-align: left;">
            <span><?php echo $this->Admin_StudAttendance[0]['studName']; ?></span>
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
            <span><?php echo $this->Admin_StudAttendance[0]['studIC']; ?></span>
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
            <span><?php echo $this->Admin_StudAttendance[0]['studDOB']; ?></span>
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
            <span><?php echo $this->Admin_StudAttendance[0]['studContactNo']; ?></span>
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
            <span><?php echo $this->Admin_StudAttendance[0]['studEmail']; ?></span>
        </td>
    </tr>
    <?php if (($this->Admin_StudAttendance[0]['classesDate'] == "") && ($this->Admin_StudAttendance[0]['classesTime'] == "") && ($this->Admin_StudAttendance[0]['classesType'] == "")){ ?>
    <tr>
        <td style="text-align: right;">
            <span>Attendance Status</span>
        </td>
        <td style="text-align: center;">
            <span>:</span>
        </td>
        <td style="text-align: left;">
            <span><?php echo (($this->Admin_StudAttendance[0]['studAttendanceStatus']=="")?"Haven't attend any class.": $this->Admin_StudAttendance[0]['studAttendanceStatus'])?></span>
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
            <span><?php echo $this->Admin_StudAttendance[0]['classesType']; ?></span>
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
            <span><?php echo $this->Admin_StudAttendance[0]['classesDate'].' - '.$this->Admin_StudAttendance[0]['classesTime']; ?></span>
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
            <span><?php echo (($this->Admin_StudAttendance[0]['studAttendanceStatus']=="")?"Haven't attend any class.": $this->Admin_StudAttendance[0]['studAttendanceStatus'])?></span>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <?php if($this->Admin_StudAttendance[0]['studAttendanceStatus']==""){ ?>
            <a href="<?php echo URL.'Admin_StudAttendance/attend/'.$this->Admin_StudAttendance[0]['studID']?>">Attend</a>
            <a href="<?php echo URL.'Admin_StudAttendance/Absent/'.$this->Admin_StudAttendance[0]['studID'];?>">Absent</a>
            <?php }elseif($this->Admin_StudAttendance[0]['studAttendanceStatus'] == "Absent"){ ?>
            <a href="<?php echo URL.'Admin_StudAttendance/undo/'.$this->Admin_StudAttendance[0]['studID']?>">Reset</a>
            <?php }else{  ?>
            <a href="<?php echo URL.'Admin_StudAttendance/undo/'.$this->Admin_StudAttendance[0]['studID'];?>">Reset</a>
            <?php }  ?>
        </td>
    </tr>
    <?php } ?>
    
</table>
<a href="<?php echo URL; ?>Admin_StudAttendance"><input type="button" value="Back"></a>