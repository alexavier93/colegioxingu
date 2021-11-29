<?php

namespace App\Providers;

use App\Models\Info;
use App\Models\PaginaSazonal;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');
        
        Paginator::useBootstrap();

        view()->composer('*', function($view){
            $info = Info::find(1);
            $view->with('info', $info);
        });


        view()->composer('*', function($view){
            $paginaSazonal = PaginaSazonal::orderBy('titulo', 'ASC')->get();
            $view->with('paginaSazonal', $paginaSazonal);
        });
        

    }
}
