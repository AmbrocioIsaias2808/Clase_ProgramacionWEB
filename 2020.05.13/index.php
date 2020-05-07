<?php
require_once ("person.php");
require_once ("student.php");

$esmeralda = new Person('Esmeralda', 'Laureano', '2020-03-11');
$luis = new Student('Luis', 'Laureano', '2020-03-11', '2222222223');

echo $luis->__toString().'<br>';
echo $esmeralda->__toString().'<br>';