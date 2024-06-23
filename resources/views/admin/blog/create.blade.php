@extends('admin.layouts.app')
@section('title', 'Admin')
@section('content')
    <div class="nk-block nk-block-lg col-lg-11 mx-4 my-2">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="title nk-block-title">Blog qo'shish</h4>
            </div>
        </div>
        <div class="card card-preview">
            <div class="card-inner">
                <div class="preview-block">
                    <form action="{{route('blog.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <ul class="nav nav-tabs mt-n3" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-bs-toggle="tab" href="#tabItem1"
                                   aria-selected="true" role="tab">Uzbek</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#tabItem2"
                                   aria-selected="false" role="tab" tabindex="-1">Русский</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#tabItem3"
                                   aria-selected="false" role="tab" tabindex="-1">English</a>
                            </li>
                        </ul>
                        <br>
                        <div class="tab-content">
                        <div class="tab-pane active" id="tabItem1" role="tabpanel">
                            <div class="row gy-4">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="default-01">Sarlavha uz</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="default-01" name="title_uz"
                                                   placeholder="Sarlavha kiriting">
                                            <br>
                                            @error('title_uz')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="default-05">Kim tomonidan</label>
                                        <div class="form-control-wrap">
                                            <div class="form-text-hint">

                                            </div>
                                            <input type="text" class="form-control" id="default-05" name="writer_by"
                                                   placeholder="Input placeholder">
                                            <br>
                                            @error('writer_by')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" for="default-06">Rasm</label>
                                        <div class="form-control-wrap">
                                            <div class="form-file">
                                                <input type="file" multiple class="form-file-input" id="customFile"
                                                       name="image">
                                                <label class="form-file-label" for="customFile">Choose file</label>
                                                @error('image')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="default-06">Blog turkumlar</label>
                                        <div class="form-control-wrap ">
                                            <div class="form-control-select">
                                                <select class="form-control" id="default-06" name="blog_category">
                                                    <option value="default_option">Turkumlar</option>
                                                    @foreach($blogCategories as $category)
                                                        <option
                                                            value="{{$category->id}}">{{$category->title_uz}}</option>
                                                    @endforeach
                                                </select>
                                                @error('blog_category')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" for="default-textarea">Textarea</label>
                                        <div class="form-control-wrap">
                                            <textarea name="description_uz" class="form-control no-resize"
                                                      id="default-textarea">Tavsif</textarea>
                                            @error('description_uz')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="tab-pane" id="tabItem2" role="tabpanel">
                            <div class="row gy-4">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" for="default-01">Sarlavha ru</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="default-01" name="title_ru"
                                                   placeholder="Sarlavha kiriting ru">
                                            <br>
                                            @error('title_ru')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" for="default-textarea">Tavsif ru</label>
                                        <div class="form-control-wrap">
                                            <textarea name="description_ru" class="form-control no-resize"
                                                      id="default-textarea">Tavsif ru</textarea>
                                            @error('description_ru')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabItem3" role="tabpanel">
                            <div class="row gy-4">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" for="default-01">Sarlavha eng</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="default-01" name="title_eng"
                                                   placeholder="Sarlavha kiriting eng">
                                            <br>
                                            @error('title_eng')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="form-label" for="default-textarea">Tavsif eng</label>
                                        <div class="form-control-wrap">
                                            <textarea name="description_eng" class="form-control no-resize"
                                                      id="default-textarea">Tavsif eng</textarea>
                                            @error('description_eng')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div
                                </div>
                            </div>
                        </div>
                </div>
                        <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary">Saqlash</button>
                            </div>
                    </form>
            </div>
        </div>
    </div>

@endsection
