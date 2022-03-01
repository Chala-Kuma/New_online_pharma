<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerInfo extends Model
{
    use HasFactory;

    //defining primarykey of customer info
    protected $primarykey='customerid';

    protected $guarded=[];

    //defining fillable properties of customer info
    protected $filllable=[
        'first_name',
        'Middle_name',
        'last_name',
        'location',
        'age',
        'sex',
        'phone'
    ];

    public function customerAccount(){
        return $this->hasOne(CustomerAccount::class, 'customerid','customerid');
    }
    public function customerEventLog(){
        return $this->hasMany(CustomerEventLog::class, 'customerid','customerid');
    }
}
