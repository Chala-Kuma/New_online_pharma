<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrugInfoPharmaInfo extends Model
{
    use HasFactory;

    protected $primarykey ='drph_id';

    protected $fillable=[
        'drugid',
        'pharmaid'
    ];
}
