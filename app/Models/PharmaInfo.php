<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PharmaInfo extends Model
{
    use HasFactory;

    protected $primarykey ='pharmaid';

    protected $guarded=[];

    protected $fillable = [
        'adminid',
        'name',
        'location',
        'phone'
    ];

    public function pharmaAccount(){
        return $this->hasOne(PharmaAccount::class, 'pharmaid','pharmaid');
    }

    public function admin(){
        return $this->belongsTo(Admin::class, 'adminid','adminid');
    }

    public function pharmaEventLog(){
        return $this->hasMany(PharmaEventLog::class, 'pharmaid','pharmaid');
    }
}
