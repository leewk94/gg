<h1> Progress : Trainer - <?php echo $this->trainer[0]['traName'];?></h1>

<table class="center">
<?php
                echo'<tr class="border">';
                echo'<th colspan="4">Car</th>';
                echo'<th colspan="3">Trainer</th>';
                echo'</tr>';
                echo '<tr>';
                echo '<th>Plate</th>';
		echo '<th>Date</th>';
               	echo '<th>Time From</th>';
                echo '<th>Time To</th>';
		echo '<th>Time From</th>';
		echo '<th>Time To</th>';
                echo '<th>Comment</th>';
                echo '</tr>';
                
	foreach($this->progress as $key => $value) {
		
                echo '<tr>';
                echo '<td>' . $value['Plate'] . '</td>';
		echo '<td>' . $value['Date'] . '</td>';
                echo '<td>' . $value['timeFrom'] . '</td>';
		echo '<td>' . $value['timeTo'] . '</td>';
		echo '<td>' . $value['timeFrom'] . '</td>';
		echo '<td>' . $value['timeTo'] . '</td>';
                echo '<td>' . $value['comment'] . '</td>';
                echo'<tr>';
	}
?>
</table>
