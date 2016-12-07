<h1>All Staff</h1>
<table>
<?php
	foreach($this->userList as $key => $value) {
		echo '<tr>';
		echo '<td>' . $value['userid'] . '</td>';
		echo '<td>' . $value['login'] . '</td>';
		echo '<td>' . $value['role'] . '</td>';
		echo '<td>
				<a href="'.URL.'allStaff/edit/'.$value['userid'].'">Edit</a> 
				<a href="'.URL.'allStaff/delete/'.$value['userid'].'">Delete</a></td>';
		echo '</tr>';
	}
?>
</table>
<?php
if ( isset($_GET['success']) && $_GET['success'] == 1 )
{
     echo "<span class='message'>Account successfully updated</span>";
}