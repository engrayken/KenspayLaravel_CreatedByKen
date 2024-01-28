<?php
namespace App\Interfaces\User;

use App\Models\Users\User;

interface IUserRepository
{
public function PhoneBook(User $user, $data);

}
