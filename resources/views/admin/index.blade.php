@extends('admin.layouts.app')
@section('title', 'Home page')
@section('content')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Kampaniya boshqaruvi</h3>
                            <div class="nk-block-des text-soft">
                                <p>Kampaniya boshqaruv paneliga xush kelibsiz.</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card h-100 bg-primary">
                                <div class="nk-cmwg nk-cmwg1">
                                    <div class="card-inner pt-3">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-item">
                                                <div class="text-white d-flex flex-wrap">
                                                    <span class="fs-2 me-1"></span>
                                                    <span style="font-size: 24px!important;"
                                                          class="align-self-end fs-14px pb-1">
                                                {{\App\Models\Appointment::all()->count()}}
                                                </span>
                                                </div>
                                                <h6 class="text-white">Uchrashuvga arizalar soni</h6>
                                            </div>
                                            <div class="card-tools me-n1">

                                            </div>
                                        </div>
                                    </div><!-- .card-inner -->
                                    <div class="nk-ck-wrap mt-auto overflow-hidden rounded-bottom">
                                        <div class="nk-cmwg1-ck">
                                            <canvas class="campaign-line-chart-s1 rounded-bottom"
                                                    id="runningCampaign"></canvas>
                                        </div>
                                    </div>
                                </div><!-- .nk-cmwg -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card h-100 bg-info">
                                <div class="nk-cmwg nk-cmwg1">
                                    <div class="card-inner pt-3">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-item">
                                                <div class="text-white d-flex flex-wrap">
                                                 <span style="font-size: 24px!important;"
                                                       class="align-self-end fs-14px pb-1">
                                                {{\App\Models\Blog::all()->count()}}
                                                </span>
                                                </div>
                                                <h6 class="text-white">Bloglar</h6>
                                            </div>
                                            <div class="card-tools me-n1">
                                            </div>
                                        </div>
                                    </div><!-- .card-inner -->
                                    <div class="nk-cmwg1-ck mt-auto">
                                        <canvas class="campaign-line-chart-s1 rounded-bottom"
                                                id="totalAudience"></canvas>
                                    </div>
                                </div><!-- .nk-cmwg -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card h-100 bg-warning">
                                <div class="nk-cmwg nk-cmwg1">
                                    <div class="card-inner pt-3">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-item">
                                                <div class="text-white d-flex flex-wrap">
                                                <span style="font-size: 24px!important;"
                                                      class="align-self-end fs-14px pb-1">
                                                {{\App\Models\User::all()->count()}}
                                                </span>
                                                </div>
                                                <h6 class="text-white">Adminlar</h6>
                                            </div>
                                            <div class="card-tools me-n1">
                                            </div>
                                        </div>
                                    </div><!-- .card-inner -->
                                    <div class="nk-ck-wrap mt-auto overflow-hidden rounded-bottom">
                                        <div class="nk-cmwg1-ck">
                                            <canvas class="campaign-bar-chart-s1 rounded-bottom"
                                                    id="avgRating"></canvas>
                                        </div>
                                    </div>
                                </div><!-- .nk-cmwg -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card h-100 bg-danger">
                                <div class="nk-cmwg nk-cmwg1">
                                    <div class="card-inner pt-3">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-item">
                                                <div class="text-white d-flex flex-wrap">
                                                   <span style="font-size: 24px!important;"
                                                         class="align-self-end fs-14px pb-1">
                                                {{\App\Models\Gallery::all()->count()}}
                                                </span>
                                                </div>
                                                <h6 class="text-white">Medialar</h6>
                                            </div>
                                            <div class="card-tools me-n1">
                                            </div>
                                        </div>
                                    </div><!-- .card-inner -->

                                </div><!-- .nk-cmwg -->
                            </div><!-- .card -->
                        </div><!-- .col -->

                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <br>
                            <h4>Uchrashuvga arizalar</h4>
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
                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
@endsection
