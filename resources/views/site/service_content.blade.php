<div class="general-subhead">
    <h1>OUR SERVICES</h1>
</div>
<!--./ Gereral Subhead End -->
<section  >
    <div class="container">
        <div class="row ">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2"  >
                <h2><strong>{{ $srv[0]['title'] }}</strong> </h2>
                <p>
                    {{ $srv[0]['desc'] }}

                </p>
            </div>
        </div>
    </div>
</section>
<!--./ text section End -->
<section >
    <div class="container">
        <div class="row ">
            @forelse($servs as $serv)
                {{-- записей-3. 1 и 2 - один див(текст), 3-я др див с видео --}}
                @if($loop->iteration != 3)
                    <div class="col-lg-3 col-md-3  col-sm-3 "  >
                        <i  class="{{ $serv->icon }}"></i>
                        <h3><strong>{{ $serv->title }}</strong> </h3>
                        <p>
                            {{ $serv->desc }}
                        </p>
                    </div>
                @else
                    <div class="col-lg-6 col-md-6  col-sm-6" >
                        <h3><strong>{{ $serv->title }}</strong> </h3>
                        <hr />
                        <iframe class="vedio-style" src="http://player.vimeo.com/video/18312392" ></iframe>
                    </div>
                @endif
            @empty
                <div class="col-lg-3 col-md-3  col-sm-3 ">
                    No data fo displaying
                </div>
            @endforelse
        </div>

        <div class="row pad-top-botm">
            @forelse($servis as $servi)
            <div class="col-lg-4  col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <i class="{{$servi->icon}}"></i>

                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">{{$servi->title}}</h3>
                        <p>
                            {{ $servi->desc }}
                        </p>

                    </div>
                </div>
            </div>
            @empty
                <div class="col-lg-4  col-md-4">
                    <p>No data for display</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
<!--./ main our-services end -->