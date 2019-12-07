@section('works')
<section class="works">
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
                            <a href="#">Let's work<span></span> <i></i></a>
                        </div>
                        <!-- end custom-btn -->
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
                        <div class="project-content">
                            <h3>
                                <a href="cases/{{$item->id}}"
                                    >{{$item->name}}
                            </h3>
                            <small>{{$item->description}}</small></a
                            >
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