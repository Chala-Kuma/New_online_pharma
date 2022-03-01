<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrugInfo extends Model
{
    use HasFactory;


    protected $primarykey='drugid';

    protected $guarded =[];

    protected $fillable =[
        'pharmaid',
        'drug_name',
        'expr_date',
        'manuf_date',
        'description',
        'price'
    ];

    public function pharmaInfo(){
        return $this->belongsToMany(PharmaInfo::class, 'drug_info_pharma_info','drugid', 'pharmaid');
    }
}
