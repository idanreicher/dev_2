<?php
error_reporting(E_ALL);
class A
{
    public $x = 10;
    protected $y = 20;
    private $z  = 30;

    public function x()
    {
    return $this->x;
    }

    protected function y()
    {
        return $this->y;
    }

    private function z()
    {
        return $this->z;
    }
}

class B extends A
{
    public function test()
    {
        
        var_dump($this->x);
        var_dump($this->y);
        var_dump($this->z);
        var_dump($this->x());
        var_dump($this->y());
        var_dump($this->z());
        //A::z();

    }
}

//$obj = new B();
//var_dump($obj->a);
////var_dump($obj->y);
////B::$y;
//var_dump($obj->z);
//var_dump($obj->x);
//var_dump($obj->y);
//var_dump($obj->z);

//$obj = new B();
//$obj->test();


class Output 
{
    protected $conntent;

    public function setContent($conntent)
    {
        $this->conntent = $conntent;
    }

    public function render()
    {
        return $this->conntent;
    }
}

class JsonOutput extends Output
{
    public function render()
    {
        return json_encode($this->conntent);
    }
}

class SerializedOutput extends Output
{
    public function render()
    {
        return serialize($this->conntent);
    }
}

$users = [
    'user' => 'john' , 'age1' =>  31,
    'user' => 'johnny' , 'age1' =>  32
];
//$json = new JsonOutput();
//$output = new Output();
//$serialize = new SerializedOutput();
//$output->setContent($users);
//$json->setContent($users);
//$serialize->setContent($users);
//var_dump($output->render()) ; echo "<br>";
//var_dump($json->render())  ; echo "<br>";
//var_dump($serialize->render()) ; echo "<br>";
//

/**
 * pass by referance
 */

 class Util
 {
     public function hello( &$msg )
     {
         $msg = "<p>welcome $msg</p>";
         return $msg;

     }
 }
//
//$str = 'John';
//$obj  = new Util();
//echo $obj->hello($str);
//// rewrote $str value outside the scope of the class
//echo $str;
//
/**
 * when passing an object it like assing by refferance
 */
class User 
{
    public $salary = 402;
}

function bonus(User $u){
    $u->salary = $u->salary + 500;
}

$user = new User();
echo $user->salary ."<br>";

bonus($user);
//// rewrote $str value outside the scope of the class
echo $user->salary;





















