<?php

namespace App\Repositories;

use App\Srv;

class SrvsRepo extends Repository
{
    public function __construct(Srv $srv)
    {
        $this->model = $srv;
    }
}