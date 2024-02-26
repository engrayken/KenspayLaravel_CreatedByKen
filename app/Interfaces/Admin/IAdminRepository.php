<?php
namespace App\Interfaces\Admin;

use App\Models\Users\User;

interface IAdminRepository
{
public function login($request);
public function uprofile($request, User $user);


}
