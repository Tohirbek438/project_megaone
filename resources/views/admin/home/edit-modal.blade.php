<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Tahrirlash</h5>
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
        </div>
        <div class="modal-body">
            <div class="card-inner">
                <ul class="nav nav-tabs" role="tablist"
                    style="border: none;float: right;position: relative;top:-30px;left:20px;">
                    <li class="nav-item" role="presentation">
                        <a class="btn btn-outline-primary active btn-sm " style="position: relative;left:75px;"
                           data-bs-toggle="tab" href="#tabItem4" aria-selected="true" role="tab">Uz</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="btn btn-outline-primary btn-sm" data-bs-toggle="tab"
                           style="position: relative;left:45px;" href="#tabItem5" aria-selected="false"
                           tabindex="-1" role="tab">Ru</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="btn btn-outline-primary btn-sm" data-bs-toggle="tab"
                           style="position: relative;left:15px;" href="#tabItem6" aria-selected="false"
                           tabindex="-1" role="tab">Eng</a>
                    </li>
                </ul>
            </div>
            @if(isset($page))
                <form action="{{ route('home.update',$page->id)}}" class="form-validate is-alter mb-4"
                      enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabItem4" role="tabpanel">
                            <div class="form" style="position: relative;top:-35px;">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Nomi uz</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="name_uz" required class="form-control"
                                               id="phone-no" placeholder="Nomini kiriting"
                                               value="{{$page->name_uz}}">
                                    </div>
                                    @error('name_uz')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="form-label" for="email-address">Tavsif</label>
                                    <div class="form-control-wrap">
                                            <textarea required name="description_uz" id="" cols="2" rows="2"
                                                      class="form-control">
                                                {{$page->description_uz}}
                                            </textarea>
                                    </div>
                                    @error('description_uz')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="pay-amount">Status</label>
                                    <div class="form-control-wrap">
                                        <select name="status" id="" class="form-control" required>
                                            <option value="1">Chop etilgan</option>
                                            <option value="2">Kutilmoqda</option>
                                            <option value="3">Qoralama</option>
                                        </select>
                                    </div>
                                    @error('status')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="pay-amount">Ikonkasi</label>
                                    <div class="form-control-wrap">
                                        <input type="text" name="icon" class="form-control" value="{{$page->icon}}">
                                    </div>
                                    @error('icon')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabItem5" role="tabpanel">
                            <div class="form" style="position: relative;top:-40px;">
                                <div class="form-group col-md-12">
                                    <label class="form-label" for="full-name">Nomi ru</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" value="{{$page->name_ru}}" required
                                               id="full-name" name="name_ru"
                                               placeholder="Введите имя на русском языке">
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="form-label" for="email-address">Tavsif ru</label>
                                    <div class="form-control-wrap">
                                            <textarea required name="description_ru"
                                                      id="" cols="2" rows="2" class="form-control">{{$page->description_ru}}</textarea>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="tab-pane" id="tabItem6" role="tabpanel">
                            <div class="form" style="position: relative;top:-40px;">
                                <div class="form-group col-md-12">
                                    <label class="form-label" for="email-address">Nomi eng</label>
                                    <div class="form-control-wrap">
                                        <input required type="text" class="form-control" value="{{$page->name_en}}"
                                               id="email-address" name="name_eng" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="form-label" for="email-address">Tavsif eng</label>
                                    <div class="form-control-wrap">
                                            <textarea required name="description_eng"
                                                      id="" cols="2" rows="2" class="form-control">{{$page->description_en}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group my-3">
                        <button type="submit" class="btn btn-lg btn-primary">Saqlash</button>
                    </div>
                </form>
            @else
            @endif
        </div>
    </div>
</div>


