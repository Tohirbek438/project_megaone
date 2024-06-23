@extends('admin.layouts.app')
@section('title', 'Blogs')
@section('content')

    <div class="container-class">
    </div>
    <div class="nk-block nk-block-lg col-lg-11 mx-3 my-2">
        <div class="nk-block-head">
            <a href="{{route('blog.create')}}" class="btn btn-outline-primary mb-4" style="float: right;">Blog qo'shish</a>
            <div class="nk-block-head-content">

                <h4 class="nk-block-title mx-4 my-3">Bloglar jadvali</h4>
                <div class="nk-block-des">
                </div>
            </div>
        </div>
        <div class="card card-preview">
            <div class="card-inner">
                <table class="datatable-init table">
                    <thead>
                    <tr>
                        <th>T/r</th>
                        <th>Sarlavha</th>
                        <th>Turkumi</th>
                        <th>Rasmi</th>
                        <th>Vaqti</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach($blogs as $blog)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$blog->title_uz}}</td>
                            <td>{{$blog->blog_category->title_uz}}</td>
                            <td>
                                <img src="{{ Storage::url($blog->image->image_url) }}" width="100" height="60">
                            </td>
                            <td>{{$blog->created_at->format('d.m.Y')}}</td>
                            <td class="">
                                <a style="display: inline-block" href="{{route('blog.show',$blog->id)}}" class="fas fa-eye"></a>
                                <a style="display: inline-block" href="{{ route('blog.edit',$blog->id) }}"><i class="fas fa-pen"></i></a>
                                <form style="display: inline-block" action="{{ route('blog.destroy',$blog->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="fas fa-trash" style="border:none;background:none;color:#733AEA"></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
