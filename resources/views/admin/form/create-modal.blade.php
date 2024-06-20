<div class="modal fade" id="modalForm">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Qo'shish</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <div class="card-inner">
                    <ul class="nav nav-tabs" role="tablist"  style="border: none;float: right;position: relative;top:-30px;left:20px;">
                        <li class="nav-item" role="presentation">
                            <a class="btn btn-outline-primary active btn-sm " style="position: relative;left:75px;" data-bs-toggle="tab" href="#tabItem1" aria-selected="true" role="tab">Uz</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="btn btn-outline-primary btn-sm" data-bs-toggle="tab" style="position: relative;left:45px;"  href="#tabItem2" aria-selected="false" tabindex="-1" role="tab">Ru</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="btn btn-outline-primary btn-sm" data-bs-toggle="tab" style="position: relative;left:15px;"  href="#tabItem3" aria-selected="false" tabindex="-1" role="tab">Eng</a>
                        </li>
                    </ul>
                </div>
                <form action="{{route('form.store')}}" class="form-validate is-alter mb-4" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabItem1" role="tabpanel">
                            <div class="form" style="position: relative;top:-35px;">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Nomi uz</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="name_uz" required class="form-control" id="phone-no" placeholder="Nomini kiriting">
                                    </div>
                                    @error('name_uz')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Email uz</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="email_uz" required class="form-control" id="phone-no" placeholder="Email kiriting">
                                    </div>
                                    @error('email_uz')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Vaqti uz</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="date_uz" required class="form-control" id="phone-no" placeholder="Vaqti kiriting">
                                    </div>
                                    @error('date_uz')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Habar uz</label>
                                    <div class="form-control-wrap">
                                        <textarea class="form-control" name="message_uz" id="" cols="1" rows="1">{{old('message_uz')}}</textarea>
                                    </div>
                                    @error('message_uz')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Habar uz</label>
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
                        <div class="tab-pane" id="tabItem2" role="tabpanel">
                            <div class="form" style="position: relative;top:-40px;">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Nomi ru</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="name_ru" required class="form-control" id="phone-no" placeholder="Nomini rus tilida kiriting">
                                    </div>
                                    @error('name_ru')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Email ru</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="email_ru" required class="form-control" id="phone-no" placeholder="Email kiriting">
                                    </div>
                                    @error('email_uz')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Vaqti ru</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="date_ru" required class="form-control" id="phone-no" placeholder="Vaqti rus tilida kiriting">
                                    </div>
                                    @error('date_ru')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Xabar eng</label>
                                    <div class="form-control-wrap">
                                        <textarea class="form-control" name="message_ru" id="" cols="1" rows="1">{{old('message_ru')}}</textarea>
                                    </div>
                                    @error('message_ru')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>


                        </div>
                        <div class="tab-pane" id="tabItem3" role="tabpanel">
                            <div class="form" style="position: relative;top:-40px;">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Nomi eng</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="name_en" class="form-control" id="phone-no" placeholder="Nomini engliz tilida kiriting">
                                    </div>
                                    @error('name_eng')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Email eng</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="email_en" required class="form-control" id="phone-no" placeholder="Email ingliz tilida kiriting">
                                    </div>
                                    @error('email_en')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Vaqti eng</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="date_eng" required class="form-control" id="phone-no" placeholder="Vaqti ingliz tilida kiriting">
                                    </div>
                                    @error('date_en')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Habar en</label>
                                    <div class="form-control-wrap">
                                        <textarea class="form-control" name="message_en" id="" cols="1" rows="1">{{old('message_en')}}</textarea>
                                    </div>
                                    @error('email_uz')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="form-group my-3">
                        <button type="submit" class="btn btn-lg btn-primary">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
