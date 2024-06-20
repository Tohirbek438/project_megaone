@extends('admin.layouts.app')
@section('title','Section header')
@section('content')
    @include('admin.header_section.create-modal')
    <div class="modal fade" id="modalHeader">
        @include('admin.header_section.edit-modal')
    </div>
    <div class="nk-block nk-block-lg col-md-11 mx-4 my-4">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Sayt ma'lumotlar jadvali</h4>
                @if(isset($header))
                    <button style="float: right;" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#modalHeader" onclick="modalHeader({{$header->id}})">Tahrirlash
                    </button>
                @else
                    <button style="float: right;" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#modalForm">Qo'shish
                    </button>
                @endif
            </div>
        </div>
        <div class="card card-preview my-5 mx-2">
            @if(!isset($header))
                <div class="alert alert-danger">Jadvalda ma'lumot mavjud emas!</div>
            @else
                <table class="table table-orders">
                    <tr>
                        <th>Logo</th>
                        <td><img width="120px" height="40px" src="{{\Illuminate\Support\Facades\Storage::url($header->logo)}}" alt=""></td>
                    </tr>
                    <tr>
                        <th>Facebook</th>
                        <td>{{$header->facebook}}</td>
                    </tr>
                    <tr>
                        <th>Twitter</th>
                        <td>{{$header->twitter}}</td>
                    </tr>
                    <tr>
                        <th>Telegram</th>
                        <td>{{$header->telegram}}</td>
                    </tr>
                    <tr>
                        <th>Instagram</th>
                        <td>{{$header->instagram}}</td>
                    </tr>
                    <tr>
                        <th>Sayt haqida</th>
                        <td>{{$header->instagram}}</td>
                    </tr>
                    <tr>
                        <th>Vaqti</th>
                        <td>{{$header->created_at->format('d.m.Y')}}</td>
                    </tr>
                </table>
            @endif
        </div>
    </div>
@endsection
