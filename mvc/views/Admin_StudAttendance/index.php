<h1>Student Attendance</h1>

<table border="1" style="border-collapse: collapse;" Width="80%">
    <thead style="background-color: appworkspace">
        <tr>
            
            <th width="5%">No</th>
            <th width="35%">Name</th>
            <th width="20%">Indentity Card No</th>
            <th width="20%">Attendance Status</th>
            <th width="20%">Action</th>
        </tr>
    </thead>
   
    <tbody>
        <?php
        $iNum = 0;
            foreach($this->Admin_StudAttendance as $key=>$value){
                $iNum++;
                echo "<tr>";
                
                
                
                echo "<td style='text-align:center;'>";
                echo $iNum;
                echo "</td>";
                
                echo "<td>";
                echo $value['studName'];
                echo "</td>";
                
                echo "<td style='text-align:center;'>";
                echo $value['studIC'];
                echo "</td>";
                
                echo "<td style='text-align:center;'>";
                if ($value['studAttendanceStatus']==""){
                    echo "Haven't attend any class.";
                }else{
                    echo $value['studAttendanceStatus'];
                }
                
                echo "</td>";
                
                echo "<td>";
                echo "<a href='".URL."Admin_StudAttendance/view/".$value['studID']."'>View</a>";
                echo "&nbsp;";
                if($value['studAttendanceStatus'] == "Absent"){
                    echo "<a href='".URL."Admin_StudAttendance/undo/".$value['studID']."'>Reset</a>";
                }elseif ($value['studAttendanceStatus'] == "") {
                    echo "<a href='".URL."Admin_StudAttendance/attend/".$value['studID']."'>Attend</a>";
                    echo "&nbsp";
                    echo "<a href='".URL."Admin_StudAttendance/absent/".$value['studID']."'>Absent</a>";
                }else{
                    
                    echo "<a href='".URL."Admin_StudAttendance/undo/".$value['studID']."'>Reset</a>";
                }  
                echo "</td>";
                
                echo "</tr>";
            }
        
        ?>
    </tbody>
</table>