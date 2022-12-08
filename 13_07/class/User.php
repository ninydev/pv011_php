<?php

class User
{

    public function __construct(
        $name,
        $age,
        $myStatus = "married",
    ){
        echo "Construct : name " . $name . " " . $age . " work";
    }

//    public function __construct($name){
//
//    }


    private $name;
    private $age;




    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }


}