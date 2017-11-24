<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class RepoFactory extends Repository
{
    public function __construct(Model $model)
    {
        $this->model = $model;
        return $this;
    }
}
/*
//для использ. RepoFactory не забыть сверху эти 2 use
//use App\Repositories\RepoFactory;
//use App\Servi;//модель. Нада другую, указать другую (мб несколько)
//$obj = new RepoFactory(new Servi);
//---------------------------------------------------
//OK, проверено. в $obj экземпляр моего репо с моими методами...
//$obj = new RepoFactory(resolve(Servi::class));//$obj = new RepoFactory(new Servi);
//dd($obj->get(['title', 'desc','icon'],1));
//--------------------------------------------------
