<?php

namespace App\Repositories;

use App\Portfolio;

class PortRepo extends Repository
{
    public function __construct(Portfolio $portfolio)
    {
        $this->model = $portfolio;
    }
}