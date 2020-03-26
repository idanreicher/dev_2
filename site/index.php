<?php
//error_reporting(E_ALL);
/*
declare(strict_types = 1);

function register(string $emai , int $age , bool $notify):bool{
    return true;
}
register('user@email.com' , 33 , true);

class A{};
class B extends A{};
class C extends B{};

function getInstance(string $type):A{
    if ($type == 'A') {
        return new A();...
    }elseif($type == 'B'){
        return new B();
    }else{
        return new C();
    }
}

$obj = new class(){};
$obj2 = new class($a , $b){
    private $a;
    private $b;
    public function __costruct($a , $b){
        $this->a = $a;
        $this->b = $b;
    }
};

interface Salary{
    public function pay();
}
trait Util{
    public function format(float $number){
        return number_format($number , 2);
    }
}
class User{
    private $IBAN;
    protected $salary;
    public function __construct($IBAN , $salary){
        $this->ISBAN = $IBAN;
        $this->salary = $salary;
    }

    function salary(){
        
        return new class($this->ISBAN , $this->salary) implements Salary{
            use Util;
            private $_ISBAN;
            protected $_salary;
            
            public function __constract($_ISBAN , $_salary){
                $this->_ISBAN = $_ISBAN;
                $this->_salary = $_salary;

            }
            public function pay(){
                echo $this->_ISBAN . ' ' . $this->_salary;
            }
        };
    }
}   

$user = new User('d9876sf9fijyfas987' , 4500.00);
var_dump ($user->salary()->pay());

function even(){
    for($i=1 ; $i <=10 ; $i++){
        if ($i % 2 == 0){
            yield $i;
        }
    }
}

function odd(){
    for($i = 1; $i <= 10 ; $i++){
        if ($i % 2 != 0) {
            yield $i;
            # code...
        }
    }
}

function mix(){
    yield -1;
    yield from odd();
    yield 17;
    yield from even();
    yield 33;
}

foreach(odd() as $odd){
    echo $odd;
}

foreach (even() as $even) {
    echo $even;
}

foreach (mix() as $mix) {
    echo $mix;
    # code...
}

$letters = (function (){
    yield 'A';
    yield 'B';
    return 'C';
})();
var_dump($letters);
foreach ($letters as $letter) {
    echo $letter;
    
}

echo $letters->getReturn();


$name = $_GET["name"] ?? 'N/A';
var_dump($name);


$users = [1,2,1,1];
usort($users, function($a, $b){
    return ($a < $b) ? -1 : (($a > $b) ? 1 : 0);
});
echo "<br>";
usort($users , function($a , $b){
    echo $a."///  ".$b;
    echo $a<=>$b  ;
    echo "<br>";
});


class Rift{
    const APP = [
        'name' => 'Rift',
        'edision' => 'Community',
        'version' => '2.1.2',
        'licence' => 'OSL'   
    ];
}

interface IRift{
    const APP = [
        'name' => 'Rift',
        'edision' => 'Community',
        'version' => '2.1.2',
        'licence' => 'OSL'   
    ];
}

define('APP' ,  [
    'name' => 'Rift',
    'edision' => 'Community',
    'version' => '2.1.2',
    'licence' => 'OSL'   
    ]);
echo Rift::APP['version'];
echo IRift::APP['version'];
echo APP['version'];

try {
    $x = intdiv(6 , 0);
} catch (\Throwable $e) {
    echo 'dhgsd : ' . $e->getMessage();
}
*/
try {
    assert('kghg' === 'fdga' );
} catch (\Throwable $e) {
    echo 'Cought : ' . $e->getMessage();
}














































