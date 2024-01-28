<?php

namespace App\Models\Users;

use App\Models\Site\ServiceFee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public $incrementing = false;

        protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'status',
        'password',
        'reference'
    ];

        protected $hidden = [
        'password',
        // 'remember_token',
        // "accessToken",
        // "accessUserid",
        "status"
    ];

        public function ServiceFee(){
        return $this->hasMany(ServiceFee::class, "userid");
    }
        public function Transaction(){
        return $this->hasMany(Transaction::class, "userid");
    }
        public function PhoneBook(){
        return $this->hasMany(PhoneBook::class, "userid");
    }
}
