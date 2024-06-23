@extends('admin.layouts.app')
@section('title', 'Page edit')
@section('content')
    <div class="nk-content ">
        <form action="{{route('page.update',$page->id)}}" data-select2-id="14" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="container-fluid" data-select2-id="21">
                <div class="nk-content-inner" data-select2-id="20">
                    <div class="nk-content-body" data-select2-id="19">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content"><h3 class="nk-block-title page-title">Sahifani tahrirlash</h3>
                                </div>
                            </div>

                        </div>
                        <div class="nk-block" data-select2-id="18">

                            <div class="row g-gs">

                                <div class="col-lg-8">
                                    <div class="card card-bordered">

                                        <div class="card-inner">
                                            <div class="card card-preview">
                                                <div class="card-inner">
                                                    <ul class="nav nav-tabs mt-n3" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#tabItem1"
                                                               aria-selected="false" role="tab" tabindex="-1">Uzbek</a>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#tabItem2"
                                                               aria-selected="false" role="tab"
                                                               tabindex="-1">Русский</a>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#tabItem3"
                                                               aria-selected="false" role="tab"
                                                               tabindex="-1">English</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tabItem1" role="tabpanel">
                                                            <div class="row g-gs">
                                                                <div class="col-12">
                                                                    <div class="form-group"><label class="form-label"
                                                                                                   for="addTitle">Nomi </label><input
                                                                            type="text" class="form-control"
                                                                            id="addTitle" name="name_uz" value="{{$page->name_uz}}"
                                                                            placeholder="Nomi">
                                                                        @error('name_uz')
                                                                        <span class="text-danger">{{$message}}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group"><label class="form-label"
                                                                                                   for="addTitle">Sarlavha</label>
                                                                        <input
                                                                            type="text" class="form-control"
                                                                            name="title_uz"
                                                                            id="addTitle" value="{{$page->title_uz}}"
                                                                            placeholder="Sarlavha o'zbek tilida">
                                                                        @error('title_uz')
                                                                        <span class="text-danger">{{$message}}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label"
                                                                           for="tavsif">Tavsif</label>
                                                                    <textarea id="tavsif" name="description_uz"
                                                                              class="form-control">{{$page->description_uz}}</textarea>
                                                                    @error('description_uz')
                                                                    <span class="text-danger">{{$message}}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="tabItem2" role="tabpanel">
                                                            <div class="row g-gs">

                                                                <div class="col-12">
                                                                    <div class="form-group"><label class="form-label"
                                                                                                   for="addTitle">Nomi
                                                                            ru </label><input type="text"
                                                                                              class="form-control"
                                                                                              name="name_ru"
                                                                                              id="addTitle" value="{{$page->name_ru}}"
                                                                                              placeholder="Nomi rus tilida">
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group"><label class="form-label"
                                                                                                   for="addTitle">Sarlavha
                                                                            ru</label><input
                                                                            type="text" class="form-control"
                                                                            name="title_ru" id="addTitle" value="{{$page->title_ru}}"
                                                                            placeholder="Title rus tilida"></div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label" for="tavsif">Tavsif
                                                                        ru</label>
                                                                    <textarea id="tavsif" name="description_ru"
                                                                              class="form-control">{{$page->description_ru}}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="tabItem3" role="tabpanel">
                                                            <div class="row g-gs">

                                                                <div class="col-12">
                                                                    <div class="form-group"><label class="form-label"
                                                                                                   for="addTitle">Nomi
                                                                            eng </label><input
                                                                            type="text" class="form-control"
                                                                            name="name_en" id="addTitle" value="{{$page->name_en}}"
                                                                            placeholder="Nomi english tilida"></div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group"><label class="form-label"
                                                                                                   for="addTitle">Sarlavha
                                                                            eng</label><input
                                                                            type="text" class="form-control"
                                                                            name="title_en" id="addTitle" value="{{$page->title_en}}"
                                                                            placeholder="Title english tilida"></div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label" for="tavsif">Tavsif
                                                                        eng</label>
                                                                    <textarea id="tavsif" name="description_en"
                                                                              class="form-control">{{$page->description_en}}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4" data-select2-id="17">
                                    <div class="card card-bordered" data-select2-id="16">
                                        <div class="card-inner" data-select2-id="15">

                                            <div class="row g-gs" data-select2-id="13">
                                                <div class="col-lg-12 col-sm-6">
                                                    <div class="form-group"><label class="form-label"
                                                                                   for="addTags">Tags</label><input
                                                            type="text" class="form-control" id="addTags" name="tags"
                                                            placeholder="Tags" value="{{$page->tags}}">
                                                    </div>
                                                    @error('tags')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group"><label class="form-label">Rasm</label>
                                                        <div class="upload-zone dropzone dz-clickable">
                                                            <div class="dz-message" data-dz-message=""><span
                                                                    class="dz-message-text">
                                                                    <label for="image">Drag and drop file</label></span>
                                                                <input type="file" style="display: none;" id="image"
                                                                       name="image">
                                                            </div>
                                                        </div>
                                                        @error('image')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-sm-6" data-select2-id="12">
                                                    <div class="form-group" data-select2-id="11"><label
                                                            class="form-label">Turkumlar</label>
                                                        <div class="form-control-wrap" data-select2-id="10">
                                                            <select name="category_id"
                                                                    class="form-select js-select2 select2-hidden-accessible"
                                                                    data-placeholder="Turkumlar"
                                                                    data-select2-id="1" tabindex="-1"
                                                                    aria-hidden="true">
                                                                @foreach($pages as $page)
                                                                    <option value="{{$page->id}}"
                                                                            data-select2-id="{{$page->id}}">
                                                                        {{$page->name_uz}}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        @error('category_id')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-sm-6">
                                                    <div class="form-group"><label class="form-label"
                                                                                   for="addDate">Date</label>
                                                        <div class="form-control-wrap">
                                                            <div class="form-icon form-icon-right"><em
                                                                    class="icon ni ni-calendar"></em></div>
                                                            <input type="text" class="form-control date-picker"
                                                                   id="addDate"
                                                                   data-date-format="dd-mm-yyyy" value="{{$page->date}}"
                                                                   placeholder="dd-mm-yyyy" name="date">
                                                        </div>
                                                        @error('date')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-sm-6" data-select2-id="36">
                                                    <div class="form-group" data-select2-id="35"><label
                                                            class="form-label">Select
                                                            Status</label>
                                                        <div class="form-control-wrap" data-select2-id="34">
                                                            <select name="status"
                                                                    class="form-select js-select2 select2-hidden-accessible"
                                                                    data-placeholder="Status" data-select2-id="6"
                                                                    tabindex="-1"
                                                                    aria-hidden="true">
                                                                <option value="1" data-select2-id="8">Chop
                                                                    etilgan
                                                                </option>
                                                                <option value="2" data-select2-id="37">Kutilmoqda
                                                                </option>
                                                                <option value="3" data-select2-id="38">Qoralama
                                                                </option>
                                                            </select>
                                                        </div>
                                                        @error('status')
                                                        <span class="text-danger">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 mt-1">
                                                            <li>
                                                                <button type="submit" class="btn btn-primary">Publish
                                                                    Page
                                                                </button>
                                                            </li>
                                                            <li><a href="#" class="link link-light">Save to Draft</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </form>
    </div>
@endsection

