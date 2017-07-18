<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    require_once 'src/Course.php';
    require_once 'src/Student.php';

    $server = 'mysql:host=localhost:8889;dbname=university_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class StudentTest extends PHPUnit_Framework_TestCase
    {
        function testSetStudentName()
        {
            // Arrange
            $student_name = 'Mario Batali';
            $enrollment_date = '2017-08-15';
            $test_student = new Student($student_name, $enrollment_date);
            $test_student->save();

            $new_student_name = 'Luigi Batali';

            // Act
            $test_student->setStudentName($new_student_name);
            $result = $test_student->getStudentName();

            // Assert
            $this->assertEquals($new_student_name, $result);
        }

        function testGetStudentName()
        {
            // Arrange
            $student_name = 'Mario Batali';
            $enrollment_date = '2017-08-15';
            $test_student = new Student($student_name, $enrollment_date);
            $test_student->save();

            // Act
            $result = $test_student->getStudentName();

            // Assert
            $this->assertEquals($student_name, $result);
        }

        function testSetEnrollmentDate()
        {
            // Arrange
            $student_name = 'Mario Batali';
            $enrollment_date = '2017-08-15';
            $test_student = new Student($student_name, $enrollment_date);
            $test_student->save();

            $new_enrollment_date = '2018-01-06';

            // Act
            $test_student->setEnrollmentDate($new_enrollment_date);
            $result = $test_student->getEnrollmentDate();

            // Assert
            $this->assertEquals($new_enrollment_date, $result);
        }

        function testGetEnrollmentDate()
        {
            // Arrange
            $student_name = 'Mario Batali';
            $enrollment_date = '2017-08-15';
            $test_student = new Student($student_name, $enrollment_date);
            $test_student->save();

            // Act
            $result = $test_student->getEnrollmentDate();

            // Assert
            $this->assertEquals($enrollment_date, $result);

        }

        function testGetId()
        {

        }

        function testSave()
        {
            // Arrange

        }
    }
?>
