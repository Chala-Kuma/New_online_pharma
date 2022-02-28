<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerEventLog extends Model
{
    use HasFactory;


    protected $guarded=[];

    protected $fillable=[
        'customerid',
        'customer_event_action',
        'customer_event_detail'
    ];

    public function customerInfo(){
        return $this->belongsTo(CustomerInfo::class, 'customerid','customerid');
    }
}
