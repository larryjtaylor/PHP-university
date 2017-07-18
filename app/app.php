<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Course.php';
    require_once __DIR__.'/../src/Student.php';

    $server = 'mysql:host=localhost:8889;dbname=university';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    $app = new Silex\Application();

    use Symfony\Component\HttpFoundation\Request;
    Request::enableHttpMethodParameterOverride();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('index.html.twig', array('students' => Student::getAll()));
    });

    $app->post('/', function() use ($app) {
        $student_name = $_POST['student_name'];
        $enrollment_date = $_POST['enrollment_date'];
        $student = new Student($student_name, $enrollment_date);
        $student->save();

        return $app['twig']->render('index.html.twig', array('students' => Student::getAll());
    });

    return $app;
?>
