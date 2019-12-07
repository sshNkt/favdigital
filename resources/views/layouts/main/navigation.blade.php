@section('navigation')
<div class="navigation-menu">
        <div class="inner">
            <div class="side-menu">
                <ul>
                    <li>
                        <a href="{{route('index')}}">Agency</a>
                    </li>
                    {{-- <li>
                        <a href="#">Cases</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li> --}}
                    <li>
                            <a href="{{route('contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- end side-menu -->
            <div class="sides">
                <div id="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d325518.68780316407!2d30.252511957059642!3d50.4016990487754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4ee15a4505%3A0x764931d2170146fe!2z0JrQuNGX0LIsIDAyMDAw!5e0!3m2!1suk!2sua!4v1552081224273"
                        width="600"
                        height="450"
                        style="border:0"
                        allowfullscreen
                    ></iframe>
                </div>
                <!-- end map -->
                <figure>
                    <img src="{{asset('images/kyiv.jpg')}}" alt="Image" />
                    <a href="#map" data-fancybox>
                        <img src="{{asset('images/icon-map-marker.svg')}}" alt="Image" />
                    </a>
                </figure>
            </div>
            <!-- end sides -->
            <div class="sides">
                <h2>
                    Work with us to build digital product or brand.
                    Just hard work and results. Email us.
                </h2>
                <address>
                    Kristiatik 15th Street, Floot 17
                    <br />Kiev, Ukraine 78692
                    <br />
                    <a href="#">hello@favdigital.eu</a>
                    +380 63 186 6113
                </address>
            </div>
            <!-- end sides -->
        </div>
        <!-- end inner -->
    </div>
    <!-- end navigation-menu -->
    <aside class="left-side">
        <div class="logo">
            <img src="{{asset('images/logo-symbol.png')}}" alt="Image" />
        </div>
        <ul>
            <li>
                <a href="#">FACEBOOK</a>
            </li>
            <li>
                <a href="#">INSTAGRAM</a>
            </li>
            <li>
                <a href="#">TWITTER</a>
            </li>
        </ul>
        <a href="#top" class="gotop">
            <img src="{{asset('images/icon-gotop.svg')}}" alt="Image" />
        </a>
    </aside>
    <!-- end left-side -->
    <header class="header">
        <nav class="navbar">
            <div class="logo">
                <a href="{{route('index')}}">
                    <img src="{{asset('images/logo.png')}}" alt="Image" />
                </a>
            </div>
            <!-- end logo -->
            <div class="phone">T: +380 063 186 6113</div>
            <!-- end phone -->
            <div class="main-menu">
                <ul>
                    <li>
                        <a href="{{route('index')}}">Agency</a>
                    </li>
                    {{-- <li>
                        <a href="#">Cases</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li> --}}
                    <li>
                            <a href="{{route('contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- end main-menu -->
            <div class="hamburger-menu" id="hamburger-menu">
                <div class="burger">
                    <svg
                        id="burger-svg"
                        data-name="Layer 1"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 50 50"
                    >
                        <title>Show / Hide Navigation</title>
                        <rect
                            class="burger-svg__base"
                            width="50"
                            height="50"
                        />
                        <g class="burger-svg__bars">
                            <rect
                                class="burger-svg__bar burger-svg__bar-1"
                                x="14"
                                y="18"
                                width="22"
                                height="2"
                            />
                            <rect
                                class="burger-svg__bar burger-svg__bar-2"
                                x="14"
                                y="24"
                                width="22"
                                height="2"
                            />
                            <rect
                                class="burger-svg__bar burger-svg__bar-3"
                                x="14"
                                y="30"
                                width="22"
                                height="2"
                            />
                        </g>
                    </svg>
                </div>
                <!-- end burger -->
            </div>
            <!-- end hamburger-menu -->
        </nav>
      
        <!-- end navbar -->
        <div class="headlines">
                <div class="container">
                        @if (Route::current()->getName() == 'index')
                    <h1>
                        Digital Agency
                    </h1>
                    @elseif(Route::current()->getName() == 'contact')
                    <h1>
                            Contact
                            <br />Digital Agency
                        </h1>
                    @else
                    <h1>/*{{$title['name']}}*/</h1>
                    <h4>{{$title['description']}}</h4>
                    @endif
                    
                </div>
                <!-- end container -->
        </div>       
        <!-- end headlines -->
    </header>
    <!-- end header -->
@endsection