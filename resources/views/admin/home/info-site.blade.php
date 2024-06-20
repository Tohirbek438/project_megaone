@extends('admin.layouts.app')
@section('title','Information home')
@section('content')
    @include('admin.home.create-menu')
    <div class="modal fade" id="editHome">
        @include('admin.home.edit-modal')
    </div>
    <div class="modal fade" id="showHome">
        @include('admin.home.show-modal')
    </div>
    <div class="nk-block nk-block-lg col-md-11 mx-4 my-4">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Ma'lumotlar jadvali</h4>
                @if($pages->count() > 2)
                @else
                    <button style="float: right;" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#modalForm">Qo'shish
                    </button>
                @endif
            </div>
        </div>
        <div class="card card-preview my-5 mx-2">
            @if($pages->isEmpty())
                <div class="alert alert-danger">Jadvalda ma'lumot mavjud emas!</div>
            @else
                <table class="table table-orders">
                    <thead class="tb-odr-head bg-light bg-opacity-75">
                    <tr class="tb-odr-item">

                        <th>
                            <span class="tb-odr-date d-none d-md-inline-block">Nomi</span>
                        </th>
                        <th>Tavsif</th>
                        <th>Vaqti</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach($pages as $page)
                        <tr>

                            <td>{{$page->name_uz}}
                            </td>
                            <td><p>{{$page->description_uz}}</p></td>
                            <td>{{$page->created_at->format('d.m.Y')}}</td>
                            <td style="min-width: 5%;">
                                <a href="#" onclick="showHome({{$page->id}})" data-bs-toggle="modal"
                                   data-bs-target="#showHome"><i class="fas fa-eye"></i></a>
                                <a href="#" onclick="editHome({{$page->id}})" class="text-primary ml-3"
                                   data-bs-toggle="modal" data-bs-target="#editHome"><i
                                        class="fas fa-pen"></i></a>
                                <a style="cursor: pointer;" onclick="deleteMenu({{$page->id}})" class="text-danger"><i
                                        class="fas fa-trash"></i></a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection


