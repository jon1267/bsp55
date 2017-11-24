<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\AddrRepo;
use App\Repositories\FooterRepo;
use App\Repositories\RepoFactory;
use App\Article;

class BlogController extends SiteController
{
    public function __construct(FooterRepo $foo_rep, AddrRepo $adr_rep)
    {
        parent::__construct($foo_rep, $adr_rep);
    }

    public function blog()
    {
        $this->template = 'site.portfolio';//шаблон тот! название неудачное:) будет др.$content

        $obj = new  RepoFactory(resolve(Article::class)); //new RepoFactory(new Article());
        $blogsItems = $obj->get();

        $content = view('site.blog_content')
            ->with('blogs', $blogsItems)->render();
        $this->vars = array_add($this->vars, 'content', $content);

        return $this->renderOutput();
    }

    public function blogSingle($id)
    {
        $blogSingle = Article::with('comments')->where('id', $id)->first();
        if(!$blogSingle) abort(404);//нет статьи с этим $id - на стр 404 (app\Exceptions\Handler.php)
        $this->template = 'site.portfolio'; //шаблон тот! название неудачное:) будет др.$content

        //dd($blogSingle->comments->groupBy('parent_id')); //получается и без всяких индексов :)
        //для удобства построения дерева комментов делаю так,
        //хотя оно-же есть в и связи, но там нет группировки по parent_id.
        $com = $blogSingle->comments->groupBy('parent_id');// это дерево комментов для статьи $id
        //dd($com);

        $content = view('site.blog_single')
            ->with(['blogSingle' => $blogSingle, 'com' => $com])
            ->render();
        $this->vars = array_add($this->vars, 'content', $content);

        return $this->renderOutput();
    }
}
