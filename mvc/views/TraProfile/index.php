<h1>  Profile - Trainer</h1>

<table class="left">
<?php

foreach($this->trainerList as $key => $value) {
		echo '<tr>';
                echo '<td>Name</td>';
		echo '<td>' . $value['traName'] . '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>I/C</td>';
		echo '<td>' . $value['traIC'] . '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>License</td>';
		echo '<td>' . $value['intructorLicense'] . '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>Address</td>';
                echo '<td>' . $value['traAddress'] . '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>Contact</td>';
                echo '<td>' . $value['traContactNo'] . '</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td>Email</td>';
                echo '<td>' . $value['traEmail'] . '</td>';
                echo '<tr>';
		echo '<td colspan="2" class="right">
				<a href="'.URL.'TraProfile/edit/'.$value['traID'].'">Edit</a>';
		echo '</tr>';
	}
  
?>
</table>

<table>
<?php

foreach($this->changePassword as $key => $value) {
                echo '<tr>';
		echo '<td>
				<a href="'.URL.'TraProfile/changePassword/'.$value['userid'].'">Change Password</a>';
		echo '</tr>';
}
?>
</table>
