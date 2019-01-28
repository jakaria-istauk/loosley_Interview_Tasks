<?php
require_once './functions.php';
$Student = new Student();
$view_student = $Student->view_student();
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

<table border="1">
	<thead>
        <tr>
            <th>Sl No.</th>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Course Name</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $sl = 1;
        while ($view = mysqli_fetch_assoc($view_student)) {
            ?>
            <tr>
                <td><?php echo $sl++; ?></td>
                <td><?php echo $view['Student_ID']; ?></td>
                <td><?php echo $view['StudentName']; ?></td>
                <td><?php echo $view['CourseName']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>
