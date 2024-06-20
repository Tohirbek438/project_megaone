@extends('admin.layouts.app')
@section('title','Appointments table')
@section('content')

    <div class="nk-block nk-block-lg col-lg-11 mx-3 my-2">
        <div class="nk-block-head">
        </div>
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer mb-4">
            <br>
            <h4 class="mb-4">Uchrashuvga arizalar</h4>
            <div class="row justify-between g-2">
                <div class="col-7 col-sm-4 text-start">
                    <div class="col-5 col-sm-8 text-end">
                        <div class="datatable-filter">
                            <div class="d-flex justify-content-end g-2">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="datatable-wrap my-3">
                    <table class="datatable-init table dataTable no-footer dtr-inline"
                           id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                        <thead>
                        <tr>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" aria-label="Name: activate to sort column ascending">F.I.SH
                            </th>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                rowspan="1" colspan="1"
                                aria-label="Position: activate to sort column descending"
                                aria-sort="ascending">Tel no'mer
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" aria-label="Office: activate to sort column ascending">Vaqti
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" aria-label="Age: activate to sort column ascending">Holati
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1" aria-label="Start date: activate to sort column ascending">Ko'rilgan vaqti
                            </th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(\App\Models\Appointment::all() as $appointment)
                            <tr class="odd">
                                <td class="dtr-control" tabindex="0">{{$appointment->name}}</td>
                                <td class="sorting_1">{{$appointment->phone}}</td>
                                <td>{{$appointment->date}}</td>
                                <td>
                                    @if($appointment->status == 1)
                                        <span style="color:green;">Ko'rildi</span>
                                    @else
                                        <span style="color:red;">Ko'rilmadi</span>
                                    @endif
                                </td>
                                <td>{{$appointment->updated_at}}</td>
                                <td>
                                    <a href="{{route('table.show',$appointment->id)}}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <a class="btn btn-outline-primary" href="{{route('admin.index')}}">Qaytish</a>
    </div>

















@endsection
