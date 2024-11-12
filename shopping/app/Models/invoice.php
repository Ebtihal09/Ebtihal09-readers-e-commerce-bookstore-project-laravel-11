<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    protected $fillable = [
        "customer_id","product_id","gty","price","total"
    ] ;
}
