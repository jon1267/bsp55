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
        // это вытащит статью блога, со связ. комментами у к-рых parent_id = 0
        /*$blogSingle = Article::with(['comments' => function ($query) {
            $query->where('parent_id',0);
        }])->where('id', $id)->first();*/

        if(!$blogSingle) abort(404);//нет статьи с этим $id - на стр 404 (app\Exceptions\Handler.php)
        $this->template = 'site.portfolio'; //шаблон тот! название неудачное:) будет др.$content

        //для удобства построения дерева комментов делаю так,
        //хотя оно-же есть в и связи, но там нет группировки по parent_id.
        $com = $blogSingle->comments->groupBy('parent_id');//дерево комментов для статьи $id

        //$comParent = $blogSingle->comments->where('parent_id',0);
        //$comTree = $blogSingle->comments->where('parent_id','<>',0)->groupBy('parent_id');
        //dd($blogSingle, $com);

        $content = view('site.blog_single')
            ->with(['blogSingle' => $blogSingle, 'com' => $com])
            ->render();
        $this->vars = array_add($this->vars, 'content', $content);

        return $this->renderOutput();
    }
}
