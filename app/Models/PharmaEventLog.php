<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PharmaEventLog extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $fillable=[
        'pharmaid',
        'pharma_event_action',
        'pharma_event_detail'
    ];

    public function pharmaInfo(){
        return $this->belongsTo(PharmaInfo::class, 'pharmaid','pharmaid');
    }
}
