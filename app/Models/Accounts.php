<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    protected $table ='accounts';

    protected $fillable =[
        'image',
        'brand',
        'framesize',
        'material',
        'ratio',
        'price',
        'quantity'
    ];
}
