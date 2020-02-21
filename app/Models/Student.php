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
    private $id;
    private $first_name;
    private $last_name;
    private $sex;
    private $group_number;
    private $ege_marks;
    private $email;
    private $birth_year;
    private $local;

    public function __construct ()
    {
    }

    /**
     * @return int
     */

    public function getId (): int
    {
        return $this->id;
    }

    /**
     * @return string
     */

    public function getFirstName (): string
    {
        return $this->first_name;
    }

    /**
     * @return string
     */
    public function getLastName (): string
    {
        return $this->last_name;
    }

    /**
     * @return string
     */
    public function getSex (): string
    {
        return $this->sex;
    }

    /**
     * @return string
     */
    public function getGroupNumber (): string
    {
        return $this->group_number;
    }

    /**
     * @return integer
     */
    public function getEgeMarks (): int
    {
        return $this->ege_marks;
    }

    /**
     * @return string
     */
    public function getEmail (): string
    {
        return $this->email;
    }

    /**
     * @return integer
     */
    public function getBirthYear (): int
    {
        return $this->birth_year;
    }

    /**
     * @return boolean
     */
    public function getLocal (): bool
    {
        return $this->local;
    }

    /**
     * @param int $id
     */

    public function setId ( int $id )
    {
        $this->id = $id;
    }

    /**
     * @param string $first_name
     */
    public function setFirstName ( string $first_name )
    {
        $this->first_name = $first_name;
    }

    /**
     * @param string $last_name
     */
    public function setLastName ( string $last_name )
    {
        $this->last_name = $last_name;
    }

    /**
     * @param string $sex
     */
    public function setSex ( string $sex )
    {
        $this->sex = $sex;
    }

    /**
     * @param string $group_number
     */
    public function setGroupNumber ( string $group_number )
    {
        $this->group_number = $group_number;
    }

    /**
     * @param int $ege_marks
     */
    public function setEgeMarks ( int $ege_marks )
    {
        $this->ege_marks = $ege_marks;
    }

    /**
     * @param string $email
     */
    public function setEmail ( string $email )
    {
        $this->email = $email;
    }

    /**
     * @param integer $birth_year
     */
    public function setBirthYear ( int $birth_year ): void
    {
        $this->birth_year = $birth_year;
    }

    /**
     * @param bool $local
     */
    public function setLocal ( bool $local ): void
    {
        $this->local = $local;
    }
}