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
    private const table = "students";
    private $db_connection;
    private $pagination;

    public function __construct()
    {
        $this->db_connection = new \PDO($this::table, 'user', 'user');
        $this->pagination = 10;
    }

    public function createStudent()
    {
        $this->db_connection->query("INSERT INTO TABLE students VALUE");
    }

    public function readStudent(int $id)
    {
        //$this->db_connection->query("SELECT * FROM students WHERE id = :x"); // SQL-injection prone
    }

    public function updateStudent()
    {

    }

    public function deleteStudent()
    {

    }
}