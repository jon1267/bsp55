<?php

namespace App\Repositories;

use App\Bottom;

class BotRepo extends Repository
{
    public function __construct(Bottom $bot)
    {
        $this->model = $bot;
    }
}