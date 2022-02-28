<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminEventLog extends Model
{
    use HasFactory;

    protected $guarded =[];

    //defining fillable properties of addmineventlog
    protected $fillable=[
        'adminid',
        'admin_event_action',
        'admin_event_detail'
    ];

    //defining eloquent relationship between admin and admineventlog
    public function admin(){
        return $this->belongsTo(Admin::class,'adminid','adminid');
    }
}
