<?php

namespace App\Repositories;

use App\Serv;

class ServsRepo extends Repository
{
    public function __construct(Serv $serv)
    {
        $this->model = $serv;
    }
}