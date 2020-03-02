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

$db = new StudentHelper();

foreach ($db->readStudents() as $item)
{
    echo "<pre>";
    print_r($item);
    echo "</pre>";
}