<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\HomeRepo;
use App\Repositories\SpecRepo;
use App\Repositories\TestisRepo;
use App\Repositories\BotRepo;
use App\Repositories\CitRepo;
use App\Repositories\FooterRepo;
use App\Repositories\AddrRepo;

class IndexController extends SiteController
{
    protected $h_rep;   //home repo (& homes - mysql table)
    protected $sp_rep;  //special repo (& specials - mysql table)
    protected $tst_rep; //testimonials repo (& testis table)
    protected $bot_rep; //bottom repo (& bottoms table)
    protected $cit_rep; //citate repo (& citates table)

    public function __construct(
        HomeRepo $h_rep, SpecRepo $sp_rep,
        TestisRepo $tst_rep, BotRepo $bot_rep,
        CitRepo $cit_rep,
        FooterRepo $foo_rep, AddrRepo $adr_rep
    )
    {
         parent::__construct($foo_rep, $adr_rep);

        $this->h_rep   = $h_rep;
        $this->sp_rep  = $sp_rep;
        $this->tst_rep = $tst_rep;
        $this->bot_rep = $bot_rep;
        $this->cit_rep = $cit_rep;

        $this->template = 'site.index';
    }

    public function index()
    {

        //$navigation обр в SiteController а $slider здесь - и это правильно...
        $slider = view('site.slider')->render();
        $this->vars = array_add($this->vars, 'slider', $slider);

        $homeItems = $this->h_rep->get();
        $homes = view('site.homes')->with('homes',$homeItems)->render();
        $this->vars = array_add($this->vars,'homes', $homes);

        $specItem = $this->sp_rep->get('*',1);
        $special =  view('site.special')->with('special', $specItem)->render();
        $this->vars = array_add($this->vars, 'special', $special);

        $tstItems = $this->tst_rep->get();
        $testimonials = view('site.testimonials')
            ->with('testimonials', $tstItems)->render();
        $this->vars = array_add($this->vars, 'testimonials', $testimonials);


        $bottomsItems = $this->bot_rep->get();
        $citatesItems = $this->cit_rep->get();
        $bottoms = view('site.bottoms')
            ->with(['botts' => $bottomsItems, 'citates' => $citatesItems])->render();
        $this->vars = array_add($this->vars, 'bottoms', $bottoms);

/*        $fooItem = $this->foo_rep->get(['title', 'desc', 'icon'], 1);
        $addrItem = $this->adr_rep->get(['title', 'str1', 'str2', 'str3'],1);

        $footer = view('site.footer')
            ->with(['foo' => $fooItem, 'addr' => $addrItem])->render();
        $this->vars = array_add($this->vars,'footer', $footer);*/

        return $this->renderOutput();
    }


}
