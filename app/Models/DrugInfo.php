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
}
