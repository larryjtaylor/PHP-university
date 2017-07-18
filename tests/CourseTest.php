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

    class CourseTest extends PHPUnit_Framework_TestCase
    {
        function testSetCourseName()
        {
            // Arrange
            // $course_name = 'Speak Jive';
            // $enrollment_date = ''
            // $test_course = new Course($course_name);

            // Act

            // Assert

        }

        function testGetCourseName()
        {

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
