<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.02.20
 * Time: 11:12
 */

// Test index script
require_once 'vendor/autoload.php';

use App\Database\StudentHelper;
use App\Models\Student;

$db = new StudentHelper();
echo "New class was created";
$stud = new Student();
$stud->setFirstName("A");
$stud->setLastName("B");
$stud->setSex("м");
$stud->setGroupNumber("12345");
$stud->setEgeMarks(200);
$stud->setBirthYear(2019);
$stud->setEmail("hither8841@gimler.moe");
$stud->setLocal(true);
echo $db->createStudent($stud);
foreach ($db->readStudents() as $item)
{
    echo "<pre>";
    print_r($item);
    echo "</pre>";
}