<h1>Student Profile</h1>


<div>
 
    <table Width="100%" border="1" style="border-collapse:collapse;">
        <thead style="background-color: appworkspace">
            <tr>
               
                <th>No</th>
                <th>Name</th>
                <th>Identity Card Number</th>
                <th>Date of Birth</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Address</th>
                 <th>Action</th>
            </tr>
        </thead>
        
    
        <tbody>
            <?php
                $iNum = 0;
                foreach($this->Admin_StudProfile as $key => $value){
                    $iNum++;
                    echo "<tr>";
                   echo "<td>";
                    echo $iNum;
                    echo "</td>";
                    echo "<td>";
                    echo $value['studName'];
                    echo "</td>";
                    echo "<td>";
                    echo $value['studIC'];
                    echo "</td>";
                    echo "<td>";
                    echo $value['studDOB'];
                    echo "</td>";
                    echo "<td>";
                    echo $value['studEmail'];
                    echo "</td>";
                    echo "<td>";
                    echo $value['studContactNo'];
                    echo "</td>";
                    echo "<td>";
                    echo $value['studAdd'];
                    echo "</td>";
                     echo "<td>";
                    echo "<a href='".URL."Admin_StudProfile/edit/".$value['studID']."'>Edit</a> ";
                    echo "&nbsp;";
                    echo "<a href='".URL."Admin_StudProfile/delete/".$value['studID']."' class=\"delete\">Delete</a> ";
                    echo "</td>";
                    
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    
    
      <hr/> <a href="<?php echo URL.'Admin_StudProfile/add'; ?>">Add New Student</a>
</div>
<script>
$(function() {
	
	$('.delete').click(function(e) {
		var c = confirm("Are you sure you want to delete?");
		if (c == false) return false;
		
	});
	
});
</script>