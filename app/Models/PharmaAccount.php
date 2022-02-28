<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PharmaAccount extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $fillable =[
        'pharmaid',
        'username',
        'email',
        'password',
        'remember_token',
        'pharma_last_login',
        'pharma_last_logout'
    ];

    protected $hidden =[
        'password',
        'remember_token'
    ];

    public function pharmaInfo(){
        return $this->belongsTo(PharmaInfo::class, 'pharmaid','pharmaid');
    }
}
