@extends('admin.layouts.app')
@section('title', 'Appointment show')
@section('content')
    <div class="components-preview wide-md mx-auto col-md-12">
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content"><h4 class="nk-block-title">Uchrashuv jadvali</h4>
                </div>
            </div>
            <div class="card card-preview">
                <table class="table table-tranx">
                    <tr>
                        <th>Nomi</th>
                        <td>{{$appointment->name}}</td>
                    </tr>
                    <tr>
                        <th>Telefon no'mer</th>
                        <td>{{$appointment->phone}}</td>
                    </tr>
                    <tr>
                        <th>Vaqti</th>
                        <td>{{$appointment->date}}</td>
                    </tr>
                    <tr>
                        <th>Habar</th>
                        <td>{{$appointment->message}}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            @if($appointment->status == 1)
                                <span style="color:green;">Ko'rildi</span>
                            @else
                                <span style="color:red;">Ko'rilmadi</span>
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

@endsection
