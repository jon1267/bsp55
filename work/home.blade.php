<section id="home-service" style="margin-top:20px;">
    <div class="container">
        <div class="row ">
        @forelse($homes as $home)
            <div class="col-lg-4 col-md-4  col-sm-4 "  >
                <i  class="{{ $home->icon }}  "></i>
                <h4><strong>{{ $home->title }}</strong> </h4>
                <p>
                    {{ $home->desc }}
                </p>
            </div>
        @empty
            <p>No content for display</p>
        @endforelse
        </div>
    </div>
</section>

{{--
<section id="home-service" style="margin-top:20px;">
    <div class="container">
        <div class="row ">
            <div class="col-lg-4 col-md-4  col-sm-4 "  >
                <i  class="fa fa-desktop fa-5x  icon-round  faa-vertical animated"></i><!--  faa-ring animated -->
                <h4><strong>Responsive Design</strong> </h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>
            <div class="col-lg-4 col-md-4  col-sm-4" >
                <i class="fa fa-paper-plane-o  fa-5x icon-round  faa-pulse animated"></i>
                <h4><strong>Easy To Customize</strong> </h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>
            <div class="col-lg-4 col-md-4  col-sm-4" >
                <i class="fa fa-bullhorn  fa-5x icon-round faa-horizontal animated"></i>
                <h4><strong>Clean Coding Used </strong></h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>
        </div>
    </div>
</section>
--}}
