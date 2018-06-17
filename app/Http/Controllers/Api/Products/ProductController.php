<?php

namespace App\Http\Controllers\Api\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\Products\ProductRepository;

class ProductController extends Controller
{
    protected $products;

    public function __construct(ProductRepository $products)
    {
        $this->products = $products;
    }
}
