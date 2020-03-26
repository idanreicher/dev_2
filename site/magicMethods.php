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