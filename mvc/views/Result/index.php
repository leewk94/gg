<h1>Add Result</h1>

<form method="post" action="<?php echo URL;?>result/create">
	<label>Student ID</label><input type="text" name="studID" /><br />
	<label>Class ID</label><input type="text" name="classID" /><br />
        <label>Grade</label><select name="grade"><option value="Pass">Pass</option><option value="Fail">Fail</option></select><br />
        <label>&nbsp;</label><input type="submit" />
</form>