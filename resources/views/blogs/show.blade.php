@extends('blogs.layouts.app')
@section('title', 'Blog show')
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
            <h1>{{$blog->{'title_'.App::getLocale()} }}</h1>
        </div>
    </section>
    <section class="blog-body">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="blog-topic">
                        <h5 class="mb-4">@lang('words.category_blog')</h5>
                        <ul>
                            <li><a href="{{route('blogs-index')}}">@lang('words.all')</a> <span class="dots"></span>
                                <p></p></li>
                            @foreach($categories as $category)
                            <li><a href="{{route('blogs-index',['name' => $category->title_uz])}}">{{$category->{'title_'.App::getLocale() } }}</a> <span class="dots"></span>
                                <p></p></li>
                            @endforeach
                        </ul>

                    </div>
                    <div class="blog-post">
                        <h5 class="mb-4">@lang('words.popular_posts')</h5>
                        @foreach($last_blogs as $last_blog)
                            <div class="media">
                                <a href="{{\Illuminate\Support\Facades\Storage::url($last_blog->image->image_url)}}"> <img src="{{\Illuminate\Support\Facades\Storage::url($last_blog->image->image_url)}}" class="mr-3" alt="..."></a>
                                <div class="media-body">
                                    <h5 class="mt-1">{{$last_blog->{'title_'.App::getLocale()} }}</h5>
                                    <p><span class="author">@lang('words.writer_by')</span><a>{{$last_blog->writer_by}}</a></p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <article class="blog-classic">
                        <div class="post-thumbnail">
                            <img src="{{\Illuminate\Support\Facades\Storage::url($blog->image->image_url)}}"
                                 alt="this is a post">
                        </div>
                        <h2 class="post-title">
                            <a href="#" rel="bookmark">{{$blog->{'title_' .App::getLocale() } }}</a>
                        </h2>
                        <div class="post-details alt-font">{{$blog->created_at->format('d M , Y') }}<span
                                class="post-date"></span> <span class="post-separator">|</span>
                            <span class="post-author">
                            <a>{{$blog->writer_by}}</a>
                            </span>
                        </div>
                        <div class="post-content">

                            <p>{{$blog->{'description_' .App::getLocale() } }}</p>

                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
