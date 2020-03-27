<?php

$user = [
    'name' => 'John',
    'age' => 34,
    'salary' => 4564.00
];

foreach($user as $key => $val){
    echo "key : $key , val : $val <br>";
}

class User
{
    public $name =  'John';
    public $age =  32;
    public $salary =  452.00;
    protected $a = 'kjh';
    private $b = 'kjhagasdg';

}

$user = new User();
// only public
foreach ($user as $key => $val){
    echo "key : $key , val : $val <br>";
}


class UserI /*implements \Iterator*/
{
    public $name =  'John';
    public $age =  32;
    protected $salary =  452.00;
    private $info = [];

    public function __construct()
    {
        $this->info = [
            'name' => $this->name,
            'age' => $this->age,
            'salary' => $this->salary
        ];
        
    }

    public function current()
        {
            return current($this->info);
        }
    
        public function next()
        {
            return  next($this->info);
        }

        public function key()
        {
            return key($this->info);
        }

        public function valid()
        {
            $key = key($this->info);
            return ($key !== null && $key !== false);
        }
        
        public function reset()
        {
            return reset($this->info);
        }
    
}
$user = new UserI();
foreach($user as $key => $val){
    echo "key : $key , val : $val <br>";
}
echo "<hr>";
/**
 * comparision
 */

 class UserBase
 {
    public $name =  'N.A';
    public $age =  0;
 }

 $userbase = new UserBase();
 $emplee = new UserBase();
 $emplee2 = $emplee;
 var_dump($userbase == $emplee);
 var_dump($userbase === $emplee);
 var_dump($emplee === $emplee2);

 