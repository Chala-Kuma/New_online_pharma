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
        'password',
        'remember_token',
        'admin_last_login',
        'admin_last_logout'
    ];

    protected $hidden=[
        'password',
        'remember_token'
    ];

    public function adminEventLog(){
        return $this->hasMany(AdminEventLog::class, 'adminid','adminid');
    }

    public function pharmaInfo(){
        return $this->hasMany(PharmaInfo::class, 'adminid','adminid');
    }
}
