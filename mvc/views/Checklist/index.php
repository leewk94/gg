<h1>Checklist</h1>


<table width="100%" class="checklist_tbl">
<?php
foreach($this->checkList as $key => $value) {
    echo '<tr>';
    echo '<th colspan="2">Student ID: ' . $value['studID'] . '</th>';
    echo '</tr>';
    foreach($this->checkSingleList as $keys => $values) {
        if ($value['studID']==$values['studID']) {
            echo '<tr>';
            echo '<td>Class ID: ' . $values['resultClass'] . '</td>';
            echo '<td>Grade: ' . $values['grade'] . '</td>';
            echo '</tr>';
        }
    }

    echo '<tr>';
    echo '<td colspan="2"><a href="'. URL . 'payment/index/' . $value['studID'].'">View Payment</a></td>';
    echo '</tr>';
}
?>
</table>
