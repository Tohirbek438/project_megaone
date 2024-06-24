@extends('admin.layouts.app')
@section('title', 'Information site page')
@section('content')
    @include('admin.information.create-modal')
    <div class="modal fade" id="editInformation">
        @include('admin.information.edit-modal')
    </div>
    <div class="nk-block nk-block-lg col-lg-11 mx-3 my-2">
        <div class="nk-block-head">
            @if($informations->isEmpty())
                <button style="float: right;" class="btn btn-primary mb-4" data-bs-toggle="modal"
                        data-bs-target="#modalForm">Qo'shish
                </button>
            @else
            @endif
            <div class="nk-block-head-content">
                <h4 class="nk-block-title mx-3 my-3">Bo'limlar haqida ma'lumot </h4>
                <div class="nk-block-des">
                </div>
            </div>
        </div>
        <div class="card card-preview">
            <div class="card-inner">
                @if(!$informations->isEmpty())
                    <div class="card card-preview mx-3 my-3">
                        <div class="card-inner">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Bemorlar soni</th>
                                    <th scope="col">Holatlar soni</th>
                                    <th scope="col">Uchrashuvlar soni</th>
                                    <th scope="col">Shifokorlar soni</th>
                                    <th scope="col">Vaqti</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($informations as $information)
                                    <tr>
                                        <td>{{$information->patients}}</td>
                                        <td>{{$information->cases}}</td>
                                        <td>{{$information->appointments}}</td>
                                        <td>{{$information->doctors}}</td>
                                        <td>{{$information->created_at->format('d.m.Y')}}</td>
                                        <td>
                                            <a style="display: inline-block"
                                               href="#" data-bs-toggle="modal" data-bs-target="#editInformation"
                                               onclick="editInformation({{$information->id}})">
                                                <i class="fas fa-pen"></i></a>
                                            <form style="display: inline-block" action="{{ route('information.destroy',$information->id) }}" method="POST">
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
