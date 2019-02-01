<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'product_table';
    protected $primaryKey = 'prod_id';
    protected $guarded = [];
}
