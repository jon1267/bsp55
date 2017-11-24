<?php

namespace App\Repositories;

use App\Special;

class SpecRepo extends Repository
{
    public function __construct(Special $spec)
    {
        $this->model = $spec;
    }
}