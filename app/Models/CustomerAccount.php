<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAccount extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $fillable=[
        'customerid',
        'username',
        'password',
        'email',
        'remember_token',
        'customer_last_login',
        'customer_last_logout'
    ];

    protected $hidden=[
        'password',
        'remember_token'
    ];

    public function customerInfo(){
        return $this->belongsTo(CustomerInfo::class, 'customerid','customerid');
    }
}
