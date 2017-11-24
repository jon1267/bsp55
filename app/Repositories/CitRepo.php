<?php

namespace App\Repositories;

use App\Citate;

class CitRepo extends Repository
{
    public function __construct(Citate $cit)
    {
        $this->model = $cit;
    }
}