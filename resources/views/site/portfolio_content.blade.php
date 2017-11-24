<div class="general-subhead">
    <h1>OUR PORTFOLIO</h1>
</div>
<!--./ Gereral Subhead End -->


<section id="port-folio">
    <div class="container">

        <div class="row pad-row">
            @foreach($portfolios as $portfolio)
            <div class="col-lg-4 col-md-4 col-sm-4 ">
                <div class="portfolio-item">
                    <img src="{{ $portfolio->img }}" class="img-responsive " alt="" />
                    <h5 >{{ $portfolio->title }}</h5>
                    <div class="overlay">
                        <a class="preview btn btn-success " title="Image Title Here" href="{{ $portfolio->img }}">VIEW PROJECT</a>
                        <p>
                            Image Orinagal Size: 750x500
                            <br />
                            {{ $portfolio->text }}
                        </p>
                        <a class="preview"  href="{{ $portfolio->img }}" >
                            <i class="fa fa-microphone fa-2x "></i>&nbsp;&nbsp;
                            See Project Details

                        </a>
                    </div>
                </div>
            </div>
            @endforeach
         </div>

        <!-- стандартния бутстрапова пагинация-->
        <div>
            {{$portfolios->links()}}
        </div>

    </div>
</section>
<!-- Portfolio End-->