<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\SrvsRepo;
use App\Repositories\ServsRepo;
use App\Repositories\ServisRepo;
use App\Repositories\TeamRepo;
use App\Repositories\FooterRepo;
use App\Repositories\AddrRepo;

class AboutController extends SiteController
{
    protected $srv_rep;
    protected $ser_rep;
    protected $svi_rep;
    protected $team_rep;

    public function __construct(
        SrvsRepo $srv_rep, ServsRepo $ser_rep,
        ServisRepo $svi_rep, TeamRepo $team_rep,
        FooterRepo $foo_rep, AddrRepo $adr_rep
    )
    {
        parent::__construct($foo_rep, $adr_rep);

        $this->srv_rep = $srv_rep;
        $this->ser_rep = $ser_rep;
        $this->svi_rep = $svi_rep;
        $this->team_rep = $team_rep;
    }

    public function services()
    {
        $this->template = 'site.service';

        $srvItems = $this->srv_rep->get('*',1);
        $serItems = $this->ser_rep->get();
        $sviItems = $this->svi_rep->get();
        $service = view('site.service_content')
            ->with(['srv' => $srvItems, 'servs' => $serItems, 'servis' => $sviItems])
            ->render();
        $this->vars = array_add($this->vars, 'service', $service);

        return $this->renderOutput();
    }

    public function team()
    {
        $this->template = 'site.team';

        $teamItem = $this->team_rep->get();
        $sviItems = $this->svi_rep->get();
        $content = view('site.team_content')
            ->with(['teams' => $teamItem, 'servis' => $sviItems])
            ->render();
        $this->vars = array_add($this->vars, 'content', $content);

        return $this->renderOutput();

    }
}
