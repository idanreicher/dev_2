<?php

/**
 * __construct()
 */

class UserConstruct
{
    protected $name;
    public /*final*/ function __construct($name)
    {
        $this->name = $name;
        var_dump('__constract UserConstruct Class' ,$this->name );
    }
}

class Director extends UserConstruct
{

}

class Emploee extends UserConstruct    
{
    public function __construct($name)
    {
        $this->name = $name;
        var_dump('__constract Emoloee Class' ,$this->name );
    }
}
/** 
new User('User');
new Director('Director');
new Emploee('Emploee');
*/

/**
 * __destruct()
 */

class Userdestruct
{
    public /*final*/ function __destruct()
    {
        var_dump('__destract Userdestruct Class' . "<br>"  );
    }
}
/** 
echo "a" . "<br>";
new Userdestruct();
echo "b" . "<br>";

echo "a" . "<br>";
$userd = new Userdestruct();
echo "b" . "<br>";
unset($userd);
echo "c" . "<br>";

echo "a" . "<br>";
$userd = new Userdestruct();
echo "b" . "<br>";
exit;
echo "c" . "<br>";
*/

/**
 * _call()
 */

class UserCall 
{
    public function __call($name , $arguments)
    {
        echo "__call ". $name . ': ' . implode(', ' , $arguments) . PHP_EOL;
    }

    public static function __callStatic($name , $arguments)
    {
        echo "__callStatic " . $name . ': ' . implode(', ' , $arguments) . PHP_EOL;
    }


    public function bonus($amount)
    {
        echo 'bonus: '. $amount .PHP_EOL;
    }
}
/**
echo "__call()";
echo "<hr>";
$user = new UserCall();
$user->hello('fdS' , 25);
$user->bonus(456.654);
$user->salary(6546.36);
echo "<hr>";

echo "__callStatic";
echo "<hr>";
$user::hello('fdS' , 25);
$user::bonus(456.654);
$user::salary(6546.36);
 */
/**
 * __set()
 */

class UserSetGet
{
    private $data = [
        'name' => 'kjhkdf',
        'age' => 'kjhkdf',
        'salary' => 'kjhkdf'
    ];

    private $name;
    protected $age;
    public $salary;

    public function __set($name , $value)
    {
        $this-> data[$name] = $value;
    }

    public function __isset($name)
    {
        $isset = array_key_exists($name , $this->data) ? true : false;
    }

    public function __unset($name)
    {
        unset($this->data[$name]);
    }

    public function __get($name)
    {
        if (array_key_exists($name , $this->data)) {
            echo '__get => ' . $name . ': ' . $this->data[$name] . PHP_EOL ;
        }else{
            trigger_error('Undefined Arg:' . $name , E_USER_NOTICE);
        }
    }
}

/**
$userSet = new UserSetGet();
$userSet->name = 'john';
$userSet->age = 34;
$userSet->salary = 4200.00;
$userSet->message = 'hello';

var_dump($userSet);


 $userGet = new UserSetGet();
var_dump(isset($userGet->salary));
$userGet->salary = 222;
 echo $userGet->name . PHP_EOL;
 echo $userGet->age . PHP_EOL;
 echo $userGet->salary . PHP_EOL;
 echo $userGet->message . PHP_EOL;
 var_dump(isset($userGet->salary));
 echo "<hr>";

 $userUnset = new UserSetGet();
 
 echo 'BEFORE : ' . var_dump( $userUnset);echo "<hr>";
 unset($userUnset->age);
 unset($userUnset->name);
 unset($userUnset->salary);
 echo "<hr>";
 echo 'AFTER : ' . var_dump( $userUnset);
  */

  class UserSleep
  {
      public $nam = 'dfas';
      private $age = 14;
      protected $salary = 42005283.36;
  }