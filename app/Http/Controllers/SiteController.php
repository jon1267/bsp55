<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\FooterRepo;
use App\Repositories\AddrRepo;

class SiteController extends Controller
{
    //
    protected $foo_rep; //footer repo
    protected $adr_rep; //address repo (address present in footer)

    protected $template; // блейд шаблон каждой страницы
    protected $vars; //массив перем, передаваемый в блейд шаблон

    public function __construct(FooterRepo $foo_rep, AddrRepo $adr_rep)
    {
        $this->foo_rep = $foo_rep;
        $this->adr_rep = $adr_rep;
    }

    protected function renderOutput() {
        $navigation = view('site.navigation')->render();
        $this->vars = array_add($this->vars, 'navigation', $navigation);

        //$fooItem = Footer::take(1)->get(['title', 'desc', 'icon']);
        //$addrItem = Address::take(1)->get(['title', 'str1', 'str2', 'str3']);

        $fooItem = $this->foo_rep->get(['title', 'desc', 'icon']);
        $addrItem = $this->adr_rep->get(['title', 'str1', 'str2', 'str3']);

        $footer = view('site.footer')
            ->with(['foo' => $fooItem, 'addr' => $addrItem])->render();
        $this->vars = array_add($this->vars,'footer', $footer);

        return view($this->template)->with($this->vars);
    }

    public function getNavigation() {
        return view('site.navigation')->render();
    }

    public function getFooter() {
        $fooItem = $this->foo_rep->get(['title', 'desc', 'icon']);
        $addrItem = $this->adr_rep->get(['title', 'str1', 'str2', 'str3']);

        return view('site.footer')
            ->with(['foo' => $fooItem, 'addr' => $addrItem])->render();
    }
}
