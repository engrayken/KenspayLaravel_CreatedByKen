<?php

namespace App\CustomClass;

use Illuminate\Http\Request;

class Authcheck
{
    // for question update
        private $type;
        private $name;
        private $email;
        private $phone;
        private $password;

// private function check()
// {
// if($this->sanitize()==true && $this->empty()==true){
//     return true;
// } else{

//     return false;
// }

// }


public function profilecheck($name,$address,$state)
{
    $this->name=$name;

   //return $ddd=$this->pempty();
    if($this->pempty()==true){

        return true;

    } else{
        return false;

    }

}

// public function isloginCheck()
// {
//     if(!Session()->get('loginid')){

//         return  redirect('login')->with('failed','You Must Login First');

//     }


// }


public function loginCheck($email,$password)
{
    $this->email=$email;
    $this->password=$password;

return $this->logCompare();

}

private function logEmptyInput()
{
    if(empty($this->email) || empty($this->password)){
        return false;
    } else
    {

        return true;
    }
}

    private function logSanInput()
{
    if(filter_var($this->email, FILTER_VALIDATE_EMAIL)){
        return true;
    } else
    {

        return false;
    }
}

    private function logCompare()
    {
        if($this->logSanInput()==true && $this->logemptyinput()==true){
            return true;
        } else
        {

            return false;
        }
    }



public function regCheck($name,$email,$phone,$password)
{
    $this->name=$name;
    $this->email=$email;
    $this->phone=$phone;
    $this->password=$password;
    // $this->auth=$authCode;

     if($this->regVerifySanitazeInput()==true && $this->regCheckEmptyInput()==true)
     {
            return true;
     } else{
        return false;
     }

}

private function regCheckEmptyInput()
{
if(empty($this->name) || empty($this->email) || empty($this->phone) || empty($this->password))
 {
return false;

 } else{

    return true;
 }

}

private function regVerifySanitazeInput()
{
if(!filter_var($this->name, FILTER_VALIDATE_INT) && filter_var($this->email, FILTER_VALIDATE_EMAIL)
 && filter_var($this->phone, FILTER_SANITIZE_NUMBER_INT))
 {
return true;

 } else{

    return false;
 }

}




//DONT PUT ANYTHING BELOW HERE
}

