<div class="general-subhead">
    <h1>BLOG Single</h1>
</div>
<!--./ Gereral Subhead End -->
<section>
    <div class="container">
        <div class="row ">
            <div class="col-lg-9 col-md-9">
                @if(isset($blogSingle))
                <div class="blog-single" >
                    <h2>{{ $blogSingle->title }}</h2>
                    <div>
                        <ol class="breadcrumb">
                            <li><a href="#">Posted in : Entertainment</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">On: 23nd June 2014</a></li>
                        </ol>
                    </div>
                    <img src="{{ asset('bspeak/assets/img/blog/'.$blogSingle->img) }}" class="img-rounded img-responsive " alt="" />

                    <a class="btn btn-primary" href="#" >
                        Facebook <span class="badge">400</span>
                    </a>
                    <a class="btn btn-danger" href="#" >
                        Google Plus <span class="badge">405</span>
                    </a>
                    <a class="btn btn-info" href="#" >
                        Twitter  <span class="badge">34</span>
                    </a>

                    <p>
                        {!! $blogSingle->text !!}
                    </p>

                </div>
                @else
                <div class="blog-single">
                    <h2>Nothing to display.</h2>
                </div>
                @endif
                <div class="row blog-comments">
                    <div class="col-lg-12 col-md-12" style="padding-left:50px;">
                        @if(count($blogSingle->comments))
                        <h2>Recent Comments : </h2>
                            {{--<span>{{ count($blogSingle->comments) }} </span> responses <br><br>--}}
                            <ul class="media-list">
                                @foreach($com as $key => $comments)
                                    @if($key !==0)
                                        @break
                                    @endif
                                    @include('site.blog_single_comment_tree', ['items'=>$comments])
                                @endforeach

                                <div id="start" class="insert_new_parent_comment"></div> <!-- для родительских комментариев вставл ajax см jon_scripts.js -->

                            </ul>
                            @else
                            <h4 class="media-heading">
                                <br>No comments on this article
                            </h4>
                        @endif


                        <hr />
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div id="list-cat">


                    <a href="#" class="list-group-item active ">
                        CHOOSE FROM CATEGORIES
                    </a>
                    <ul class="list-group">

                        <li class="list-group-item">
                            <a href="#"> Web Desighing </a>
                            <span class="label label-danger pull-right">300</span>
                        </li>
                        <li class="list-group-item">  <a href="#">Graphics Designer</a>
                            <span class="label label-success pull-right">340</span>
                        </li>
                        <li class="list-group-item">  <a href="#">Entertainment & Life style</a>
                            <span class="label label-info pull-right">735</span>
                        </li>
                        <li class="list-group-item">  <a href="#">Photo Designing</a>
                            <span class="label label-warning pull-right">456</span>
                        </li>

                        <li class="list-group-item">  <a href="#">Graphics Designer</a>
                            <span class="label label-info pull-right">400</span>
                        </li>
                        <li class="list-group-item">  <a href="#">E- Resources</a>
                            <span class="label label-primary pull-right">89</span>
                        </li>
                        <li class="list-group-item">  <a href="#">Software Development</a>
                            <span class="label label-danger pull-right">90</span>
                        </li>
                        <li class="list-group-item">  <a href="#">CRM & ERP Designing</a>
                            <span class="label label-warning pull-right">567</span>
                        </li>
                        <li class="list-group-item">  <a href="#">Just For Fun</a>
                            <span class="label label-info pull-right">400</span>
                        </li>

                    </ul>
                </div>
                <div id="comment-sec" class="text-center" >
                    <a href="#" class="btn btn-success btn-block">WANT TO SAY SOMETHING ?
                    </a>
                    <br id="start-form-position">
                    <form action="{{route('comment.store')}}" method="post" id="leave_reply">
                        {{ csrf_field() }}
                        <input id="comment_blogSingle_id" type="hidden" name="comment_blogSingle_id" value="{{$blogSingle->id}}">
                        <input id="comment_parent" type="hidden" name="comment_parent" value="0">
                        @if(!Auth::check())
                        <div class="col-lg-12 col-md-12 ">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" required="required" placeholder="Name" />
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control" required="required" placeholder="Email address" />
                            </div>
                        </div>
                        @endif
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea name="text" id="text" required="required" class="form-control" rows="4" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="ajax_result"></div>
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" id="submit" class="btn btn-danger">COMMENT NOW</button>
                        </div>

                    </form>
                </div>
                <div id="facebook-div-sec">

                    <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fenvato&amp;width=235&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false&amp;appId=438889712801266" class="facebook-div"></iframe>

                </div>
                <div class="panel-group pad-top-botm" id="accordion">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title panel-title-adjust">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
                                    <i class="fa fa-plus"></i>Lorem ipsum dolor sit
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Vivamus sagittis egestas mauris ut vehicula. Cras viverra ac orci ac aliquam.
                                Nulla eget condimentum mauris, eget tincidunt est. Quisque in luctus ligula.

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h4 class="panel-title panel-title-adjust">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
                                    <i class="fa fa-plus"></i>Aenean eget ligula
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Vivamus sagittis egestas mauris ut vehicula. Cras viverra ac orci ac aliquam.
                                Nulla eget condimentum mauris, eget tincidunt est. Quisque in luctus ligula.

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h4 class="panel-title panel-title-adjust">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
                                    <i class="fa fa-plus"></i>Duis lobortis purus
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Vivamus sagittis egestas mauris ut vehicula. Cras viverra ac orci ac aliquam.
                                Nulla eget condimentum mauris, eget tincidunt est. Quisque in luctus ligula.

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title panel-title-adjust">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour" class="collapsed">
                                    <i class="fa fa-plus"></i>Nulla eget condimentum
                                </a>
                            </h4>
                        </div>
                        <div id="collapsefour" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Vivamus sagittis egestas mauris ut vehicula. Cras viverra ac orci ac aliquam.
                                Nulla eget condimentum mauris, eget tincidunt est. Quisque in luctus ligula.

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h4 class="panel-title panel-title-adjust">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapsefive" class="collapsed">
                                    <i class="fa fa-plus"></i>Placerat vel a nulla
                                </a>
                            </h4>
                        </div>
                        <div id="collapsefive" class="panel-collapse collapse">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Vivamus sagittis egestas mauris ut vehicula. Cras viverra ac orci ac aliquam.
                                Nulla eget condimentum mauris, eget tincidunt est. Quisque in luctus ligula.

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!--./Blog Single End -->