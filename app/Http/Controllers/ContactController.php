<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\AddrRepo;
use App\Repositories\FooterRepo;
use App\Repositories\RepoFactory;
use App\Address;

class ContactController extends SiteController
{
    public function __construct(FooterRepo $foo_rep, AddrRepo $adr_rep)
    {
        parent::__construct($foo_rep, $adr_rep);
    }

    public function contact()
    {
        $this->template = 'site.portfolio';//шаблон именно этот! просто будет др. $content

        $obj = new RepoFactory(new Address);//$obj = new RepoFactory(resolve(Address::class));
        $contactItems = $obj->get();

        $content = view('site.contact_content')
            ->with('contact', $contactItems)->render();
        $this->vars = array_add($this->vars, 'content', $content);

        return $this->renderOutput();
    }
}
