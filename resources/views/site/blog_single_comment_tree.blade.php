@foreach($items as $item)
<div id="comment-{{ $item->id }}" class="media">
    <a class="pull-left" href="#">
        <img class="media-object img-circle" src="/bspeak/assets/img/user{{mt_rand(1,3)}}.gif" alt="" />
    </a>
    <div class="media-body">
        <h5 class="media-heading">
            @if($item->name)
                {{ $item->name }}
            @else
                {{ $item->user->name }}
            @endif
            &nbsp;&nbsp; says: <span class="commentNumber pull-right">#</span>
        </h5>

        <p class="item-text">
            {{ $item->text }}

            <br>
            <a id="cancel-reply-{{$item->id}}" hidden class="cancel-reply-link" href="#" onclick="return removeForm('{{$item->id}}')"> Cancel </a> {{--ссылка убрать ответ на комментарий--}}
            <a id="reply-{{$item->id}}" class="reply-link" href="#" onclick="return moveForm('{{$item->id}}')"> Reply </a> {{--ссылка ответить на комментарий--}}
        </p>

        {{--проверяем - есть ли ответы на корневой коммент, и если
        есть вставляем ссылку "показать ответы" "скрыть ответы". По нажатии
        показывать/скрывать дерево ответов на корневой комментарий (parent_id = 0)

        <p>Текущий (родительский) коммент:- {{ $item->id.' - '. $item->email.' - '. $item->parent_id }} </p>
        <p>Нижеследующий коммент:- {{ $com[$item->id][$key]['id'].' - '. $com[$item->id][$key]['email'].' - '. $com[$item->id][$key]['parent_id']}}</p>
        Show all answers --}}

        @if(isset($com[$item->id]) && ($item->parent_id === 0))
            <a id="hide-answers-{{ $item->id }}" class="hide-answers" href="#" onclick="return hideAnswers('{{$item->id}}')"> Hide answers &nbsp;&nbsp;<i class="fa fa-angle-up" aria-hidden="true"></i> </a>
            <a id="show-answers-{{ $item->id }}" class="show-answers" href="#" onclick="return showAnswers('{{$item->id}}')"> Show answers &nbsp;&nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i> </a>
        @endif

        @if(isset($com[$item->id]))
            {{-- рекурсивный вызов шаблоном самого себя, но с др массивом коммента
            блога. Это - сдвинутый на (??? ~ 20px) дочерний коммент --}}
            <div id="child-{{ $item->id }}" class="media">
                @include('site.blog_single_comment_tree', ['items'=>$com[$item->id]])
            </div>
        @endif
    </div>
</div>
@endforeach