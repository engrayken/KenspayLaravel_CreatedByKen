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
        'dataBalance',
        'pinBalance',
        'bName',
        'nin',
        'bvn',
        'status',
        'website',
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
        return $this->hasMany(ServiceFee::class, "userId");
    }
        public function Transaction(){
        return $this->hasMany(Transaction::class, "userId");
    }
        public function Mypin(){
        return $this->hasMany(Mypin::class, "userId");
    }
        public function PhoneBook(){
        return $this->hasMany(PhoneBook::class, "userId");
    }
}
