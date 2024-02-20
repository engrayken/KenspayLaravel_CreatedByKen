<?php
namespace App\Interfaces\Billings;

use App\Models\Users\User;

interface IBillingRepository
{
 function BalanceCharge(User $user, $monthlyCharge);
 function paysInit(User $user, $request);
 function fundv(User $user, $id, $check);

}
