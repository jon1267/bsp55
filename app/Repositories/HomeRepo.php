<?php

namespace App\Repositories;

use App\Home;

class HomeRepo extends Repository
{
    public function __construct(Home $home)
    {
        $this->model = $home;
    }
}