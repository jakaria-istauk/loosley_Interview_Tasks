<?php

class Student {
    protected $connection;

    public function __construct() {
        $host_name = 'localhost';
        $user_name = 'root';
        $password = '';
        $db_name = 'studentdb';
        $this->connection = mysqli_connect($host_name, $user_name, $password, $db_name);

        if (!$this->connection) {
            die('Connection Fail' . mysqli_error($this->connection));
        }
    }
    
    public function add_student($data){
        $sql = "INSERT INTO studentinfo (StudentName) "
                . "VALUES('$data[name]')";

        if (mysqli_query($this->connection, $sql)) {
            $message = "Student info Saved Successfully";
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->connection));
        }
    }

     public function add_course($data){
        $sql = "INSERT INTO courses (Course_ID, CourseName) "
                . "VALUES('$data[c_ID]', '$data[c_name]')";

        if (mysqli_query($this->connection, $sql)) {
            $message = "Course info Saved Successfully";
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->connection));
        }
    }

    public function add_marks($data){
        $sql = "INSERT INTO marks ( student_ID, Course_ID,  Marks) "
                . "VALUES('$data[s_ID]', '$data[c_ID]', '$data[marks]')";

        if (mysqli_query($this->connection, $sql)) {
            $message = "Mark Saved Successfully";
            return $message;
        } else {
            die('Query problem' . mysqli_error($this->connection));
        }
    }

    public function view_student() {
        $sql = "SELECT * FROM studentinfo INNER JOIN marks ON studentinfo.Student_ID =marks.student_ID INNER JOIN courses ON marks.Course_ID=courses.Course_ID WHERE marks.Marks >= 10";

        if (mysqli_query($this->connection, $sql)) {
            $query_result = mysqli_query($this->connection, $sql);
            return $query_result;
        } else {
            die('Query problem' . mysqli_error($this->connection));
        }
    }
    
}
