<?php
    class Student
    {
        private $student_name;
        private $enrollment_date;
        private $id;

        function __construct($student_name, $enrollment_date, $id = null)
        {
            $this->student_name = $student_name;
            $this->enrollment_date = $enrollment_date;
            $this->id = $id;
        }

        function setStudentName($new_student_name)
        {
            $this->student_name = (string) $new_student_name;
        }

        function getStudentName()
        {
            return $this->student_name;
        }

        function setEnrollmentDate($new_enrollment_date)
        {
            $this->enrollment_date = $new_enrollment_date;
        }

        function getEnrollmentDate()
        {
            return $this->enrollment_date;
        }

        function getId()
        {
            // return $this->id;
        }

        function save()
        {
            // $executed = $GLOBALS['DB']->exec("INSERT INTO students (student_name) VALUES ('{$this->getStudentName()}')");
            // if ($executed) {
            //      $this->id= $GLOBALS['DB']->lastInsertId();
            //      return true;
            // } else {
            //      return false;
            // }
        }
    }

?>
