<?php

namespace App\Repositories;

use App\Testi;

class TestisRepo extends Repository
{
    public function __construct(Testi $testi)
    {
        $this->model = $testi;
    }
}