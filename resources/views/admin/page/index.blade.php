@extends('admin.layouts.app')
@section('title','Pages')
@section('content')
    <div class="nk-block nk-block-lg col-md-11 mx-4 my-4">
        <div class="nk-block-head">
            <a href="{{route('page.create')}}" class="btn btn-outline-primary mb-4" style="float: right">Sahifa qo'shish</a>
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Sahifalar jadvali</h4>
            </div>
        </div>
        <div class="card card-preview my-4">
            <table class="table table-orders">
                <thead class="tb-odr-head bg-light bg-opacity-75">
                <tr class="tb-odr-item">
                    <th class="tb-odr-info">
                        <span class="tb-odr-id">T/r</span>
                        <span class="tb-odr-date d-none d-md-inline-block">Nomi</span>
                    </th>
                    <th class="tb-odr-amount">
                        <span class="tb-odr-status d-none d-md-inline-block">Status</span>
                    </th>
                    <th>Vaqti</th>
                    <th></th>
                </tr>
                </thead>
                <tbody class="tb-odr-body">
                @php
                    $i = 1;
                @endphp
                @foreach($pages as $page)
                    <tr class="tb-odr-item">
                        <td class="tb-odr-info">
                            <span class="tb-odr-id">{{$i++}}</span>
                            <span class="tb-odr-date">{{$page->name_uz}}</span>
                        </td>
                        <td class="tb-odr-amount">
                        <span class="tb-odr-status">
                            @if($page->status == 1)
                                <span class="badge badge-dot bg-success">Chop etilgan</span>
                            @elseif($page->status == 2)
                                <span class="badge badge-dot bg-info">Kutilmoqda</span>
                            @elseif($page->status == 3)
                                <span class="badge badge-dot bg-warning">Qoralama</span>
                            @endif
                        </span>
                        </td>
                        <td>{{$page->date}}</td>
                        <td class="tb-odr-action">
                            <div class="tb-odr-btns d-none d-md-inline">
                                <a href="{{route('page.show',$page->name_uz)}}" class="btn btn-sm btn-primary">Ko'rish</a>
                            </div>
                            <div class="dropdown">
                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"
                                   data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                    <ul class="link-list-plain">
                                        <li><a href="{{route('page.edit',$page->id)}}" class="text-primary">Tahrirlash</a></li>
                                        <li><a href="{{route('page.show',$page->name_uz)}}" class="text-primary">Ko'rish</a></li>
                                        <li><a href="#" class="text-danger">O'chirish</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
