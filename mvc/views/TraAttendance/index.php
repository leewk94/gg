<h1>Attendance - Trainer & Student</h1>


<table border="1" style="border-collapse:collapse;" width="80%">
<?php
        $i=1;
        echo'<tr>';
        echo'<th>NO</th>';
        echo'<th>TYPE</th>';
        echo'<th>TIME</th>';
        echo'<th>STATUS</th>';
        echo'<th>CHECK IN</th>';
        echo'<th>CHECK OUT</th>';
		echo'<th>Action</th>';
        echo'</tr>';
	foreach($this->ClassesList as $key => $value) {
		echo '<tr>';
		echo '<td>' . $i . '</td>';
                echo '<td>' . $value['classesType'] . '</td>';
                echo '<td>' . date('H:i ', strtotime($value['classesTime'])) . '</td>';
                echo '<td>'.$value['attendanceStatus']. '</td>';
                if($value['checkIn']!=""){
                echo '<td>' . date('H:i ', strtotime($value['checkIn'])) . '</td>';
                }else{
                echo'<td></td>';
                }
                if($value['checkOut']!=""){
                echo '<td>' . date('H:i ', strtotime($value['checkOut'])) . '</td>';
                }else{
                echo'<td></td>';
                }
		echo '<td>
                        <a href="'.URL.'TraAttendance/edit/'.$value['classesID'].'">Select</a> </td>';
		echo '</tr>';
                $i++;
	}
?>
</table>
