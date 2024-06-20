<section id="pateintgallery">
    @if(isset($page))
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="port">

                        <div class="portfolio-title"><h2><span
                                    class="title-clr">{{$page_gallery->{'name_'. App::getLocale()} }}</span></h2></div>
                        <div class="portfolio-subtitle"><p>{{$page_gallery->{'title_'. App::getLocale()} }}</p></div>
                    </div>
                    <div class="nav nav-pills mb-4 mb-md-4 d-flex justify-content-center filtering">
                        <span data-filter="*" class="pointer nav-link active is-checked">All</span>
                        @foreach($categories as $category)
                            <span class="pointer nav-link"
                                  data-filter=".{{$category->{'title_' .App::getLocale()} }}">{{$category->{'title_' .App::getLocale()} }}</span>
                        @endforeach
                    </div>

                    <ul class="da-thumbs gallery">
                        @foreach($galleries as $gallery)
                            <li class="items {{$gallery->category->{'title_'.App::getLocale()} }}">
                                <img src="{{\Illuminate\Support\Facades\Storage::url($gallery->image->image_url)}}"
                                     alt="img">
                                <div class="overlay">
                                    <a href="{{\Illuminate\Support\Facades\Storage::url($gallery->image->image_url)}}"
                                       class="text-center" data-fancybox="images">
                                        <div class="search-icon"><i class="fa fa-search"></i></div>
                                        <h4 class="">{{$gallery->category->{'title_'.App::getLocale()} }}</h4>
                                    </a>
                                </div>
                            </li>
                        @endforeach


                    </ul>
                </div>
            </div>
        </div>
    @else
    @endif
</section>
