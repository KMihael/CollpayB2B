<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;

use App\Models\Traits\Orderable;

class Product extends Model
{
    use Orderable;

    protected $fillable = ['name'];
}
