<?php

namespace App\Repositories;

use App\Servi;

class ServisRepo extends Repository
{
    public function __construct(Servi $servi)
    {
        $this->model = $servi;
    }
}