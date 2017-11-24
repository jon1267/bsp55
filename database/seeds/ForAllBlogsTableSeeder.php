<?php

use Illuminate\Database\Seeder;
use App\Article;
use App\Category;
use App\Comment;

class ForAllBlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $title = 'LOREM IPSUM DOLOR SIT AMET';
        $titls = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
        $descr = $titls.$titls.$titls.$titls.$titls.$titls.$titls;
        $text  = $descr.'<br><br>'.$descr;
        $cats = ['Blog categories', 'Web Designing', 'Graphics Design', 'Entertainment & Life style',
            'Photo Designing', 'Graphics Design', 'E- Resources', 'Just For Fun', ];

        Article::truncate();
        Category::truncate();
        Comment::truncate();

        foreach(range(1,6) as $i) {
            Article::create([
                'title' => $title,
                'description' => $descr,
                'text' => $text,
                'img' => $i.'.jpg',
                'user_id' => 1,
                'category_id' => 1
            ]);
        }

        foreach (range(0,7) as $i) {
            Category::create([
                'parent_id' => ($i==0) ? $i : 1,
                'title' => $cats[$i],
                'alias' => 'alias-'.$i
            ]);
        }

        Comment::create([
            'text' => 'Hello from there.',
            'name' => 'Jesica',
            'email' => 'jesica@test.com',
            'parent_id' => 0,
            'article_id'=> 1,
            'user_id' => null
        ]);

    }
}
