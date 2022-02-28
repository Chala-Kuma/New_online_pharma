<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    //defining primarykey of admin
    protected $primarykey ='adminid';

    protected $guarded =[];

    // defining fillable properties of admin
    protected $fillable =[
        'username',
        'email',
        'phone',
        'password'
    ];

}
