@extends('admin.layouts.app')
@section('title', 'Admin')
@section('content')


    @include('admin.media.create-category-modal')
    <div class="modal fade" id="EditCategoryForm">
        @include('admin.media.category-modal-edit')
    </div>
    <div class="nk-block nk-block-lg col-lg-11 mx-3 my-2">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <button style="float: right;" class="btn btn-outline-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalForm"><span>Turkum qo'shish</span></button>

                <h4 class="nk-block-title">Turkum qo'shish</h4>

            </div>

        </div>
        <div class="card card-preview mt-2">
            <div class="card-inner">
                <table class="datatable-init table">
                    <thead>
                    <tr>
                        <th>T/r</th>
                        <th colspan="3">Sarlavha</th>
                        <th>Vaqti</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$category->title_uz}}</td>
                            <td>{{$category->title_ru}}</td>
                            <td>{{$category->title_en}}</td>
                            <td>{{$category->created_at->format('d.m.Y')}}</td>
                            <td class="">
                                <a style="display: inline-block" data-bs-toggle="modal" data-bs-target="#EditCategoryForm" onclick="editCategoryMedia({{$category->id}})" href="{{ route('media-category.edit',$category->id) }}" ><i class="fas fa-pen"></i></a>
                                <form style="display: inline-block" action="{{ route('media-category.destroy',$category->id) }}" method="POST">
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


