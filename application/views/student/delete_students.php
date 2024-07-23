<h1>Delete students</h1>
<TABLE BORDER="1">
	<TR><TH>Student Number</TH><TH>First name</TH><TH>Last name</TH><TH>Gender</TH><TH>Grade</TH><TH>Address</TH><TH>Birth date</TH><TH>Guardian</TH><TH>Delete</TH></TR>
	<?php
	foreach ($students as $row) {
		echo '<tr><td>'.$row['number'].'</td>';
		echo '<td>'.$row['fname'].'</td>';
		echo '<td>'.$row['lname'].'</td>';
		echo '<td>'.$row['gender'].'</td>';
		echo '<td>'.$row['grade'].'</td>';
		echo '<td>'.$row['address'].'</td>';
		echo '<td>'.$row['birth'].'</td>';
		echo '<td>'.$row['parent'].'</td>';
		echo '<td>';
		echo '<a href="'.site_url('student/remove_student').'/'.
		$row['number'].'"><button>Delete</button></a>';
		echo '</td></tr>';
	}
	?>
</TABLE>