<?php

namespace App\Repositories;

use App\Footer;

class FooterRepo extends Repository
{
    public function __construct(Footer $footer)
    {
        $this->model = $footer;
    }
}