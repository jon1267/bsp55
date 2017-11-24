<div id="footer-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4" id="about-ftr">
                <i class="{{ $foo[0]['icon'] }}"></i>
                <span>{{ $foo[0]['title'] }}</span>
                <small>replace this dummy text with your text</small>
                <p>
                    {{ $foo[0]['desc'] }}
                </p>
            </div>
            <div class="col-lg-4 col-md-4">
                <i class="fa fa-paper-plane-o fa-2x"></i>
                <span>From the blog</span>
                <small>replace this dummy text with your text</small>
                <div id="blog-footer-div">
                    <div class="media">
                        <div class="pull-left">
                            <img src="{{ asset('bspeak/assets/img/user2.png') }}" class="img-circle" alt=""  />
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><a href="blog-home.html">Pellentesque habitant morbi tristique</a></span>
                            <small class="muted">Posted 17 June 2014</small>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img src="{{ asset('bspeak/assets/img/user.gif') }}" class="img-circle" alt=""/>
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><a href="blog-home.html">Pellentesque habitant morbi tristique</a></span>
                            <small class="muted">Posted 27 June 2014</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <i class="fa fa-sliders fa-2x"></i>
                <span>{{ $addr[0]['title'] }}</span>
                <small>replace this dummy text with your text</small>
                {{ $addr[0]['str1'] }}
                <br />
                {{ $addr[0]['str2'] }}
                <br />
                {{ $addr[0]['str3'] }}
                <br />
                <br />
                <form role="form">
                    <div class="input-group">
                        <input type="text" class="form-control" autocomplete="off" placeholder="Enter your email" required />
                        <span class="input-group-btn">
                                <button class="btn btn-primary" type="button">Subdcribe!</button>
                            </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--./ footer-sec  End -->
<div id="footser-end">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12">
                {{--2014 All Rights Reserved | by: <a href="http://binarytheme.com" target="_blank" style="color:#fff" >www.binarytheme.com</a>--}}
                {{ date('Y') }} All Rights Reserved | &copy; <span style="color:#fff" >Binarytheme Ltd. </span>

            </div>
        </div>

    </div>
</div>