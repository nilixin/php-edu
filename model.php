<?php

abstract class Model
{
    public abstract function construct($login, $email, $password);
    public abstract function constructWithId($id, $login, $email, $password);

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }
    public abstract function __set($property, $value);

    public abstract function get($where);

    public abstract function add();
    public abstract function edit();
}

?>