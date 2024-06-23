
@extends('admin.layouts.app')
@section('title','Appointment form')
@section('content')
    <h4 class="mx-4 mb-4">Tahrirlash</h4>
    <div class="nk-block nk-block-lg col-md-11 mx-4 my-4 alert alert-light">
        <div class="nk-block-head">
            @if(!isset($form))
             @else
                <form class="my-4 mx-4 col-md-10" action="{{route('form.update',$form->id)}}" class="form-validate is-alter mb-4" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabItem1" role="tabpanel">
                            <div class="form" style="position: relative;top:-35px;">
                                <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="phone-no">Nomi uz</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="name_uz" value="{{$form->name_uz}}" required class="form-control" id="phone-no" placeholder="Nomini kiriting">
                                    </div>
                                    @error('name_uz')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="form-label" for="phone-no">Name ru</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="name_ru" value="{{$form->name_ru}}" required class="form-control" id="phone-no" placeholder="Name kiriting">
                                    </div>
                                    @error('name_ru')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="form-label" for="phone-no">Tel no'mer uz</label>
                                        <div class="form-control-wrap">
                                            <input type="text" name="email_uz" value="{{$form->email_uz}}" required class="form-control" id="phone-no" placeholder="Vaqti kiriting">
                                        </div>
                                        @error('email_uz')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="phone-no">Vaqti uz</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="date_uz" value="{{$form->date_uz}}" required class="form-control" id="phone-no" placeholder="Vaqti kiriting">
                                    </div>
                                    @error('date_uz')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Habar uz</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="message_uz" class="form-control" value="{{$form->message_uz}}">
                                    </div>
                                    @error('message_uz')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Menyu tanlang</label>
                                    <div class="form-control-wrap">
                                        <select name="menu_id" id="" class="form-control">
                                            @foreach(\App\Models\Menus::all() as $menu)
                                                <option value="{{$menu->id}}">{{$menu->name_uz}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('message_uz')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                                <div class="form-group col-md-10">
                                    <label class="form-label" for="phone-no">Tel no'mer ru</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="email_ru" value="{{$form->email_ru}}" class="form-control" id="phone-no" placeholder="Email kiriting">
                                    </div>
                                    @error('email_ru')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Vaqti ru</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="date_ru" value="{{$form->date_ru}}" class="form-control" id="phone-no" placeholder="Vaqti rus tilida kiriting">
                                    </div>
                                    @error('date_ru')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Xabar ru</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="message_ru" class="form-control" value="{{$form->message_ru}}">
                                    </div>
                                    @error('message_ru')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form my-4 mx-2" style="position: relative;top:-10px;">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Nomi eng</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="name_en" value="{{$form->name_en}}" class="form-control" id="phone-no" placeholder="Nomini engliz tilida kiriting">
                                    </div>
                                    @error('name_eng')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Tel no'mer eng</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="email_en" value="{{$form->email_en}}" class="form-control" id="phone-no" placeholder="Email ingliz tilida kiriting">
                                    </div>
                                    @error('email_en')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Vaqti eng</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="date_en" value="{{$form->date_en}}" class="form-control" id="phone-no" placeholder="Vaqti ingliz tilida kiriting">
                                    </div>
                                    @error('date_en')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Habar en</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="message_en" class="form-control" value="{{$form->message_en}}">
                                    </div>
                                    @error('message_en')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                    <div class="form-group my-1 mx-2">
                        <button type="submit" class="btn btn-lg btn-primary">Saqlash</button>
                        <a href="{{route('form.index')}}" class="btn btn-outline-primary btn-lg" style="float: right;">Qaytish</a>
                    </div>

                </form>
           @endif

@endsection
