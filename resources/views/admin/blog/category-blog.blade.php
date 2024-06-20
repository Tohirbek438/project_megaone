@extends('admin.layouts.app')
@section('title', 'Admin')
@section('content')
    <style>
        .text-muted {
            display: none;
        }
    </style>

    {{--    Modal--}}
    <div class="modal fade" id="modalForm">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Customer Info</h5>
                    <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="#" class="mt-4">
                        <div class="row g-gs">
                            <div class="col-md-6">
                                <div class="form-group"><label class="form-label" for="editName">Name</label><input
                                        type="text" class="form-control" id="editName" placeholder="Name"
                                        value="Uncategorized"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><label class="form-label" for="editSlug">Slug</label><input
                                        type="text" class="form-control" id="editSlug" placeholder="Slug"
                                        value="uncategorized"></div>
                            </div>
                            <div class="col-12">
                                <div class="form-group"><label class="form-label"
                                                               for="editDescription">Description</label><textarea
                                        class="form-control form-control-sm no-resize" id="editDescription"
                                        placeholder="Edit your description"></textarea></div>
                            </div>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button type="submit" data-bs-dismiss="modal" class="btn btn-primary">Update
                                        </button>
                                    </li>
                                    <li><a href="#" class="link link-light" data-bs-dismiss="modal">Cancel</a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">Modal Footer Text</span>
                </div>
            </div>
        </div>
    </div>






    {{--   endModal--}}
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content"><h3 class="nk-block-title page-title">Blog Turkumlar</h3>
                            </div>
                        </div>
                    </div>
                    <div class="nk-block">
                        <div class="row g-gs flex-row-reverse">
                            <div class="col-xxl-7">
                                <div class="card card-bordered card-stretch">
                                    <div class="card-inner-group">
                                        <div class="card-inner position-relative card-tools-toggle">
                                            <div class="card-title-group">
                                                <div class="card-tools">
                                                    <div class="form-inline flex-nowrap gx-3">
                                                        <div class="form-wrap w-150px">
                                                            <select
                                                                class="form-select js-select2 select2-hidden-accessible"
                                                                data-search="off" data-placeholder="Bulk Action"
                                                                data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                                <option value="" data-select2-id="3">Bulk Action
                                                                </option>
                                                                <option value="edit">Edit</option>
                                                                <option value="delete">Move To Trash</option>
                                                            </select>
                                                        </div>
                                                        <div class="btn-wrap"><span class="d-none d-md-block"><button
                                                                    class="btn btn-dim btn-outline-light disabled">Apply</button></span><span
                                                                class="d-md-none"><button
                                                                    class="btn btn-dim btn-outline-light btn-icon disabled"><em
                                                                        class="icon ni ni-arrow-right"></em></button></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner p-0">
                                            <div class="nk-tb-list nk-tb-ulist">
                                                <div class="nk-tb-item nk-tb-head">
                                                    <div class="nk-tb-col nk-tb-col-check">
                                                        <div
                                                            class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="uid"><label class="custom-control-label"
                                                                                   for="uid"></label></div>
                                                    </div>
                                                    <div class="nk-tb-col"><span class="sub-text">Sarlavha</span></div>
                                                    <div class="nk-tb-col tb-col-xxl"><span
                                                            class="sub-text">Description</span></div>
                                                    <div class="nk-tb-col tb-col-sm"><span
                                                            class="sub-text">Status</span>
                                                    </div>
                                                    <div class="nk-tb-col"><span class="sub-text">Vaqti</span></div>
                                                    <div class="nk-tb-col nk-tb-col-tools text-end"></div>
                                                </div>
                                                @foreach($category as $categories)
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div
                                                                class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input"
                                                                       id="uid1"><label class="custom-control-label"
                                                                                        for="uid1"></label></div>
                                                        </div>
                                                        <div class="nk-tb-col"><span>{{$categories->title_uz}}</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-xxl">
                                                            <div class="text-ellipsis w-max-200px"><span>—</span></div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            @if($categories->status == 1)
                                                                <span class="text-success"> Chop etilgan</span>
                                                            @elseif($categories->status == 2)
                                                                <span class="text-info">Kutilmoqda</span>
                                                            @elseif($categories->status == 3)
                                                                <span class="text-danger">Qoralama</span>
                                                            @endif
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div>
                                                                <span>{{$categories->created_at->format('d.m.Y')}}</span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden"><a
                                                                        class="btn btn-trigger btn-icon"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#modalForm"
                                                                        data-bs-placement="top"
                                                                        title="Edit"><em
                                                                            class="icon ni ni-edit-fill"></em></a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden"><a
                                                                                                   onclick="Delete({{$categories->id}})"
                                                                                                   class="btn btn-trigger btn-icon"
                                                                                                   data-bs-toggle="tooltip"
                                                                                                   data-bs-placement="top"
                                                                                                   aria-label="Move To Trash"
                                                                                                   data-bs-original-title="Move To Trash"><em
                                                                            class="icon ni ni-trash-fill"></em></a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <div class="nk-block-between-md g-3">
                                                <nav role="navigation" aria-label="Pagination Navigation"
                                                     class="flex items-center justify-between">
                                                    <div>
                                                        <p class="text-sm text-gray-700 leading-5 dark:text-gray-400 my-1">
                                                            Showing <span
                                                                class="font-medium">{{ $category->firstItem() }}</span>
                                                            to <span
                                                                class="font-medium">{{ $category->lastItem() }}</span>
                                                            of <span class="font-medium">{{ $category->total() }}</span>
                                                            results
                                                        </p>
                                                    </div>
                                                    <div class="mx-3 style=" justify-content: center;
                                                    ">
                                                {{ $category->links() }}
                                            </div>
                                            </nav>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5">
                            <div class="card card-bordered h-100">
                                <div class="card-inner">
                                    <form action="{{route('blog-category.store')}}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="row g-3 align-center">
                                            <div class="col-md-6">
                                                <div class="form-group"><label class="form-label"
                                                                               for="name">Sarlavha</label><span
                                                        class="form-note"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-control-wrap"><input type="text"
                                                                                          class="form-control"
                                                                                          id="title_uz"
                                                                                          name="title_uz"
                                                                                          placeholder="Title"></div>
                                                </div>
                                                @error('title_uz')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row g-3 align-center">
                                            <div class="col-md-6">
                                                <div class="form-group"><label class="form-label"
                                                                               for="slug">Slug</label><span
                                                        class="form-note">Turkumlar manzili kiriting!</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-control-wrap"><input type="text" name="slug"
                                                                                          class="form-control"
                                                                                          id="slug"
                                                                                          name="slug"
                                                                                          placeholder="Slug"></div>
                                                </div>
                                                @error('slug')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row g-3 align-center">


                                        </div>
                                        <div class="row g-3 my-3 align-center">
                                            <div class="col-md-6">
                                                <div class="form-group"><label class="form-label"
                                                                               for="addDescription">Tavsif</label><span
                                                        class="form-note">Tavsif matn kiritasz!</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-control-wrap"><textarea
                                                        class="form-control form-control-sm no-resize"
                                                        id="addDescription"
                                                        name="description_uz"
                                                        placeholder="Write your description"></textarea></div>
                                                @error('description_uz')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row g-3 my-3 align-center">
                                            <div class="col-md-6">
                                                <div class="form-group"><label class="form-label"
                                                                               for="addDescription">Status</label><span
                                                        class="form-note">Holat tanlang!</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" name="status">
                                                    <option value="1">Chop etilgan</option>
                                                    <option value="2">Kutilmoqda</option>
                                                    <option value="3">Qoralama</option>
                                                </select>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-12">
                                                    <div class="form-group mt-2">
                                                        <button type="submit" class="btn btn-lg btn-primary">Add New
                                                            Category
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
