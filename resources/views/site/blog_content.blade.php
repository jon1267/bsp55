<div class="general-subhead">
    <h1>BLOG HOME</h1>
</div>
<!--./ Gereral Subhead End -->
<section>
    <div class="container">
        @foreach($blogs->chunk(2) as $blogsChunk)
        <div class="row ">
            @foreach($blogsChunk as $blog)
            <div class="col-lg-6 col-md-6">
                <div class="custom-blog">
                    <h2>{{$blog->title}}</h2>
                    <div>
                        <ol class="breadcrumb">
                            <li><a href="#">Posted in : Entertainment</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">On: 23nd June 2014</a></li>
                        </ol>
                    </div>
                    <img src="{{ asset('bspeak/assets/img/blog/'.$blog->img) }}" class="img-rounded img-responsive " alt="" />
                    <p>
                        {{ $blog->description }}
                    </p>
                    <a class="btn btn-primary" href="{{ route('getBlog.single', ['id' => $blog->id]) }}"   >
                        COMMENTS <span class="badge">4</span>
                    </a>
                    <a class="btn btn-success" href="{{ route('getBlog.single', ['id' => $blog->id]) }}" >
                        SHARES <span class="badge">20</span>
                    </a>
                    <a class="btn btn-danger" href="{{ route('getBlog.single', ['id' => $blog->id]) }}" >
                        READ MORE  <span class="badge">&gt;</span>
                    </a>
                </div>

            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</section>
<!--./Blog Home End -->