<h1>Student Progress</h1>

<table border="1" style="border-collapse: collapse;" Width="70%">
    <thead style="background-color: appworkspace">
        <tr>
            
           
            <th width="5%">No</th>
            <th width="35%">Name</th>
            <th width="18%">Indentity Card No</th>
            <th width="28%">Progress Status</th>
            <th width="8%">Action</th> <th width="16%">Update Status Action</th>
        </tr>
    </thead>
    
    <tbody>
        <?php
        $iNum = 0;
            foreach($this->Admin_StudProgress as $key=>$value){
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
                echo $value['studProgressStatus'];
                echo "</td>";
                 echo "<td style='text-align:center;'>";
                echo "<a href='".URL."Admin_StudProgress/view/".$value['studID']."'>View</a>";
                echo "</td>";
                
                  echo "<td>";
                if ($value['studProgressStatus'] == 'Pending'){
                    echo "<a href='".URL."/Admin_StudProgress/success/".$value['studID']."'>Success</a>";
                    echo "&nbsp;";
                    echo "<a href='".URL."/Admin_StudProgress/failure/".$value['studID']."'>Failure</a>";
                }elseif ($value['studProgressStatus'] != 'Pending'){
                    echo "&nbsp;";
                    echo "<a href='".URL."/Admin_StudProgress/reset/".$value['studID']."'>Reset</a>";
                }
                echo"</td>";
                echo "</tr>";
            }
        
        ?>
    </tbody>
</table>