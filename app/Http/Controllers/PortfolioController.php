<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\AddrRepo;
use App\Repositories\FooterRepo;
use App\Repositories\PortRepo;

// это только потестить RepoFactory
use App\Repositories\RepoFactory;
use App\Portfolio;

class PortfolioController extends SiteController
{
    protected $port_rep;

    public function __construct(FooterRepo $foo_rep, AddrRepo $adr_rep, PortRepo $portRepo)
    {
        parent::__construct($foo_rep, $adr_rep);

        $this->port_rep = $portRepo;
    }

    public function portfolio()
    {
        $this->template = 'site.portfolio';

        $portfolioItems = $this->port_rep->get('*', false, 3);
        $content = view('site.portfolio_content')
            ->with('portfolios', $portfolioItems)->render();
        $this->vars = array_add($this->vars, 'content', $content);

        return $this->renderOutput();
    }

    public function catalog()
    {
        $this->template = 'site.portfolio';//шаблон именно этот! просто будет др. $content
        $obj = new RepoFactory(resolve(Portfolio::class));
        $catalogItems = $obj->get('*', false, 8);
        $content = view('site.catalog_content')
            ->with('catalogs', $catalogItems)->render();
        $this->vars = array_add($this->vars, 'content', $content);

        return $this->renderOutput();
    }

    public function price() {

        $this->template = 'site.price';
        $content = view('site.price_content')->render();
        $this->vars = array_add($this->vars, 'content', $content);

        return $this->renderOutput();
    }
}
