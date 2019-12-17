@section('case')
<section class="page-header">
        <figure>
            <img src="../images/projects/{{$info['image1']}}" alt="Image">
        </figure>
        </section>
        <!-- end page-header -->
        <section class="case-detail">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-8">
                <h5>CASE REVIEW</h5>
                    <p>{{$info['review']}}</p>
                </div>
                <!-- end col-8 -->
                <div class="col-md-6">
                    <h6>CASE TIMELINE</h6>
                    <p>{{$info['timeLine']}}</p>
                </div>
                <!-- end col-6 -->
                <div class="col-md-6">
                    <h6>BRAND</h6>
                    <p>{{$title['description']}}</p>
                </div>
                <!-- end col-6 -->
                <div class="col-12"><figure><img src="../images/projects/{{$info['image2']}}" alt="Image"></figure></div>
                <!-- end col-12 -->
                <div class="col-lg-8">

                    <p>{{$info['wireframing']}}</p>
                </div> 
                <!-- end col-8 -->
                <div class="col-lg-6"><figure><img src="../images/projects/{{$info['image3']}}" alt="Image"></figure></div>
                <!-- end col-6 -->
                <div class="col-lg-6"><figure><img src="../images/projects/{{$info['image4']}}" alt="Image"></figure></div>
                <!-- end col-6 -->
                <div class="col-md-6">
                    <h6>COLORS</h6>
                    <p>{{$info['colors']}}</p>
                </div>
                <!-- end col-6 -->
                <div class="col-md-6">
                    <h6>Website</h6>
                    <p>{{$info['link']}}</p>
                </div>
                <!-- end col-6 -->
                <div class="col-12"><figure><img src="../images/{{$title['img']}}" alt="Image"></figure></div>
                <!-- end col-12 -->
                <div class="col-12">
                    <h3>Thanks for Watching</h3>
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
            </div>
        <!-- end container -->
        </section>
        <!-- end case-detail -->
@endsection