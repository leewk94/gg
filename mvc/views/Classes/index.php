<h1>Manage Class</h1>


   

<br/><br/>
Add New Class:
<form method="post" action="<?php echo URL;?>classes/create">
    <label>Class Type: </label><select name="classType"><option value='Theory'>Theory Class </option><option value='Practical'>Practical Class</option></select><br />
    <label>Date:</label><input type="date"name="classDate"><br />
    <label>Time</label><input type="time" name="classTime"><br/>
    <label>Trainer:</label> 
    <select name="classTrainer">
<?php 
foreach ($this->trainerList as $key => $value)
{
     
    echo "<option value='".$value['traID']."'>".$value['traName']."</option>";
}
echo"</select>";

  foreach ($this-> getid as $key => $value)
{
    $value=$value["AUTO_INCREMENT"];
    echo"<input type='text' name='getid' value='".$value."'  hidden/>";
}
?>        

   
  
    <br/><br/><label></label> <input type="submit" value="Add Class"  />
</form>

<hr />
<strong>List of classes:</strong><br/><br/>
<table  border="1" style="border-collapse: collapse;" width="80%">
    <tr >
        <th>No</th><th>Class Type</th><th>Date</th><th>Time</th><th>Trainer</th><th>Class Status</th><th>Action</th>
    </tr>
<?php
 $iNum=0;
	foreach($this->classesList as $key => $value) {
             $iNum++;
		echo '<tr>';
                echo '<td>'.$iNum.'</td>';
		echo '<td>' . $value['classesType'] . '</td>';
                echo '<td>' . $value['classesDate'] . '</td>';
                echo '<td>' . $value['classesTime'] . '</td>';
                echo '<td>' . $value['traName'] . '</td>';
                echo '<td>' . $value['classesStatus'] . '</td>';
		echo '<td><a href="'. URL . 'classes/edit/' . $value['classesID'].'">Edit</a>';
		echo '          <a class="delete" href="'. URL . 'classes/delete/' . $value['classesID'].'">Delete</a></td>';
		echo '</tr>';
	}
?>
</table>
 
<script>
$(function() {
	
	$('.delete').click(function(e) {
		var c = confirm("Are you sure you want to delete?");
		if (c == false) return false;
		
	});
	
});
</script>