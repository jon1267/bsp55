<div class="general-subhead">
    <h1>FULL CATALOG</h1>
</div>
<!--./ Gereral Subhead End -->

<section id="port-folio">
    <div class="container">

        @foreach($catalogs->chunk(4) as $catalogsChunk)
        <div class="row pad-row">
            @foreach($catalogsChunk as $catalog)
            <div class="col-lg-3 col-md-3 col-sm-3 ">

                <div class="portfolio-item">
                    <img src="{{ $catalog->img}}" class="img-responsive " alt="" />
                    <h5 >{{ $catalog->title}}</h5>
                    <div class="overlay" >
                        <a class="preview btn btn-success " title=" Image Title Here" href="{{ $catalog->img}}">VIEW PROJECT</a>
                        <p>
                            Image Orinagal Size: 750x500
                            <br />
                            {{ $catalog->text}}
                        </p>
                        <a class="preview"  href="{{ $catalog->img}}" >
                            <i class="fa fa-microphone fa-2x"></i>
                            See Project Details
                        </a>
                    </div>
                </div>

            </div>
            @endforeach

        </div>
        @endforeach
        {{--тут надо проверять выводить ли пагинацию...--}}
        <div>
            {{$catalogs->links()}}
        </div>

     </div>
</section>
<!-- Portfolio End-->