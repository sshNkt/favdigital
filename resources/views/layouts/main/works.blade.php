@section('works')
<section class="works" data-works="works">
        <div class="container">
            <ul>
                <li>
                    <div class="titles">
                        <h2>Explore recent works</h2>
                        <p>
                            We’re constantly refining our product. Adding new
                            features. Working to help your section business
                            grow.
                        </p>
                        <div class="custom-btn">
                            <button id="letsWork">Let's work<span></span> <i></i></button>
                        </div>
                        <!-- end custom-btn -->
                        @yield('workform')
                    </div>
                    <!-- end titles -->
                </li>
                @foreach ($works as $item)
                <li>
                    <div class="project-box">
                        <figure class="project-image reveal-effect masker wow"> 
                                <a href="cases/{{$item->id}}"
                                    ><img class="img-effect" src="images/{{$item->img}}" alt="Image"
                            /></a>
                        </figure>
                        <div class="project-content custom-link">
                            <h3>
                                <a href="cases/{{$item->id}}"
                                    >{{$item->name}}
                                </a>
                                    <hr>
                            </h3>
                            <small>{{$item->description}}</small>
                        </div>
                        <!-- end project-content -->
                    </div>
                    <!-- end project-box -->
                </li>
                @endforeach
            </ul>
        </div>
        <!-- end container -->
    </section>
@endsection