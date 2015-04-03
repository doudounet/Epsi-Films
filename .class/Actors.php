<?php
/**
 * Created by PhpStorm.
 * User: Florian
 * Date: 02/04/2015
 * Time: 14:36
 */

class Actors {

    public $_id;
    public $_first_name;
    public $_last_name;
    public $_gender;

    function __construct($_id, $_first_name, $_last_name, $_gender)
    {
        $this->_id = $_id;
        $this->_first_name = $_first_name;
        $this->_last_name = $_last_name;
        $this->_gender = $_gender;
    }



    public function getId()
    {
        return $this->_id;
    }


    public function setId($id)
    {

        if (is_string($id))
        {
            $this->_id = $id;
        }
    }


    public function getFirstName()
    {
        return $this->_first_name;
    }


    public function setFirstName($first_name)
    {
        if (is_string($first_name))
        {
            $this->_first_name = $first_name;
        }

    }


    public function getLastName()
    {
        return $this->_last_name;
    }


    public function setLastName($last_name)
    {
        if (is_string($last_name))
        {
            $this->_last_name = $last_name;
        }

    }


    public function getGender()
    {

        return $this->_gender;
    }

    public function setGender($gender)
    {
        if (is_string($gender))
        {
            $this->_gender = $gender;
        }

    }



}