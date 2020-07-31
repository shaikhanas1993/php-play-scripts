<?php 
class Person {
    public $name;

    function __construct($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }

    function set_name($name){
        $this->name = $name;
    }
}


?>