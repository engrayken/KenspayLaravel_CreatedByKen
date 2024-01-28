<?php
namespace App\Interfaces\Billings;

use App\Models\Users\User;

interface IBillingRepository
{
 function BalanceCharge(User $user, $monthlyCharge);

}
