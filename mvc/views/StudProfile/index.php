<h2>Student Profile</h2>

<table>
<?php
    
    foreach($this->studProfile as $key => $value){
        echo "<tr>";
        echo "<td style='text-align:right'>";
        echo "Name";
        echo "</td>";
        echo "<td style='text-align:center'>";
        echo ":";
        echo "</td>";
        echo "<td>";
        echo $value['studName'];
        echo "</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td style='text-align:right'>";
        echo "Indentity Card Number";
        echo "</td>";
        echo "<td style='text-align:center'>";
        echo ":";
        echo "</td>";
        echo "<td>";
        echo $value['studIC'];
        echo "</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td style='text-align:right'>";
        echo "Contact Number";
        echo "</td>";
        echo "<td style='text-align:center'>";
        echo ":";
        echo "</td>";
        echo "<td>";
        echo $value['studContactNo'];
        echo "</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td style='text-align:right'>";
        echo "Email";
        echo "</td>";
        echo "<td style='text-align:center'>";
        echo ":";
        echo "</td>";
        echo "<td>";
        echo $value['studEmail'];
        echo "</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td style='text-align:right'>";
        echo "Date of Birth";
        echo "</td>";
        echo "<td style='text-align:center'>";
        echo ":";
        echo "</td>";
        echo "<td>";
        echo $value['studDOB'];
        echo "</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td style='text-align:right'>";
        echo "Address";
        echo "</td>";
        echo "<td style='text-align:center'>";
        echo ":";
        echo "</td>";
        echo "<td>";
        echo trim($value['studAdd']);
        echo "</td>";
        echo "</tr>";
        
        echo "<tr>";
        echo "<td colspan='3'>";
        echo "<a href='".URL."StudProfile/edit/".$value['studID']."'>Edit</a>";
        echo "&nbsp;";
        echo "<a href='".URL."StudProfile/changePassword/".$value['studID']."'>Change Password</a>";
        echo "</td>";
        echo "</tr>";
        
    }
?>
</table>