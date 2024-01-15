<?php
namespace App\Interfaces\Auth;

interface IAuthRepository
{
public function signUp($data);
public function login($data);

}
