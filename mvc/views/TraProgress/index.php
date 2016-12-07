<h1>Progress</h1>

<table border="1" style="border-collapse:collapse;" width="50%">
<?php
$total=count($this->commentNum) ;
$i=0;
$j=1;
        echo '<tr>';
        echo '<th>No</th>';
	echo '<th>Time From</th>';
	echo '<th>Time To</th>';
        echo '<th>No of Comments</th>';
        echo '<th>Plate Number</th>';
		echo '<th>Action</th>';
        echo '</tr>';
	foreach($this->carList as $key => $value) {
		echo '<tr>';
                echo'<td>'.$j.'</td>';
		echo '<td>' .date('H:i ', strtotime($value['Timefrom'])) . '</td>';
		echo '<td>' .date('H:i ', strtotime($value['Timeto'])) . '</td>';
                echo '<td>'. $this->commentNum[$i]['comments']. '</td>';
                echo '<td>' . $value['Plate'] . '</td>';
		echo '<td><a href="'.URL.'TraProgress/edit/'.$value['assignID'].'">Select</a>';
		echo '</tr>';
                $i++;
	}
?>
</table>
