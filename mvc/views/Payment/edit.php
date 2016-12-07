<h1>Edit - Payment</h1>
<h3>User ID: <?php echo $this->payment[0]['studID']; ?></h3>
<form method="post" action="<?php echo URL;?>payment/editSave/<?php echo $this->payment[0]['studID']; ?>">

	<label>Sum Payment</label><input type="text" name="sum" value="<?php echo $this->payment[0]['totalAmt']; ?>" /><br />
	<label>&nbsp;</label><input type="submit" />
</form>

<a href="<?php echo URL; ?>Checklist"><input type="button" value="Back"></a>