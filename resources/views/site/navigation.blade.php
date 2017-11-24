<div class="navbar navbar-default navbar-fixed-top menu-back">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="/">
                <img src="{{ asset('bspeak/assets/img/logo.png') }}" class="navbar-brand-logo " alt="" />
            </a>
        </div>
        <div class="navbar-collapse collapse" >
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="{{route('index.home')}}">HOME PAGE<i class="fa fa-folder-open-o"></i>
                        <span>replace this text</span>

                    </a>
                    {{--<ul class="dropdown-menu dropdown-menu-left">
                        <li>
                            <a href="index1.html">
                                <i class="fa fa-paperclip"></i>Home Page One
                                <span>replace this text</span>
                            </a>

                        </li>
                        <li>
                            <a href="index2.html">
                                <i class="fa fa-comments-o"></i>Home Page Two
                                <span>replace this text</span>
                            </a>

                        </li>


                    </ul>--}}
                </li>
                <li class="dropdown">
                    <a href="{{ route('index.services') }}">ABOUT US<i class="fa fa-folder-open-o"></i>
                        <span>replace this text</span>

                    </a>
                    <ul class="dropdown-menu dropdown-menu-left">
                        <li>
                            <a href="{{ route('index.services') }}">
                                <i class="fa fa-edit"></i>Our Services
                                <span>replace this text</span>
                            </a>

                        </li>
                        <li>
                            <a href="{{ route('index.team') }}">
                                <i class="fa fa-bullhorn"></i>Team Members
                                <span>replace this text</span>
                            </a>

                        </li>


                    </ul>
                </li>

                <li class="dropdown">
                    <a href="{{route('index.portfolio')}}">PORTFOLIO<i class="fa fa-image"></i>
                        <span>replace this text</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left">

                        <li>
                            <a href="{{route('index.portfolio')}}">
                                <i class="fa fa-paper-plane-o"></i>Last Projects
                                <span>replace this text</span>
                            </a>

                        </li>

                        <li>
                            <a href="{{route('index.catalog')}}">
                                <i class="fa fa-folder-open-o"></i>Full Catalog
                                <span>replace this text</span>
                            </a>

                        </li>


                        <li>
                            <a href="{{route('index.price')}}">
                                <i class="fa fa-tag"></i>Pricing Options
                                <span>replace this text</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="dropdown">
                    <a href="{{ route('index.blog') }}">OUR BLOG <i class="fa fa-bars"></i>
                        <span>replace this text</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-left">

                        {{--<li>
                            <a href="error.html">
                                <i class="fa fa-power-off"></i>404 Error
                                <span>replace this text</span>
                            </a>

                        </li>
                        <li>
                            <a href="pricing.html">
                                <i class="fa fa-tag"></i>Pricing Options
                                <span>replace this text</span>
                            </a>
                        </li>--}}

                        <li>
                            <a href="{{ route('index.blog') }}">
                                <i class="fa fa-map-marker"></i>Blog Home
                                <span>replace this text</span>
                            </a>

                        </li>
                        <li>
                            <a href="{{ route('getBlog.single', ['id' => 1]) }}">
                                <i class="fa fa-flask"></i>Blog Single
                                <span>replace this text</span>
                            </a>

                        </li>



                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{route('index.contact')}}">CONTACT <i class="fa fa-globe"></i>
                        <span>replace this text</span>
                    </a>

                </li>
            </ul>
        </div>

    </div>
</div>
<!--./ Top Menu End -->
<div class="div-social-top">

    <i class="fa fa-globe "></i>E-mail:  info@yourdomain.com   | <i class="fa fa-mobile "></i>Call: : +000 - 123 -45678  |  <i class="fa fa-map-marker "></i>Country : USA &nbsp;
    <a href="#">
        <i class="fa fa-facebook-square "></i>
    </a>

    <a href="#">
        <i class="fa fa-linkedin-square "></i>
    </a>
    <a href="#">
        <i class="fa fa-pinterest-square "></i>
    </a>

</div>
<!-- /Social Div End/ -->