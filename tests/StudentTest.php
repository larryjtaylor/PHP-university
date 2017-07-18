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
        protected function tearDown()
        {
            Student::deleteAll();
        }

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
            // Arrange
            $student_name = 'Mario Batali';
            $enrollment_date = '2017-08-15';
            $test_student = new Student($student_name, $enrollment_date);
            $test_student->save();

            // Act
            $result = $test_student->getId();

            // Assert
            $this->assertEquals(true, is_numeric($result));
        }

        function testSave()
        {
            // Arrange
            $student_name = 'Mario Batali';
            $enrollment_date = '2017-08-15';
            $test_student = new Student($student_name, $enrollment_date);

            // Act
            $executed = $test_student->save();

            // Assert
            $this->assertTrue($executed, "This student has not been saved to the database.");
        }

        function testGetAll()
        {
            // Arrange
            $student_name = 'Mario Batali';
            $enrollment_date = '2017-08-15';
            $test_student = new Student($student_name, $enrollment_date);
            $test_student->save();

            $student_name_2 = 'Susan Feniger';
            $enrollment_date_2 = '2017-10-22';
            $test_student_2 = new Student($student_name, $enrollment_date);
            $test_student_2->save();

            // Act
            $result = Student::getAll();

            // Assert
            $this->assertEquals([$test_student, $test_student_2], $result);
        }

        function testDeleteAll()
        {
            // Arrange
            $student_name = "Shawn Hunter";
            $enrollment_date = "2015-09-13";
            $test_student = new Student ($student_name, $enrollment_date);
            $test_student->save();

            $student_name2 = "Corey Matthews";
            $enrollment_date2 = "2015-09-14";
            $test_student2 = new Student ($student_name2, $enrollment_date2);
            $test_student2->save();

            // Act
            Student::deleteAll();
            $result = Student::getAll();

            // Assert
            $this->assertEquals([], $result);
        }
    }
?>
