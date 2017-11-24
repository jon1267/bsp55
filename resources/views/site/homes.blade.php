<section id="home-service" style="margin-top:20px;">
    <div class="container">
        <div class="row ">
        @forelse($homes as $home)
            <div class="col-lg-4 col-md-4  col-sm-4 "  >
                <i  class="{{ $home->icon }} "></i>
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
