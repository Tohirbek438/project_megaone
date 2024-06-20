@extends('admin.layouts.app')
@section('title','One page')
@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="content-page wide-md m-auto">
                        <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                            <div class="nk-block-head-content text-center"><h2 class="nk-block-title fw-normal">{{$page->name_uz}}</h2>
                                <div class="nk-block-des"><p class="lead">{{$page->title_uz}}</p></div>
                            </div>
                        </div>
                        <div class="nk-block">
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <ul class="nav nav-tabs mt-n3" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#tabItem1"
                                               aria-selected="true" role="tab">Uzbek</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tabItem2"
                                               aria-selected="false" role="tab" tabindex="-1">Русский</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#tabItem3"
                                               aria-selected="false" role="tab" tabindex="-1">English</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active show" id="tabItem1" role="tabpanel">
                                            <div class="card-inner card-inner-xl">
                                                <article class="entry"><h3>{{$page->name_uz}}</h3>
                                                    <p>{{$page->title_uz}}</p>

                                                        <div class="col-md-12">
                                                            <img width="100%" height="500px" src="{{\Illuminate\Support\Facades\Storage::url($page->image->image_url)}}">
                                                        </div>

                                                    <p class="my-3">{{$page->description_uz}}</p>

                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tabItem2" role="tabpanel">
                                            <div class="card-inner card-inner-xl">
                                                <article class="entry"><h3>{{$page->name_ru ?? "Информация недоступна"}}</h3>
                                                    <p>{{$page->title_ru ?? "Информация недоступна"}}</p>
                                                        <div class="col-md-12">
                                                            <img width="100%" height="500px" src="{{\Illuminate\Support\Facades\Storage::url($page->image->image_url)}}">
                                                        </div>
                                                    <p class="my-3">{{$page->description_ru ?? "Информация недоступна"}}</p>

                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tabItem3" role="tabpanel">
                                            <div class="card-inner card-inner-xl">
                                                <article class="entry"><h3>{{$page->name_ru ?? "Name is not available!"}}</h3>
                                                    <p>{{$page->title_ru ?? "Title is not available!"}}</p>
                                                        <div class="col-md-12">
                                                            <img width="100%" height="500px" src="{{\Illuminate\Support\Facades\Storage::url($page->image->image_url)}}">
                                                        </div>
                                                    <p class="my-3">{{$page->description_eng ?? "Information is not available!"}}</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
