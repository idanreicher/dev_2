<?php

class User
{
    public $name = 'DFas';
    protected $ssn = 'aall-sasa';
    private $salary  = 5646.652;
    private function asdL($name)
    {
        return $name;
    }
}


$user  = new User();
$user->name = 'mark';
//ca change only public members
//$user->ssn = 'yui';
//$user->salary = 654654.546;
var_dump($user);



$reflector = new ReflectionClass($user);
$reflector2 = new ReflectionMethod($user , 'asdL');

foreach($reflector->getProperties() as $prop){
    $prop->setAccessible(true);
    if($prop->getName() == 'name') $prop->setValue($user  , 'idan');
    if($prop->getName() == 'ssn') $prop->setValue($user  , 'kjghgi-jhgjg');
    if($prop->getName() == 'salary') $prop->setValue($user  , 546546.35);
}

var_dump($user);
var_dump($reflector2->getName());