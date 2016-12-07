<h1>Progress</h1>

<?php
$from =(int) date('H ', strtotime($this->carSingleList[0]['Timefrom']));
$to= (int)date('H ', strtotime($this->carSingleList[0]['Timeto']));

?>

<form method="post" action="<?php echo URL;?>TraProgress/insertTraProgress/<?php echo $this->carSingleList[0]['assignID']; ?>">
    <label>Plate Number : </label><input type="text" value='<?php echo $this->carSingleList[0]['Plate'];?>' readonly><br>
        <label>Time From : </label>
       <?php echo"<select name='timeFromH' >";
        for($i=$from; $i<=$to; $i++) {
            echo'<option value="'.$i.'">'.$i.'</option>';
         }
         ?>
        </select>
               <?php echo"<select name='timeFromM' >";
        for($i=0; $i<=60; $i++) {
            echo'<option value="'.sprintf("%02d", $i).'">'.sprintf("%02d", $i).'</option>';
         }
         ?>
        </select>
        <br/>
        <label>Time To : </label>
       <?php echo"<select name='timeToH' >";
        for($i=$from; $i<=$to; $i++) {
            echo'<option value="'.$i.'">'.$i.'</option>';
         }
         ?>
        </select>
               <?php echo"<select name='timeToM' >";
        for($i=0; $i<=60; $i++) {
            echo'<option value="'.sprintf("%02d", $i).'">'.sprintf("%02d", $i).'</option>';
         }
         ?>
        </select><br>
        <label>Comment :</label>
        <textarea name="comment" required></textarea>
	<br><label></label><input type="submit" value="Add" />
</form>
<a href="<?php echo URL; ?>Traprogress"><input type="button" value="Back"></a>
<hr>

<?php
        echo'<table border="1" style="border-collapse:collapse;" width="50%">';
        echo'<tr>';
        echo"<th>Time From</th>";
        echo"<th>Time To</th>";
        echo"<th>Comment</th>";
		echo"<th>Action</th>";
        echo'</tr>';
	foreach($this->commentList as $key => $value) {
		echo '<tr>';
		echo '<td>' .date('H:i ', strtotime($value['timeFrom'])) .'</td>';
		echo '<td>'  .date('H:i ', strtotime($value['timeTo'])) . '</td>';
		echo '<td>' . $value['comment'] . '</td>';
		echo '<td>
				<a class="delete" href="'.URL.'TraProgress/delete/'.$value['progressID'].'" >Delete</a></td>';
		echo '</tr>';
	}
        echo'</table>';
?>
<script>
$(function() {
	
	$('.delete').click(function(e) {
		var c = confirm("Are you sure you want to delete?");
		if (c == false) return false;
		
	});
	
});
</script>
