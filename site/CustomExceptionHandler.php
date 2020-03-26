<?php
ini_set('log_errors' , 1);
ini_set('error_log' , dirname(__FILE__) . '/app-error.log');
error_log('SGas');
class UsernameExeption extends Exception{}

class PasswordException extends Exception{}

$username = 'idan';
$password = '';

class CustomExeptionHandler
{
    private $username;
    private $password;
    
    public function __construct(string $username ,string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function isEmpty()
    {
        try {
           if( empty($this->username) ) { 
               throw new UsernameExeption() ;
           }
           if( empty($this->password) ) { 
                 throw new PasswordException() ;
            }
            throw new Exception;
        }catch (UsernameExeption $e) {
            error_log( 'Cought UsernameExeption ' . $e->getMessage());
        }catch (PasswordException $e) {
            error_log( 'Cought PasswordException ' . $e->getMessage());
        }catch (\Throwable $e) {
            error_log( 'Cought Throwable ' . $e->getMessage());
        }
        finally{
            echo ' finally';
        }
    }

}

$ex = new CustomExeptionHandler($username , $password);
$ex->isEmpty();