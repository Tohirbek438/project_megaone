@extends('admin.layouts.app')
@section('title','Department edit')
@section('content')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-body">
                <div class="components-preview wide-xl mx-auto">
                    <div class="nk-block-head nk-block-head-lg wide-sm">
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title fw-normal">Klinikal turkumlar </h2>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="title nk-block-title">Tahrirlash formasi</h4>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-inner">
                                <form action="{{ route('department.update',$department->id) }}" class="form-validate" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row g-gs">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-full-name">Sarlavha uz</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="fv-full-name"
                                                           name="title_uz"
                                                           required value="{{$department->title_uz}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-email">Sarlavha ru</label>
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control" id="fv-email"
                                                           name="title_ru"  value="{{$department->title_ru}}">
                                                    @error('title_ru')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-phone">Sarlavha eng</label>
                                                <div class="form-control-wrap">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="title_eng"  value="{{$department->title_en}}">
                                                    </div>
                                                    @error('title_eng')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-phone">Rasm</label>
                                                 <input class="form-control" type="file" name="image">
                                            </div>
                                            @error('image')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-message">Tavsif eng</label>
                                                <div class="form-control-wrap">
                                                    <textarea rows="2" cols="2" class="form-control form-control-sm" id="fv-message"
                                                              name="description_eng" placeholder="Tavsif kiriting"
                                                              required>{{$department->description_en}}</textarea>
                                                </div>
                                                @error('description_eng')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-message">Tavsif ru</label>
                                                <div class="form-control-wrap">
                                                    <textarea rows="2" cols="2" class="form-control form-control-sm" id="fv-message"
                                                              name="description_ru" placeholder="Tavsif kiriting"
                                                              >{{$department->description_ru}}</textarea>
                                                </div>
                                                @error('description_ru')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="fv-message">Tavsif uz</label>
                                                <div class="form-control-wrap">
                                                    <textarea rows="2" cols="2" class="form-control form-control-sm" id="fv-message"
                                                              name="description_uz" placeholder="Tavsif kiriting"
                                                              required>{{$department->description_uz}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" style="float: right;" class="btn btn-lg btn-primary">Saqlash
                                                </button>
                                            </div>

                                        </div>
                                        <a class="btn btn-outline-primary col-md-2" style="text-align: center;display: block;" href="{{ route('department.index') }}">Qaytish</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- .nk-block -->


                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
@endsection
