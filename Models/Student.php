<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.02.20
 * Time: 12:48
 */

namespace App\Models;


class Student
{
    private $first_name;
    private $last_name;
    private $sex;
    private $group_number;
    private $ege_marks;
    private $email;
    private $birth_year;
    private $local;

    /**
     * @return string
     */

    public function getFirstName() : string
    {
        return $this->first_name;
    }

    /**
     * @return string
     */
    public function getLastName() : string
    {
        return $this->last_name;
    }

    /**
     * @return string
     */
    public function getSex() : string
    {
        return $this->sex;
    }

    /**
     * @return string
     */
    public function getGroupNumber() : string
    {
        return $this->group_number;
    }

    /**
     * @return integer
     */
    public function getEgeMarks() : int
    {
        return $this->ege_marks;
    }

    /**
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }

    /**
     * @return integer
     */
    public function getBirthYear() : int
    {
        return $this->birth_year;
    }

    /**
     * @return boolean
     */
    public function getLocal() : bool
    {
        return $this->local;
    }

    /**
     * @param string $first_name
     */
    public function setFirstName(string $first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @param string $last_name
     */
    public function setLastName(string $last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @param srting $sex
     */
    public function setSex(string $sex)
    {
        $this->sex = $sex;
    }

    /**
     * @param string $group_number
     */
    public function setGroupNumber(string $group_number)
    {
        $this->group_number = $group_number;
    }

    /**
     * @param int $ege_marks
     */
    public function setEgeMarks(int $ege_marks)
    {
        $this->ege_marks = $ege_marks;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
}