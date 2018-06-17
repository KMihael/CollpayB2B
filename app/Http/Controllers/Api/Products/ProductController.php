<?php

namespace App\Http\Controllers\Api\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\Products\ProductRepository;
use App\Http\Requests\Api\Products\StoreProductRequest;

class ProductController extends Controller
{
    protected $products;

    public function __construct(ProductRepository $products)
    {
        $this->products = $products;
    }

    public function store(StoreProductRequest $request)
    {
        # code...
    }
}
