<?php

namespace App\CustomClass;

use Illuminate\Http\Request;

use Illuminate\Contracts\Session\Session;
use App\Models\Transaction;
use App\Models\User;

class ProductCheck
{

        private $network;
        private $email;
        private $phone;
        private $amount;
        private $quantity;
        private $transId;

        public function airtime($network,$phone,$amount,$quantity,$transId)
        {
            $this->network=$network;
            $this->phone=$phone;
            $this->amount=$amount;
            $this->quantity=$quantity;
            $this->transId=$transId;

            return $this->checkAll();

        }

        private function checkAll(){


if($this->checkAirtimeEmptyInput()==false)
            {
                return 'Your Input are empty';

            }

            else if($this->verifySanitazeInput()==false)
            {
                return 'Input must be in there respective format';

            }
            else if($this->checklengh()==false)
            {
                return 'Phone Number must not be less or higher than 11';

            }

   else if($this->Trans()==false)
            {
                return 'This Transaction Already Exist, Reload browser and try again';

            }

            else if($this->verUser()==false)
            {
                return 'Email not yet verified, Please <a href="user/AccountVerify"><font color="green"> click here</font></a> to verify your email';

            }

               else if($this->pinEnableUser()==false)
            {
                return 'Pin enable is off, Kindly visit your profile and click Enable Pins';

            }

            else{

                return true;

            }


        }





private function checkAirtimeEmptyInput()
{
if(empty($this->network) || empty($this->phone) || empty($this->amount) || empty($this->quantity) || empty($this->transId))
 {
return false;
// display to user that input are empty

 } else
 {
return true;

 }

}

private function verifySanitazeInput()
{
if(!filter_var($this->network, FILTER_VALIDATE_INT)
 && filter_var($this->phone, FILTER_SANITIZE_NUMBER_INT) && filter_var($this->amount, FILTER_SANITIZE_NUMBER_INT) && filter_var($this->quantity, FILTER_SANITIZE_NUMBER_INT))
 {
return true;

 } else{

    return false;
// display to user that input must be in there respective format

 }

}

private function checklengh()
{
if(strlen((string)$this->phone)<11 || strlen((string)$this->phone)>11) {
return false;

 } else{

    return true;
// display to user that input must be in there respective format

 }
}

 private function Trans()
 {
    $check = Transaction::where('transId',$this->transId)->first();

 if($check) {
 return false;

  } else{

     return true;
 // display to user that input must be in there respective format

  }
 }


  private function verUser()
  {
     $checku = User::where('id',Session()->get('loginid'))->first();

  if($checku->active!=1) {

    return false;

   } else{

      return true;
  // display to user that input must be in there respective format

   }

}

     private function pinEnableUser()
  {

     $checku = User::where('id',Session()->get('loginid'))->first();
    $network= str_replace(['mtn-pin','glo-pin','9mobile-pin','airtel-pin'],['pin','pin','pin','pin'], $this->network);
  if($network=='pin' && $checku->pinEnable!='on') {

    return false;

   } else{

      return true;
  // display to user that input must be in there respective format

   }



}




//DONT PUT ANYTHING BELOW HERE
}

