<?php

require_once "class/User.php";

$u = new User(
    name: "In Cost",
    age: 50
);
$u->setName("Vasya");

echo $u->getName();



//User u;
//u.setName('C++');
//
//User* u = new User();
//u->setName('C++');


