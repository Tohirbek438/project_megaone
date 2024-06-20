@extends('admin.layouts.app')
@section('title', 'Comment page')
@section('content')
    <div class="nk-block nk-block-lg col-md-11 mx-3 ml-3 my-3">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Sharhlar jadvali</h4>
            </div>
        </div>
        <div class="card card-preview">
            <div class="card-inner">
                <table class="datatable-init table">
                    <thead>
                    <tr>
                        <th>F.i.sh</th>
                        <th>Davlat</th>
                        <th>Shahar</th>
                        <th>Vaqti</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($comments as $comment)
                        <tr>
                            <td>{{$comment->name}}</td>
                            <td>{{$comment->country}}</td>
                            <td>{{$comment->city}}</td>
                            <td>{{$comment->created_at->format('d.m.Y')}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- .card-preview -->
    </div>
@endsection
