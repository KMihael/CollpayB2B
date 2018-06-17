<?php

namespace App\Http\Controllers\Api\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\Products\ProductRepository;
use App\Http\Requests\Api\Products\StoreProductRequest;
use App\Transformers\Products\ProductTransformer;

class ProductController extends Controller
{
    protected $products;

    public function __construct(ProductRepository $products)
    {
        $this->products = $products;
    }

    public function store(StoreProductRequest $request)
    {
        $product = $this->products->store($request->all());

        return fractal()
            ->item($product)
            ->transformWith(new ProductTransformer)
            ->toArray();
    }
}
