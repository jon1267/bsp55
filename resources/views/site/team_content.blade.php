<div class="general-subhead">
    <h1>TEAM MEMBERS</h1>
</div>
<!--./ Gereral Subhead End -->

<section >
    <div class="container">
        @forelse($teams as $team)
            {{-- для нечетн. счетчика цикла фото слева, для четн. (else) справа --}}
            @if(($loop->iteration % 2)!=0)
                <div class="row ">
                    <div class="col-lg-9 col-md-9"  >
                        <h2><strong>{{$team->name}}</strong> </h2>
                        <h3>{{ $team->position }}</h3>
                        <p>
                            {{ $team->desc }}
                            {{ $team->desc }}
                        </p>

                    </div>
                    <div class="col-lg-3 col-md-3" >

                        <img class="img-circle img-responsive" src="{{ $team->img }}" alt="" />
                        <br />
                        <p>

                            <a href="#"><i class="fa fa-facebook-square fa-2x color-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter-square fa-2x color-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus-square fa-2x color-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin-square fa-2x color-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-square fa-2x color-pinterest"></i></a>


                        </p>
                    </div>

                </div>
            @else
                <div class="row ">
                    <div class="col-lg-3 col-md-3 " >
                        <img class="img-circle img-responsive" src="{{ $team->img }}" alt="" />
                        <br />
                        <p>

                            <a href="#"><i class="fa fa-facebook-square fa-2x color-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter-square fa-2x color-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus-square fa-2x color-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin-square fa-2x color-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-square fa-2x color-pinterest"></i></a>


                        </p>
                    </div>
                    <div class="col-lg-9 col-md-9"  >
                        <h2><strong>{{$team->name}}</strong> </h2>
                        <h3>{{$team->position}}</h3>
                        <p>
                            {{ $team->desc }}
                            {{ $team->desc }}
                        </p>

                    </div>

                </div>
            @endif
            {{-- на последнем шаге цикла <hr> не рисуем :) --}}
            @if($loop->remaining != 0)
                <hr />
            @endif
        @empty
            <div class="row ">No data for displaying</div>
        @endforelse
    </div>
</section>
<!--./Team Style One End -->
<div id="just-middle-row">
    <div class="container">
        <div class="row pad-top-botm">
            <div class="col-lg-12 col-md-12">
                <h1> CHECK OUR AWESOME SERVICE & TEAM SUPPORT</h1>
            </div>
        </div>
    </div>
</div>
<!--./Middle Row End -->
<section>
    <div class="container">

        <div class="row pad-top-botm">
        @foreach($servis as $servi)
            <div class="col-lg-4 col-md-4">
                <div class="media">
                    <div class="pull-left">
                        <i class="{{ $servi->icon }} clr-main"></i>

                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">{{$servi->title}}</h3>
                        <p>
                            {{ $servi->desc }}
                        </p>

                    </div>
                </div>
            </div>
        @endforeach
        </div>

        <div class="row text-center" >
        @foreach($teams as $team)
            <div class="col-lg-3 col-md-3 col-sm-3">
                <img class="img-circle img-responsive" src="{{ $team->img }}" alt="" />
                <h4>{{ $team->name }}</h4>
                <p>
                    {{ str_limit($team->desc,150) }}

                </p>
                <p>
                    <a href="#"><i class="fa fa-facebook-square fa-2x color-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter-square fa-2x color-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus-square fa-2x color-google-plus"></i></a>
                    <a href="#"><i class="fa fa-linkedin-square fa-2x color-linkedin"></i></a>
                    <a href="#"><i class="fa fa-pinterest-square fa-2x color-pinterest"></i></a>

                </p>

            </div>
        @endforeach
            {{--<div class="col-lg-3 col-md-3 col-sm-3" >
                <img class="img-circle img-responsive" src="{{ asset('bspeak/assets/img/team/team2.jpg') }}" alt="" />
                <h4>Romson Lediro</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.

                </p>
                <p>
                    <a href="#"><i class="fa fa-facebook-square fa-2x color-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter-square fa-2x color-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus-square fa-2x color-google-plus"></i></a>
                    <a href="#"><i class="fa fa-linkedin-square fa-2x color-linkedin"></i></a>
                    <a href="#"><i class="fa fa-pinterest-square fa-2x color-pinterest"></i></a>

                </p>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-3" >
                <img class="img-circle img-responsive" src="{{ asset('bspeak/assets/img/team/team1.png') }}" alt="" />
                <h4>Rooklin Bruce</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.

                </p>
                <p>
                    <a href="#"><i class="fa fa-facebook-square fa-2x color-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter-square fa-2x color-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus-square fa-2x color-google-plus"></i></a>
                    <a href="#"><i class="fa fa-linkedin-square fa-2x color-linkedin"></i></a>
                    <a href="#"><i class="fa fa-pinterest-square fa-2x color-pinterest"></i></a>

                </p>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-3" >
                <img class="img-circle img-responsive" src="{{ asset('bspeak/assets/img/team/team2.jpg') }}" alt="" />
                <h4>Donseny Riopsh</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.

                </p>
                <p>
                    <a href="#"><i class="fa fa-facebook-square fa-2x color-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter-square fa-2x color-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus-square fa-2x color-google-plus"></i></a>
                    <a href="#"><i class="fa fa-linkedin-square fa-2x color-linkedin"></i></a>
                    <a href="#"><i class="fa fa-pinterest-square fa-2x color-pinterest"></i></a>

                </p>

            </div>--}}
        </div>
    </div>
</section>
<!--./Team Style Two End -->