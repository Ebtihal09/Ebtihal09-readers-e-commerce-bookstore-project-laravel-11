<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products_details extends Model
{
    protected $fillable = [
        "id_product","price","gty","image","description","desc"
    ];
}
