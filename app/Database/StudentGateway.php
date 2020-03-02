<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.02.20
 * Time: 13:15
 */

namespace App\Database;

use PDO;

use App\Models\Student;

class StudentHelper
{
    private const connection_string = "mysql:host=192.168.200.79;dbname=1131_vov";
    private const table = "students";
    private $db_connection;
    private $pagination;

    public function __construct()
    {
        $this->db_connection = new PDO($this::connection_string, 'user', 'user');
        $this->pagination = 50;
    }

    public function createStudent(Student $student) // SQL-injection prone
    {

        $query = "INSERT INTO " . $this::table . " (first_name, last_name, sex, group_number, ege_marks, email, birth_year, local) VALUE (" .
            "\"" . $student->getFirstName()   . "\""   . ", " .
            "\"" . $student->getLastName()    . "\""   . ", " .
            "\"" . $student->getSex()         . "\""   . ", " .
            "\"" . $student->getGroupNumber() . "\""   . ", " .
                   $student->getEgeMarks()             . ", " .
            "\"" . $student->getEmail()       . "\""   . ", " .
                   $student->getBirthYear()            . ", " .
                   $student->getLocal()                . "); ";
        return $this->db_connection->exec($query);
    }

    public function readStudents() : array
    {
        $statement = $this->db_connection->query("SELECT * FROM " . $this::table, PDO::FETCH_OBJ);
        return $statement->fetchAll();
    }

    public function readStudent(int $id)
    {
        $statement = $this->db_connection->prepare("SELECT * FROM students WHERE id = :x");
        $statement->bindValue(':x', $id);
        $statement->execute();
        return $statement->fetchAll();
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