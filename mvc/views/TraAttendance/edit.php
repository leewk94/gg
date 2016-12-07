<h1>Attendance - Trainer & Student </h1>
<?php
$exist=count($this->studentlist);
$num= count($this->attendance);
$j=1;
?>
 <?php if(empty($this->traAttendance[0]['checkIn'])) {?>

<form method="post" action="<?php echo URL;?>TraAttendance/traCheckIn/<?php echo $this->attendance[0]['classesID']; ?>">
 <h3>Trainer Attendance:</h3>
<input type="submit" value="Check In" />

 <?php }else if(empty($this->traAttendance[0]['checkOut'])){?>
<form method="post" action="<?php echo URL;?>TraAttendance/traCheckOut/<?php echo $this->attendance[0]['classesID']; ?>">
 <h3>Trainer Attendance</h3>
<input type="submit" value="Check Out" />
<?php }?>
</form>
<br><h3>Student Attendance :</h3> 
<table border="1" style="border-collapse:collapse;" width="70%">
    <tr>
		<th style="display:none"></th>
        <th>No</th>
        <th>Name</th>
        <th>I/C</th>
        <th>Contact No</th>
        <th>Status</th>
    </tr>
    <?php if(!empty($this->studentlist[0]['studAttendanceStatus'])) {?>
         <form method="post" action="<?php echo URL;?>TraAttendance/updateStudAttendance/">
   <?php }else{?>
        <form method="post" action="<?php echo URL;?>TraAttendance/insertStudAttendance/">
      <?php  }?>
        <input type="text" name="noStud" value="<?php echo $num ?>" hidden/> 
        <input type="text" name="classes" value="<?php echo $this->attendance[0]['classesID']; ?>" hidden/>  
	<?php for($i=0;$i<$num;$i++){ ?>
    
        <tr>
		 
          <td style="display:none"><input type="text" name="studId_<?php echo $i?>" value="<?php echo $this->attendance[$i]['studID']; ?>" hidden/></td>
		  <td><?php echo $j; ?></td>
          <td><?php echo $this->attendance[$i]['studName']; ?></td>
          <td><?php echo $this->attendance[$i]['studIC']; ?></td>
          <td><?php echo $this->attendance[$i]['studContactNo']; ?></td>
          <td>
		<?php echo"<select name='studAttendanceStatus_$i' >";?>
                    <?php if(isset($this->studentlist[$i]))
                    {?>
                        <option value="Attend"  <?php if($this->studentlist[$i]['studAttendanceStatus'] == 'Attend') {echo 'selected';} ?>>Attend</option>
                        <option value="Absent" <?php if($this->studentlist[$i]['studAttendanceStatus'] == 'Absent'){ echo 'selected';} ?>>Absence</option>
                    <?php } elseif(isset($this->attendance[$i])){?>
                        <option value="Attend" selected >Attend</option>
			<option value="Absent">Absence</option>
                        <?php } ?>
   
                </select></td>
          </tr>
   <?php } ?>	

</table>
<br>
<a href="<?php echo URL; ?>TraAttendance"><input type="button" value="Back"></a>
<input type="submit" />
</form>