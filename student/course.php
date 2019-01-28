<?php
require_once './functions.php';
$Student = new Student();
$message = '';
$id = '';
if (isset($_POST['add'])) {
    $message = $Student->add_course($_POST);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<ul>
	<li><a href="index.php">Add Student</a></li>
	<li><a href="course.php">Add Course</a></li>
	<li><a href="markes.php">Add Marks</a></li>
	<li><a href="passStudents.php">Student who pass</a></li>
</ul>
<form action="" method="POST">
	<table>
		<tr>
			<td>Course ID:</td>
			<td><input type="text" name="c_ID" required></td>
		</tr>
		<tr>
			<td>Course Name:</td>
			<td><input type="text" name="c_name" required></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="add"></td>
		</tr>
	</table>
</form>
</body>
</html>