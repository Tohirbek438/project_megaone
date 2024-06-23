@extends('admin.layouts.app')
@section('title', 'Blog show')
@section('content')
    <div class="nk-block nk-block-lg col-lg-11 mx-4 my-2">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="title nk-block-title">{{$blog->title_uz}}</h4>
            </div>
        </div>
        <div class="card card-preview">
            <div class="card-inner">
                <div class="preview-block">
                    <table class="table table-tranx">
                        <tr>
                            <th>Sarlavha uz</th>
                            <td>{{$blog->title_uz}}</td>
                        </tr>
                        <tr>
                            <th>Sarlavha ru</th>
                            <td>{{$blog->title_ru}}</td>
                        </tr>
                        <tr>
                            <th>Sarlavha en</th>
                            <td>{{$blog->title_en}}</td>
                        </tr>
                        <tr>
                            <th>Tavsif uz</th>
                            <td>{{$blog->description_uz}}</td>
                        </tr>
                        <tr>
                            <th>Tavsif ru</th>
                            <td>{{$blog->description_ru}}</td>
                        </tr>
                        <tr>
                            <th>Tavsif en</th>
                            <td>{{$blog->description_en}}</td>
                        </tr>
                        <tr>
                            <th>Avtor</th>
                            <td>{{$blog->description_en}}</td>
                        </tr>
                        <tr>
                            <th>Turkumi</th>
                            <td>{{$blog->blog_category->title_uz}}</td>
                        </tr>
                        <tr>
                            <th>Rasmi</th>
                            <td><img width="200px" height="150px" src="{{\Illuminate\Support\Facades\Storage::url($blog->image->image_url)}}" alt="" srcset=""></td>
                        </tr>
                    </table>
                    <a href="{{route('blog.index')}}" class="btn btn-outline-primary my-4 mx-3">Orqaga qaytish</a>
                </div>
            </div>
        </div>
    </div>
@endsection
