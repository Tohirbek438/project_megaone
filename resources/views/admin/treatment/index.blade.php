@extends('admin.layouts.app')
@section('title', 'Treatment diseases')
@section('content')
    @include('admin.treatment.create-modal')
    <div class="modal fade" id="editTreatment">
        @include('admin.treatment.edit-modal')
    </div>
    <div class="nk-block nk-block-lg col-lg-11 mx-3 my-2">
        <div class="nk-block-head">
            <button style="float: right;" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#modalForm">Qo'shish</button>
            <div class="nk-block-head-content">

                <h4 class="nk-block-title mx-3 my-3">Davolash foizlari</h4>

                <div class="nk-block-des">
                </div>
            </div>
        </div>
        <div class="card card-preview">
            <div class="card-inner">
                            @if(!$treatments->isEmpty())
                                <div class="card card-preview mx-3 my-3">
                                    <div class="card-inner">

                                        <table class="table" >
                                            <thead>
                                            <tr>
                                                <th>T/r</th>
                                                <th scope="col" colspan="3">Sarlavha</th>
                                                <th scope="col">Foizi</th>
                                                <th scope="col">Vaqti</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @php
                                            $i = 1;
                                            @endphp
                                            @foreach($treatments as $treatment)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$treatment->title_uz}}</td>
                                                    <td>{{$treatment->title_ru}}</td>
                                                    <td>{{$treatment->title_eng}}</td>
                                                    <td>{{$treatment->percent}}%</td>
                                                    <td>{{$treatment->created_at->format('d.m.Y')}}</td>
                                                    <td>
                                                        <a style="display: inline-block"
                                                           href="#"  data-bs-toggle="modal" data-bs-target="#editTreatment" onclick="editTreatment({{$treatment->id}})">
                                                            <i class="fas fa-pen"></i></a>
                                                        <form style="display: inline-block"
                                                              action="{{ route('treatment.destroy',$treatment->id) }}"
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
                            @else
                                <div class="example-alert mx-3 my-3">
                                    <div class="alert alert-danger alert-icon">
                                        Ma'lumot mavjud emas!
                                    </div>
                                </div>
                            @endif
            </div>
        </div>
    </div>
@endsection
