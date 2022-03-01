<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerInfoDrugInfoPharmaInfo extends Model
{
    use HasFactory;

    protected $primarykey='cudrph_id';

    protected $fillable=[
        'customerid',
        'drugid',
        'pharmaid'
    ];
}
