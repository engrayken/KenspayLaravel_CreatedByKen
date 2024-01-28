<?php
namespace App\Repositories\Billings;

use App\Enums\AccountEnums;
use App\Interfaces\Billings\IBillingRepository;
use App\Models\Users\User;

class BillingRepository implements IBillingRepository
{
 public function BalanceCharge(User $user, $monthlyCharge)
{
        $datePayFee=date('Y-m');
        $servicefee = $user->ServiceFee()->where('created_at','like',"%{$datePayFee}%")->first();
        if(!$servicefee && $user->pinEnable=='on')
        {
        $charge = $user->pinBalance - $monthlyCharge;
        $update = $user->update(["pinBalance"=>$charge]);
        if($update){
           $insert = $user->ServiceFee()->create([
            "userName"=>$user->name,
            "feeId"=>time(),
            "amount"=>$monthlyCharge,
            ]);

           $insert = $user->Transaction()->create([
            "userName"=>$user->name,
            "transId"=>time(),
            "network"=>'Monthly Charge',
            "amount"=>$monthlyCharge,
            "deno" =>$monthlyCharge,
            "phone"=>$user->phone,
            "balBefore"=>$user->pinBalance,
            "balAfter"=> $user->pinBalance - $monthlyCharge,
            "status" =>AccountEnums::$activeStatus,
            ]);
            return false;
        }
        }
            return true;

}

}
