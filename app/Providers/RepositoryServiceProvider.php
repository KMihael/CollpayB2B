<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;

use App\Repositories\Contracts\Products\{ 
    ProductRepository 
};
use App\Repositories\Eloquent\Products\{ 
    EloquentProductRepository
};

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(ProductRepository::class, EloquentProductRepository::class);
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}