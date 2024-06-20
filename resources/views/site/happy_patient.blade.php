<section class="bg-testimonial">
    <div class="container">
        <div class="row">
            <div class="test">
                <div class="testimonial-title"><h2>Happy Patient</h2></div>
                <div class="testimonial-subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Vivamus in velit dolor.
                        Vivamus gravida, neque nec interdum cursus, erat ligula.</p></div>
            </div>
        </div>

        <div class="row">
            <div id="testimonial_slider" class="owl-carousel">

                <!--testimonial item-->
                @if(!$happy_patients->isEmpty())
                    @foreach($happy_patients as $comment)
                    <div class="testimonial-item item">
                        <i class="fa fa-quote-left testimonial-icon gradient-text1"></i>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in velit dolor.
                            Vivamus gravida, neque nec interdum cursus, erat ligula porta nibh.
                        </p>

                        <!--Image-->
                        <div class="testimonial-image">
                            <img src="medical/img/testimonial-1.png" alt="image">
                        </div>
                        <h5 class="font-weight-500 main-font drk-blu">{{$comment->name}}</h5>
                        <span class="destination main-font">{{$comment->country}}, {{$comment->city}}</span>
                    </div>
                    @endforeach
                @else
                @endif
                <!--testimonial item-->


            </div>

        </div>
    </div>
</section>

