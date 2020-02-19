<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.02.20
 * Time: 13:15
 */

namespace App\Helpers;

use App\Models\Student;

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

    public function readStudents()
    {
        return $this->db_connection->query("SELECT * FROM students");
    }

    public function readStudent(int $id)
    {
        $statement = $this->db_connection->prepare("SELECT * FROM students WHERE id = :x");
        $statement->bindValue(':x', $id);
        $statement->execute();
    }

    public function updateStudent(Student $student)
    {
        $this->db_connection->query("UPDATE TABLE students SET "); //SQL-injection prone
    }

    public function deleteStudent(int $id)
    {
        $this->db_connection->query("DELETE FROM students WHERE id = $id"); // SQL-injection prone
    }
}