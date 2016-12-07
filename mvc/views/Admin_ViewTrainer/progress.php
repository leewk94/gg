<h1> Progress - Trainer : <?php echo $this->trainer[0]['traName'];?></h1>

<table border="1" style="border-collapse:collapse;" width="100%">
<?php
$i=1;
                echo'<tr class="border">';
                echo'<th >No</th>';
                echo'<th colspan="4">Car</th>';
                echo'<th colspan="3">Trainer</th>';
                echo'</tr>';
                echo '<tr>';
                echo '<th></th>';
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
                echo '<td>' .$i. '</td>';
                echo '<td>' . $value['Plate'] . '</td>';
		echo '<td>' . $value['Date'] . '</td>';
                echo '<td>' . $value['timeFrom'] . '</td>';
		echo '<td>' . $value['timeTo'] . '</td>';
		echo '<td>' . $value['timeFrom'] . '</td>';
		echo '<td>' . $value['timeTo'] . '</td>';
                echo '<td>' . $value['comment'] . '</td>';
                echo'<tr>';
                $i++;
	}
?>
</table>
<br>
<a href="<?php echo URL; ?>Admin_ViewTrainer"><input type="button" value="Back"></a>