@foreach($items as $item)
<div class="media">
    <a class="pull-left" href="#">
        <img class="media-object img-circle" src="/bspeak/assets/img/user{{mt_rand(1,3)}}.gif" alt="" />
    </a>
    <div class="media-body">
        <h4 class="media-heading">
            @if($item->name)
                {{ $item->name }}
            @else
                {{ $item->user->name }}
            @endif
            &nbsp;&nbsp; says: <br>
        </h4>
        <p>
            {{ $item->text }}
        </p>
        {{--где-то тут проверить - есть ли ответы на корневой коммент, и если
        есть вставить ссылку "показать все ответы" "скрыть ответы" и по нажатии
        показывать/скрывать дерево ответов на корневой комментарий (parent_id = 0)
        ??? @if ниже это та ссыллка --}}
        @if(isset($com[$item->id]))
            <a href="#">Show all answers <i class="fa fa-angle-down" aria-hidden="true"></i></a>
        @endif

        @if(isset($com[$item->id]))
            {{--рекурсивный вызов шаблоном самого себя, но с др массивом коммента
            блога. Это - сдвинутый на (хз ??? 20px) те дочерний коммент --}}
            <div class="media">
                @include('site.blog_single_comment_tree', ['items'=>$com[$item->id]])
            </div>
        @endif
    </div>
</div>
@endforeach