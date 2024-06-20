@extends('admin.layouts.app')
@section('title','Contact information')
@section('content')
    @include('admin.contact.create-modal')
    <div class="modal fade" id="modalContact">
        @include('admin.contact.edit-modal')
    </div>
    <div class="nk-block nk-block-lg col-md-11 mx-4 my-4">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Bog'lanish ma'lumotlari</h4>
                @if(isset($contact))
                    <button style="float: right;" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#modalContact" onclick="modalContact({{$contact->id}})">Tahrirlash
                    </button>
                @else
                    <button style="float: right;" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#modalForm">Qo'shish
                    </button>
                @endif
            </div>
        </div>
        <div class="card card-preview my-5 mx-2">
            @if(!isset($contact))
                <div class="alert alert-danger">Jadvalda ma'lumot mavjud emas!</div>
            @else
                <table class="table table-orders">
                    <tr>
                        <th>Telefon no'mer</th>
                        <td>{{$contact->phone}}</td>
                    </tr>
                    <tr>
                        <th>Office telefon no'mer</th>
                        <td>{{$contact->office_phone}}</td>
                    </tr>
                    <tr>
                        <th>Telegram</th>
                        <td>{{$contact->telegram}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$contact->email}}</td>
                    </tr>
                    <tr>
                        <th>Email savollar uchun</th>
                        <td>{{$contact->inquires}}</td>
                    </tr>
                    <tr>
                        <th>Vaqti</th>
                        <td>{{$contact->created_at->format('d.m.Y')}}</td>
                    </tr>
                </table>
            @endif
        </div>
    </div>
@endsection
