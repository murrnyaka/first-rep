<?php
require_once "MagicClass.php";

$a = new MagicClass();

function a(){
    return "Метод объекта";
}

$a->a();

$a->name;

$a->name = "Привет";

isset($a->name);

$a();

//var_dump($a);

serialize($a);

$array = ['a'];
serialize($array[0]);
unserialize($array[0]);

$b = clone $a;
echo '$a';
?>
