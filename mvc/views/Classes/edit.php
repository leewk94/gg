<h1>Edit - Class</h1>
<br/>
<form method="post" action="<?php echo URL;?>classes/editSave/<?php echo $this->classes[0]['classesID']; ?>">
   
    <label>Class Type: </label><select name="classType" value="<?php echo $this->classes[0]['classesType']; ?>"><option value='Theory'>Theory Class </option><option value='Practical'>Practical Class</option></select><br />
    <label>Date:</label><input type="date"name="classDate" value="<?php echo $this->classes[0]['classesDate']; ?>"><br />
    <label>Time</label><input type="time" name="classTime" value="<?php echo $this->classes[0]['classesTime']; ?>"><br/>
    <label>Trainer:</label> 
    <select name="classTrainer" >
<?php 
$tempID= $this->classes[0]["traID"];
foreach ($this->trainerList as $key => $value)
{
    echo "<option value='".$value['traID']."' "; ?><?php if ( $tempID==$value['traID']) echo "selected=\"selected\""; 
    echo "  >".$value['traName']."</option>";
}
?>        
</select><br/>
<label>Status</label><select name='classesStatus'  value="<?php echo $this->classes[0]['classesStatus']; ?>"><option value='active'>Active</option><option value='inactive'>Inactive</option></select>
<br/><br/><label></label> <input type="submit" value="Save"  /> <a href="<?php echo URL; ?>classes"><input type="button" value="Back"></a></form>



