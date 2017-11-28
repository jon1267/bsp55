{{--
  это шаблон 1-ного коммента блога добавляемого через ajax... не путать
  с шаблоном blog_single_comment_tree тоже 1-го коммента дерева -
  ответов на коммент с отступом, лесенкой. это разные шаблоны.
  (они похожи тк этот строится через ajax тут на входе $data[])
--}}
@if(isset($data))
    <div id="comment-{{ $data['id'] }}" class="media">
        <a class="pull-left" href="#">
            <img class="media-object img-circle" src="/bspeak/assets/img/user{{mt_rand(1,3)}}.gif" alt="" />
        </a>
        <div class="media-body">
            <h5 class="media-heading">
                @if($data['name'])
                    {{ $data['name'] }}
                @endif
                &nbsp;&nbsp; says: <span class="commentNumber pull-right">#{{ $data['id'] }}</span>
            </h5>

            <p id="item-text-{{ $data['id']}}" class="item-text">
                {{ $data['text'] }}
                <br>
                <a id="cancel-reply-{{$data['id']}}" hidden class="cancel-reply-link" href="#" onclick="return removeForm('{{$data['id']}}')"> Cancel </a> {{--ссылка убрать ответ на комментарий--}}
                <a id="reply-{{$data['id']}}" class="reply-link" href="#" onclick="return moveForm('{{$data['id']}}')"> Reply </a> {{--ссылка ответить на комментарий--}}
            </p>
        </div>
    </div>
@endif