<h1>View Schedule</h1>




	<?php 
        
      if(count($this->schedule) > 0){
       $classid=$this->schedule[0]['classesID'];
      
           
                ?>

        <table>
<?php

foreach($this->scheduleList as $key => $value) {
    if ($value['classesID']==$classid){
echo '<table width="20%"><tr><td>Date:</td><td>' . $value['classesDate'] . '</td></tr>';
		echo '<tr><td>Time:</td><td>' . $value['classesTime'] . '</td></tr>';
                echo '<tr><td>Class:</td><td>' . $value['classesType'] . ' Class </td></tr>';
                echo '<tr><td>Status:</td><td>Status ' . $value['classesStatus'] . '</td></tr><table><br/>';
    }
}
 }
                
echo "<strong>List of student:</strong><br/>";
echo "<table  border=\"1\" style=\"border-collapse: collapse;\" width=\"50%\" ><tr><th>IC No</th><th>Name</th><th>Contact No</th><th>E-mail</th></tr>";	
if(count($this->schedule) > 0){
foreach($this->studentList as $key => $value) {
            
            if ($value['classesID']==$classid){
		echo '<tr>';
		
		echo '<td>' . $value['studIC'] . '</td>';
                echo '<td>' . $value['studName'] . '</td>';
                echo '<td>' . $value['studContactNo'] . '</td>';
                  echo '<td>' . $value['studEmail'] . '</td>';
		echo '</tr>';
            }
	}
}
?>
        </table>
		<br>
<a href="<?php echo URL; ?>schedule"><input type="button" value="Back"></a>
	
