@extends('admin.layouts.app')
@section('title', 'Admin')
@section('content')
    .
    <div class="modal fade" id="departmentForm">
    @include('admin.department.modal-create-department')
    </div>
    <div class="nk-block nk-block-lg col-lg-11 mx-3 my-2">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <button style="float: right;" class="btn btn-outline-primary btn-lg" data-bs-toggle="modal"
                        data-bs-target="#departmentForm"><span>Bo'lim qo'shish</span></button>
                <h4 class="nk-block-title">Bo'limlar jadvali</h4>
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
                        <th colspan="3">Sarlavha</th>
                        <th>Rasmi</th>
                        <th>Vaqti</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach($departments as $department)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$department->title_uz}}</td>
                            <td>{{$department->title_ru}}</td>
                            <td>{{$department->title_eng}}</td>
                            <td>
                                <img src="{{ Storage::url($department->image->image_url) }}" width="80" height="60">
                            </td>
                            <td>{{$department->created_at->format('d.m.Y')}}</td>
                            <td class="">
                                <a style="display: inline-block" href="{{route('department.show',$department->id)}}" class="fas fa-eye"></a>
                                <a style="display: inline-block" href="{{ route('department.edit',$department->id) }}"><i
                                        class="fas fa-pen"></i></a>
                                <form style="display: inline-block" action="{{ route('department.destroy',$department->id) }}"
                                      method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="fas fa-trash"
                                            style="border:none;background:none;color:#733AEA"></button>
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

