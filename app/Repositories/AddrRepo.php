<?php

namespace App\Repositories;

use App\Address;

class AddrRepo extends Repository
{
    public function __construct(Address $address)
    {
        $this->model = $address;
    }
}