@extends('admin.layouts.app')
@section('title','Pages')
@section('content')
    @include('admin.page.create-menu')
    <div class="modal fade" id="editForm">
        @include('admin.page.edit-modal')
    </div>
    <div class="nk-block nk-block-lg col-md-11 mx-4 my-4">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Menyular jadvali</h4>
                <button style="float: right;" class="btn btn-outline-primary" data-bs-toggle="modal"
                        data-bs-target="#modalForm">Qo'shish
                </button>
            </div>
        </div>
        <div class="card card-preview my-5 mx-2">
            @if($pages->isEmpty())
             <div class="alert alert-danger">Jadvalda ma'lumot mavjud emas!</div>
            @else
                <table class="table table-orders">
                    <thead class="tb-odr-head bg-light bg-opacity-75">
                    <tr class="tb-odr-item">

                        <th colspan="3">
                            <span class="tb-odr-date d-none d-md-inline-block">Nomi</span>
                        </th>
                        <th>Taglar</th>
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
                            <td>{{$page->name_ru}}</td>
                            <td> {{$page->name_eng}}</td>
                            <td>{{$page->tags}}</td>
                            <td>{{$page->created_at->format('d.m.Y')}}</td>
                            <td class="tb-odr-action">

                                <a href="#" onclick="editMenu({{$page->id}})" class="text-primary ml-3"
                                   data-bs-toggle="modal" data-bs-target="#editForm"><i
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

