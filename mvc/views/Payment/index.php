<?php if (Session::get('role') == 'admin'):
$param = explode('/', $_GET['url']);
$grabid = $param[2]; 
$validate = "";
foreach($this->payList as $key => $value) { 
    if ($grabid==$value['studID']) {
        $validate = "true";
        $val1 = $value['studID'];
        $val2 = $value['paymentDate'];
        $val3 = $value['totalAmt'];
    } 
}
    if ($validate=="true") {
        if ($val2!="") {
    ?>
        <table width="100%">
            <tr>
                <td>Student ID</td>
                <td><?php echo $val1;?></td>
            </tr>
            <tr>
                <td>Payment Date</td>
                <td><?php echo $val2;?></td>
            </tr>
            <tr>
                <td>Total Paid</td>
                <td><?php echo $val3;?></td>
            </tr>
            <tr>
                <?php echo "<td><a href='". URL . "payment/edit/" . $val1."'>Edit</a></td>"; 
                echo '<td><a class="delete" href="'. URL . 'payment/delete/' . $val1.'">Delete</a></td>';?>
            </tr>
        </table>
    <?php
        } else {
        ?>
        <h1>Add Payment</h1>
        <form method="post" action="<?php echo URL;?>payment/create">
                <label>Student ID</label><input type="text" name="studID" value="<?php echo $grabid; ?>"/><br />
                <label>Sum Payment</label><input type="text" name="payment" /><br />
                <label>&nbsp;</label><input type="submit" />
        </form>
        <?php
        }
    }else {
        ?>
        <h1>Add Payment</h1>
        <form method="post" action="<?php echo URL;?>payment/create">
                <label>Student ID</label><input type="text" name="studID" value="<?php echo $grabid; ?>"/><br />
                <label>Sum Payment</label><input type="text" name="payment" /><br />
                <label>&nbsp;</label><input type="submit" />
        </form>
        <?php
    }
    
endif; 
?>

<script>
$(function() {
	
	$('.delete').click(function(e) {
		var c = confirm("Are you sure you want to delete?");
		if (c == false) return false;
		
	});
	
});
</script>