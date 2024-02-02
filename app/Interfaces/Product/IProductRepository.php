<?php
namespace App\Interfaces\Product;

use App\Models\Users\User;

interface IProductRepository
{
    public function pay($Request, User $user);


}
