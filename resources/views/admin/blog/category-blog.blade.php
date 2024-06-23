@extends('admin.layouts.app')
@section('title', 'Admin')
@section('content')
    <style>
        .text-muted {
            display: none;
        }
        .form-label{
            font-size: 15px;
        }
        textarea{
            height: 50px;
        }
        .form-note{
            font-size: 12px;
        }
    </style>
    <div class="modal fade" id="editBlog">
    @include('admin.blog.edit-category-modal')
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
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner p-0">
                                            <div class="nk-tb-list nk-tb-ulist">
                                                <div class="nk-tb-item nk-tb-head">
                                                    <div class="nk-tb-col nk-tb-col-check">
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
                                                                        data-bs-target="#editBlog"
                                                                        data-bs-placement="top"
                                                                        onclick="EditBlog({{$categories->id}})"
                                                                        title="Tahrirlash"><em
                                                                            class="icon ni ni-edit-fill"></em></a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden"><a
                                                                                                   onclick="Delete({{$categories->id}})"
                                                                                                   class="btn btn-trigger btn-icon"
                                                                                                   data-bs-toggle="tooltip"
                                                                                                   data-bs-placement="top"
                                                                                                   aria-label="Move To Trash"
                                                                                                   data-bs-original-title="O'chirish"><em
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
                                    <form action="{{route('category-blog.store')}}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="row g-3 align-center">
                                            <div class="col-md-6">
                                                <div class="form-group"><label class="form-label"
                                                                               for="name">Sarlavha</label><span
                                                        class="form-note">Sarlavha ma'limotlarini rus va o'zbek,ingliz tilida kiriting..</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input type="text"
                                                                                          class="form-control"
                                                                                          id="title_uz"
                                                                                          name="title_uz"
                                                                                          placeholder="Title">
                                                        <br>
                                                        <input type="text"
                                                               class="form-control"
                                                               id="title_ru"
                                                               name="title_ru"
                                                               placeholder="Sarlavhani rus tilida">
                                                        <br>
                                                        <input type="text"
                                                               class="form-control"
                                                               id="title_en"
                                                               name="title_en"
                                                               placeholder="Sarlavhani ingliz tilida">
                                                    </div>
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
                                                        class="form-note">Turkumlar manzili rus va o'zbek, ingliz tilida kiriting!</span>
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
                                                        <button type="submit" class="btn btn-lg btn-primary">
                                                           Turkum Qo'shish
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
