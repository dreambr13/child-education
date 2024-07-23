<h1>Add new Student</h1>
<FORM action="<?php echo site_url('student/add_students'); ?>" method="POST">
<TABLE>
	<TR><TD>Firstname</TD><TD><input type="text" name="fname" placeholder="Student's first name" required="" /></TD></TR>
	<TR><TD>Lastname</TD><TD><input type="text" name="lname" placeholder="Student's last name" required="" /></TD></TR>
	<TR><TD>Gender</TD><TD><input type="text" name="gender" placeholder="M / F" required="" /></TD></TR>
	<TR><TD>Grade</TD><TD><input type="text" name="grade" placeholder="Which grade?" required="" /></TD></TR>
	<TR><TD>Address</TD><TD><input type="text" name="address" placeholder="Student's address" required="" /></TD></TR>
	<TR><TD>Date of Birth</TD><TD><input type="text" name="birth" placeholder="2009-01-01" required="" /></TD></TR>
	<TR><TD>Parent Name</TD><TD><input typexe="text" name="parent" placeholder="Student's guardian" required="" /></TD></TR>
	<TR><TD></TD><TD><input type="submit" name="btnSave" value="Save"/></TD></TR>
</TABLE>
</FORM>

<?php
if (isset($test)) {
	if ($test)
		echo '<script language="javascript">alert("Data inserted successfully!")</script>';

	else 
		echo '<script language="javascript">alert("Oops! Something went wrong!")</script>';
}	
?>