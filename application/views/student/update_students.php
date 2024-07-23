<h1>Update students</h1>
<FORM method="POST" action="<?php echo site_url('student/do_update_students'); ?>">
<TABLE>
	<TR><TH>Firstname</TH><TH>Lastname</TH><TH>Gender</TH><TH>Grade</TH><TH>Address</TH><TH>Birth Date</TH><TH>Guardian</TH></TR>
	<?php
	foreach ($students as $row) {
		echo '<input type="hidden" name=number[] value="'.$row['number'].'"/>';
		echo '<tr><td><input type="text" name="fname[]" value="';
			echo $row['fname'];
			echo '"/></td>';
		echo '<td><input type="text" name="lname[]" value="';
			echo $row['lname'];
			echo '"/></td>';
		echo '<td><input type="text" name="gender[]" value="';
			echo $row['gender'];
			echo '"/></td>';
		echo '<td><input type="text" name="grade[]" value="';
			echo $row['grade'];
			echo '"/></td>';
		echo '<td><input type="text" name="address[]" value="';
			echo $row['address'];
			echo '"/></td>';
		echo '<td><input type="text" name="birth[]" value="';
			echo $row['birth'];
			echo '"/></td>';
		echo '<td><input type="text" name="parent[]" value="';
			echo $row['parent'];
			echo '"/></td></tr>';
	}
	?>
	<tr><td></td><td><input type="submit" name="btnSave" value="Save"/></td>
</TABLE>