@extends('blogs.layouts.app')
@section('title', 'Blogs')
@section('content')
    <?php $page = \App\Models\Page::where('menu_category', $menu->id)->first() ?>
    <section id="ourblogs" class="blog-banner"
             style="background: url({{\Illuminate\Support\Facades\Storage::url($page->image->image_url)}}) no-repeat;
    padding-top: 190px;
    padding-bottom: 160px;
    background-attachment: inherit;
    background-size: cover;
    background-position: top center;">
        <div class="container text-center text-md-right">
            <p class="font-weight-normal"><a class="text-white" href="{{route('home')}}">@lang('words.home')</a> / <span
                    class="main-color">Blog</span></p>
            <h1>{{$page->{'title_'.App::getLocale()} }}</h1>
        </div>
    </section>
    <section class="bg-grey">
        <div class="container">
            <div class="row mb-4">
                @if(!$results->isEmpty())
                @foreach($results as $blog)
                    <div class="col-lg-4 col-md-6 col-12" style="min-height:600px">
                        <div class="blog-panel">
                            <p>{{$blog->created_at->format('M d, Y')}} / <span><a>{{$blog->blog_category->{'title_'. App::getLocale()} }}</a></span></p>
                            <h5>{{$blog->{'title_'. App::getLocale() } }}</h5>
                            <div class="panel-img"><img src="{{\Illuminate\Support\Facades\Storage::url($blog->image->image_url)}}" alt="img"></div>
                            <a style="color:black;" href="{{route('site.show',$blog->id)}}">
                                <p>{{$blog->{'description_' .App::getLocale() } }}</p>
                            </a>
                        </div>
                    </div>
                @endforeach
                @else
                    <div class="alert alert-danger col-md-10" style="margin: 30px auto;">@lang('words.not_found')</div>
                @endif
            </div>
        </div>


    </section>

@endsection
