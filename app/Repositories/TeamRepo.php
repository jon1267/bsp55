<?php

namespace App\Repositories;

use App\Team;

class TeamRepo extends Repository
{
    public function __construct(Team $team)
    {
        $this->model = $team;
    }
}