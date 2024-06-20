
@extends('blogs.layouts.app')
@section('title', 'Blogs')
@section('content')
<section id="ourblogs" class="blog-banner">
    <div class="container text-center text-md-right">

        <p class="font-weight-normal"><a class="text-white" href="index.html">Home</a> / <span class="main-color">Blog</span></p>

        <h1>Our Blog</h1>
        <p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit <br> vestibulum auctor nunc vitae diam eleifend.</p>

    </div>
</section>

<section class="bg-grey">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-panel">
                    <p>Oct 15, 2019 / <span><a href="index.html"> Surgery</a></span></p>
                    <h5>Important Medical Info</h5>
                    <div class="panel-img"><img src="img/blog-image1.jpg" alt="img"></div>
                    <p>The third Monday of January is supposed to be a depressing day of the year.
                        Whether you believe that or not, the long nights, cold weather and trying to keep to new.</p>
                    <div class="img-link"><img src="img/testimonial-1.png" alt="img"><span class="name-link">by: <span><a href="index.html">Lisa Williams</a></span> </span> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-panel">
                    <p>Oct 15, 2019 / <span><a href="{{ route('admin.index') }}"> Theory</a></span></p>
                    <h5>Doctors Guidelines</h5>
                    <div class="panel-img"><img src="img/blog-image2.jpg" alt="img"></div>
                    <p>The third Monday of January is supposed to be a depressing day of the year.
                        Whether you believe that or not, the long nights, cold weather and trying to keep to new.</p>
                    <div class="img-link"><img src="img/testimonial-1.png" alt="img"><span class="name-link">by: <span><a href="index.html">Lisa Williams</a></span> </span> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-panel">
                    <p>Oct 15, 2019 / <span><a href="index.html"> Clinical</a></span></p>
                    <h5>Lab Testing Info</h5>
                    <div class="panel-img"><img src="img/blog-image3.jpg" alt="img"></div>
                    <p>The third Monday of January is supposed to be a depressing day of the year.
                        Whether you believe that or not, the long nights, cold weather and trying to keep to new.</p>
                    <div class="img-link"><img src="img/testimonial-1.png" alt="img"><span class="name-link">by: <span><a href="index.html">Lisa Williams</a></span> </span> </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-panel">
                    <p>Oct 15, 2019 / <span><a href="index.html"> Theory</a></span></p>
                    <h5>Doctors Guidelines</h5>
                    <div class="panel-img"><img src="img/blog-image4.jpg" alt="img"></div>
                    <p>The third Monday of January is supposed to be a depressing day of the year.
                        Whether you believe that or not, the long nights, cold weather and trying to keep to new.</p>
                    <div class="img-link"><img src="img/testimonial-1.png" alt="img"><span class="name-link">by: <span><a href="index.html">Lisa Williams</a></span> </span> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-panel">
                    <p>Oct 15, 2019 / <span><a href="index.html"> Clinical</a></span></p>
                    <h5>Lab Testing Info</h5>
                    <div class="panel-img"><img src="img/blog-image5.jpg" alt="img"></div>
                    <p>The third Monday of January is supposed to be a depressing day of the year.
                        Whether you believe that or not, the long nights, cold weather and trying to keep to new.</p>
                    <div class="img-link"><img src="img/testimonial-1.png" alt="img"><span class="name-link">by: <span><a href="index.html">Lisa Williams</a></span> </span> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-panel">
                    <p>Oct 15, 2019 / <span><a href="index.html"> Surgery</a></span></p>
                    <h5>Important Medical Info</h5>
                    <div class="panel-img"><img src="img/blog-image6.jpg" alt="img"></div>
                    <p>The third Monday of January is supposed to be a depressing day of the year.
                        Whether you believe that or not, the long nights, cold weather and trying to keep to new.</p>
                    <div class="img-link"><img src="img/testimonial-1.png" alt="img"><span class="name-link">by: <span><a href="index.html">Lisa Williams</a></span> </span> </div>
                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-panel">
                    <p>Oct 15, 2019 / <span><a href="index.html"> Clinical</a></span></p>
                    <h5>Lab Testing Info</h5>
                    <div class="panel-img"><img src="img/blog-image3.jpg" alt="img"></div>
                    <p>The third Monday of January is supposed to be a depressing day of the year.
                        Whether you believe that or not, the long nights, cold weather and trying to keep to new.</p>
                    <div class="img-link"><img src="img/testimonial-1.png" alt="img"><span class="name-link">by: <span><a href="index.html">Lisa Williams</a></span> </span> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-panel">
                    <p>Oct 15, 2019 / <span><a href="index.html"> Surgery</a></span></p>
                    <h5>Important Medical Info</h5>
                    <div class="panel-img"><img src="img/blog-image1.jpg" alt="img"></div>
                    <p>The third Monday of January is supposed to be a depressing day of the year.
                        Whether you believe that or not, the long nights, cold weather and trying to keep to new.</p>
                    <div class="img-link"><img src="img/testimonial-1.png" alt="img"><span class="name-link">by: <span><a href="index.html">Lisa Williams</a></span> </span> </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-panel">
                    <p>Oct 15, 2019 / <span><a href="index.html"> Theory</a></span></p>
                    <h5>Doctors Guidelines</h5>
                    <div class="panel-img"><img src="img/blog-image2.jpg" alt="img"></div>
                    <p>The third Monday of January is supposed to be a depressing day of the year.
                        Whether you believe that or not, the long nights, cold weather and trying to keep to new.</p>
                    <div class="img-link"><img src="img/testimonial-1.png" alt="img"><span class="name-link">by: <span><a href="index.html">Lisa Williams</a></span> </span> </div>
                </div>
            </div>
        </div>

        <nav class="pagination blog-post-navigation" aria-label="Posts navigation">
            <a class="next page-link mr-3" href="#"><i class="fa fa-arrow-left"></i></a>
            <span aria-current="page" class="page-link current mr-3">1</span>
            <span aria-current="page" class="page-link mr-3">2</span>
            <a class="next page-link " href="#"><i class="fa fa-arrow-right"></i></a>
        </nav>

    </div>


</section>

@endsection
