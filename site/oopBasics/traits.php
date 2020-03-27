<?php

trait Formatter
{
    public function formatPrice($price)
    {
        return sprintf('%.2F' , $price);
        //traits have access to $this of the class uses it if all the clases use it has the memmber
        return sprintf('%.2F' , $this->price);
    }
}

class Ups 
{
    use Formatter;

    private $price = 4.45454;

    public function getShippingPrice($formatted = false)
    {
        if ($formatted) {
            return $this->formatPrice($this->price);    
        }
        
        return $this->price;
    }
}    

class Dhl
{
    use Formatter;
    private $price = 9.45454;

    public function getShippingPrice($formatted = false)
    {
        if ($formatted) {
            return $this->formatPrice($this->price);    
        }
        
        return $this->price;
    }
}

//$ups = new Ups();
//echo $ups->getShippingPrice(true);
//
//$dhl = new Dhl();
//echo $dhl->getShippingPrice(true);

trait CsvHandler
{
    public function import()
    {
        echo 'CsvHandler > import';
    }

    public function export()
    {
        echo 'CsvHandler > export';
    }
}

trait XmlHandler
{
    public function import()
    {
        echo 'XmlHandler > import';
    }

    public function export()
    {
        echo 'XmlHandler > export';
    }
}

class SalesOrder
{
    use CsvHandler , XmlHandler{
        XmlHandler::import insteadof CsvHandler;
        CsvHandler::export insteadof XmlHandler;
        XmlHandler::export as exp;
    }

    public function initImport()
    {
        $this->import();
    }

    public function initExport()
    {
        $this->export();
        $this->exp();
    }
}

//$order = new SalesOrder();
//$order->initImport();
//$order->initExport();

trait Message
{
    private function hello()
    {
        return 'Hello';
    }
}

class User{
    use Message{
         Message::hello as public;
    }
}

$user = new User();
echo $user->hello();

trait A
{
    public static $counter = 0;

    public function theA()
    {
        return self::$counter;
    }
}

trait B
{
    use A;

    abstract public function theB();
}
class C
{
    use B;

    public function theB()
    {
        return self::$counter;
    }

}

//$c = new C();
// $c::$counter++;
// echo $c->theA();
// C::$counter++;
// echo $c->theB();

