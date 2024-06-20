@extends('admin.layouts.app')
@section('title', 'Admin')
@section('content')
    @include('admin.media.media-create-modal')
    <div class="modal fade zoom" tabindex="-1" id="editForm">
        @include('admin.media.modal-edit')
    </div>
    <div class="modal fade zoom" tabindex="-1" id="modalZoom">
        @include('admin.media.modal-view')
    </div>
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Galleriyalar</h3>
                        </div>
                        <div class="nk-block-head-content">
                            <div class="dropdown mr-2">
                                <a class="btn btn-primary dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Turkumlar</a>
                                <div class="dropdown-menu" style="">
                                    <ul class="link-list-opt">
                                        @foreach($categories as $category)
                                            <li><a href="{{route('categoryforGallery',$category->title_uz)}}"><span>{{$category->title_uz}}</span></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <button  class="btn btn-outline-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalForm"><span>Add Media</span></button>

                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        @foreach($medias as $media)
                            <div class="col-sm-6 col-lg-4">
                                <div class="gallery card">
                                    <a class="gallery-image popup-image" href="{{\Illuminate\Support\Facades\Storage::url($media->image->image_url)}}">
                                        <img class="w-100 rounded-top" src="{{\Illuminate\Support\Facades\Storage::url($media->image->image_url)}}" alt="">
                                    </a>
                                    <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                        <div class="user-card">
                                            <span>{{$media->name_uz}}</span>
                                        </div>
                                        <div>
                                            <button class="btn btn-outline-primary btn-nofocus btn-sm" onclick="editModal({{$media->id}})" data-bs-toggle="modal" data-bs-target="#editForm"><em class="fas fa-pen"></em><span></span>
                                            </button>
                                            <button class="btn-sm btn btn-outline-success btn-nofocus" data-bs-toggle="modal" data-bs-target="#modalZoom" onclick="viewMedia({{$media->id}})"><em class="fas fa-eye"></em><span></span>
                                            </button>
                                            <button type="button" onclick="DeleteMedia({{$media->id}})" class="btn-sm btn btn-outline-danger btn-nofocus"><em class="fas fa-trash"></em><span></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="mx-3 my-4">
                    {{$medias->links()}}
                    </div>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
@endsection
