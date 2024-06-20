@extends('admin.layouts.app')
@section('title', 'Admin')
@section('content')
    <div class="nk-block nk-block-lg col-lg-11 mx-4 my-3" style="border-radius: 15px;">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Bo'lim tavsifi</h4>
            </div>
        </div>
        <div class="card card-preview">
            <table class="table table-tranx">
                <tr>
                    <th>Sarlavha uz</th>
                    <td>{{$department->title_uz}}</td>
                </tr>
                <tr>
                    <th>Sarlavha ru</th>
                    <td>{{$department->title_ru}}</td>
                </tr>
                <tr>
                    <th>Sarlavha uz</th>
                    <td>{{$department->title_eng}}</td>
                </tr>
                <tr>
                    <th>Rasm</th>
                    <td>
                        <a href="{{\Illuminate\Support\Facades\Storage::url($department->image->image_url)}}">
                        <img src="{{\Illuminate\Support\Facades\Storage::url($department->image->image_url)}}" width="120px" height="80px;" alt=""></td>
                    </a>
                </tr>
                <tr>
                    <th>Tavsif uz</th>
                    <td>{{$department->description_uz}}</td>
                </tr>
                <tr>
                    <th>Tavsif ru</th>
                    <td>{{$department->description_ru}}</td>
                </tr>
                <tr>
                    <th>Tavsif eng</th>
                    <td>{{$department->description_eng}}</td>
                </tr>
            </table>
        </div>
        <a href="{{route('department.index')}}" class="btn btn-outline-primary mx-3 my-3" >Bo'limlarga Qaytish</a>
        <!-- .card -->
    </div>
@endsection
