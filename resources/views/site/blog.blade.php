<section id="ourblogs" class="bg-light">
    <div class="container">
        @if(isset($blog_start))
            @foreach($blog_start as $blog)
                <div class="row align-items-center mb-5">
                    <div class="col-md-6 order-md-2 wow fadeInRight">
                        <!--Blog Content-->
                        <div class="blog-text">
                            <h2>{{$blog->{'title_'.App::getLocale() } ?? null}}</h2>
                            <p>{{$blog->{'description_'.App::getLocale() } ?? null}}</p>
                            <a href="{{route('blogs')}}"
                               class="btn btn-rounded btn-large btn-drk-blue fadeInDown-slide animated  text-uppercase">Batafsil</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!--Blog Image-->
                        <div class="img-hvr">
                            <div class="date">
                                <h5 class="m-0">{{$blog->created_at->format('d') ?? null}}</h5>
                                <h5 class="m-0">{{$blog->created_at->format('M') ?? null}}</h5>
                                <h5 class="m-0">{{$blog->created_at->format('Y') ?? null}}</h5>
                            </div>
                        </div>
                        <div id="blog-slider" class=" owl-carousel">
                            <div class="item blog-image wow hover-effect fadeInLeft">
                                <img src="{{\Illuminate\Support\Facades\Storage::url($blog->image->image_url) ?? null}}"
                                     alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
        @endif

        @foreach($blog_end as $blog)
            <div class="row align-items-center">
                <div class="col-md-6 wow fadeInLeft">
                    <!--Blog Content-->
                    <div class="blog-text">
                        <h2>{{$blog->{'title_'.App::getLocale() } ?? "" }}</h2>
                        <p>{{$blog->{'description_'.App::getLocale() }  ?? null}}</p>
                        <a href="{{route('blogs')}}"
                           class="btn btn-rounded btn-large btn-drk-blue fadeInDown-slide animated  text-uppercase">Batafsil</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-hvr">
                        <div class="date-2">
                            <h5 class="m-0">{{$blog->created_at->format('d') ?? null}}</h5>
                            <h5 class="m-0">{{$blog->created_at->format('M') ?? null}}</h5>
                            <h5 class="m-0">{{$blog->created_at->format('Y')?? null}}</h5>
                        </div>
                    </div>
                    <!--Blog Image-->
                    <div id="blog-slider-1" class="owl-carousel">
                        <div class="item blog-image2 text-right hover-effect wow fadeInRight">
                            <img src="{{\Illuminate\Support\Facades\Storage::url($blog->image->image_url) ?? null}}"
                                 alt="image">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
