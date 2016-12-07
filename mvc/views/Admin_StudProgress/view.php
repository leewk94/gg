<h1>View - Student Progress</h1>

<table>
    <tr>
        <td style="text-align: right;">
            <span>Name</span>
        </td>
        <td style="text-align: center;">
            <span>:</span>
        </td>
        <td style="text-align: left;">
            <span><?php echo $this->Admin_StudProgress[0]['studName']; ?></span>
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
            <span><?php echo $this->Admin_StudProgress[0]['studIC']; ?></span>
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
            <span><?php echo $this->Admin_StudProgress[0]['studDOB']; ?></span>
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
            <span><?php echo $this->Admin_StudProgress[0]['studContactNo']; ?></span>
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
            <span><?php echo $this->Admin_StudProgress[0]['studEmail']; ?></span>
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <span>Progress Status</span>
        </td>
        <td style="text-align: center;">
            <span>:</span>
        </td>
        <td style="text-align: left;">
            <span><?php echo $this->Admin_StudProgress[0]['studProgressStatus']; ?></span>
        </td>
    </tr>
    <tr>
        <td style="text-align: right;">
            <span>Update Status</span>
        </td>
        <td style="text-align: center;">
            <span>:</span>
        </td>
        <td style="text-align: left;">
            <?php if($this->Admin_StudProgress[0]['studProgressStatus'] == 'Pending'){ ?>
            <a href="<?php echo URL."/Admin_StudProgress/success/".$this->Admin_StudProgress[0]['studID']; ?>">Success<a/>
            <a href="<?php echo URL."/Admin_StudProgress/failure/".$this->Admin_StudProgress[0]['studID']; ?>">Failure<a/>
            <?php }else if($this->Admin_StudProgress[0]['studProgressStatus'] != 'Pending'){ ?>
                <a href="<?php echo URL."/Admin_StudProgress/reset/".$this->Admin_StudProgress[0]['studID']; ?>">Reset</a>
            <?php } ?>
        </td>
    </tr>
</table>
<a href="<?php echo URL; ?>Admin_StudProgress"><input type="button" value="Back"></a>