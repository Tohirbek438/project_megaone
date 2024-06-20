@extends('admin.layouts.app')
@section('title','Appointment form')
@section('content')
    @include('admin.form.create-modal')

    <div class="nk-block nk-block-lg col-md-11 mx-4 my-4">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Uchrashuv Formasi jadvali</h4>
                @if(isset($form))
                   <a style="float: right;" href="{{route('form.edit',$form->id)}}" class="btn btn-outline-primary">Tahrirlash</a>
                @else
                    <button style="float: right;" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#modalForm">Qo'shish
                    </button>
                @endif
            </div>
        </div>
        <div class="card card-preview my-5 mx-2">
            @if(!isset($form))
                <div class="alert alert-danger">Jadvalda ma'lumot mavjud emas!</div>
            @else
                <table class="table table-orders">
                    <tbody>
                    <tr>
                        <th>Nomi uz</th>
                        <td>{{$form->name_uz ?? null}}</td>
                    </tr>
                    <tr>
                        <th>Nomi ru</th>
                        <td>{{$form->name_ru ?? null}}</td>
                    </tr>
                    <tr>
                        <th>Nomi en</th>
                        <td>{{$form->name_en ?? null}}</td>
                    </tr>
                    <tr>
                        <th>Email uz</th>
                        <td>{{$form->email_uz ?? null}}</td>
                    </tr>
                    <tr>
                        <th>Email ru</th>
                        <td>{{$form->email_ru ?? null}}</td>
                    </tr>
                    <tr>
                        <th>Email eng</th>
                        <td>{{$form->email_en ?? null}}</td>
                    </tr>
                    <tr>
                        <th>Habar uz</th>
                        <td>{{$form->message_uz ?? null}}</td>
                    </tr>
                    <tr>
                        <th>Habar ru</th>
                        <td>{{$form->message_ru ?? null}}</td>
                    </tr>
                    <tr>
                        <th>Habar eng</th>
                        <td>{{$form->message_en ?? null}}</td>
                    </tr>
                    <tr>
                        <th>Vaqt uz</th>
                        <td>{{$form->date_uz ?? null}}</td>
                    </tr>
                    <tr>
                        <th>Vaqt ru</th>
                        <td>{{$form->date_ru ?? null}}</td>
                    </tr>
                    <tr>
                        <th>Vaqt eng</th>
                        <td>{{$form->date_en ?? null}}</td>
                    </tr>
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection


