<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.02.20
 * Time: 13:15
 */

namespace App\Helpers;

class StudentHelper
{
    private $table = "students";
    private $db_connection;

    public function __construct()
    {
        $this->db_connection = new PDO($this->table, 'user', 'user');
    }

    public function createStudent()
    {

    }

    public function readStudent()
    {

    }

    public function updateStudent()
    {

    }

    public function deleteStudent()
    {

    }
}