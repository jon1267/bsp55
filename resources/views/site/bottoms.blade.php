<section id="service-info">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 col-md-12">
                <h3 class="clr-main"><strong>OUR SERVICE LIST </strong></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum. </p>
                <br />
                <br />
            </div>
        </div>
        <div class="row pad-top-botm">
            @forelse($botts as $bott)
            <div class="col-lg-4 col-md-4">

                <div class="media">
                    <div class="pull-left">
                        <i class=" {{ $bott->icon }} "></i>

                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">{{ $bott->title }}</h3>
                        <p>
                            {{ $bott->desc }}
                        </p>

                    </div>
                </div>

            </div>
            @empty
                <p>No content for display</p>
            @endforelse

        </div>


        <div class="row pad-top-botm ">

            <div class="col-lg-6 col-md-6">
                <div class="alert alert-success transparent-bk upfront-trans">
                    <i class="fa fa fa-bell fa-2x "></i>Lorem ipsum dolor sit amet, consectetur adipiscing. Not in table, but in blade.

                </div>
                <hr />
                <iframe src="http://player.vimeo.com/video/18312392" class="vedio-style"></iframe>
            </div>

            <div class="col-lg-6 col-md-6">
                @forelse($citates as $citate)

                <div class="col-lg-12 col-md-12">

                    <div class="alert alert-info transparent-bk upfront-trans">
                        <i class="{{ $citate->icon }}"></i>
                        {!!  ($citate->id == 3) ? '<b>' . $citate->title . '</b><br>' : '' !!}
                        {{ $citate->desc }}
                    </div>

                </div>
                @empty
                    <p>No data for display</p>
                @endforelse

            </div>

        </div>

    </div>
</section>