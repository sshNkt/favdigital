@section('slider')

<section class="slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach ($slides as $item)
                <div class="swiper-slide" data-background="images/{{$item->img}}">
                    <div class="slide-inner">
                        
                        <h2>{{$item->text}}</h2>
                        {{-- <div class="link">
                            <a href="/{{$item->btn_link}}">SEE CASE STUDY</a>
                        </div> --}}
                        <!-- end link -->
                    </div>
                    <!-- end slide-inner -->
                </div>
                <!-- end swiper-slide -->
                @endforeach
            </div>
            <!-- end swiper-wrapper -->
            <div class="swiper-pagination"></div>
            <!-- end swiper-pagination -->
            <div class="swiper-button-next"><span></span><b>NEXT</b></div>
            <!-- end swiper-button-next -->
        </div>
        <!-- end swiper-container -->
    </section>
    <!-- end slider -->
@endsection