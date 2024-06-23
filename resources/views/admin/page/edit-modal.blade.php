<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Qo'shish</h5>
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
        </div>
        <div class="modal-body">
            @if(isset($menu))
                <form action="{{route('menu.update',$menu->id)}}" class="form-validate is-alter" enctype="multipart/form-data"
                      method="POST">
                      @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="phone-no">Nomi uz</label>
                        <div class="form-control-wrap">
                            <input type="text" name="name_uz" required class="form-control" id="phone-no"
                                   placeholder="Nomini kiriting" value="{{$menu->name_uz}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="full-name">Nomi ru</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" required id="full-name" name="name_ru"
                                       value="{{$menu->name_ru}}"
                                       placeholder="Введите имя на русском языке">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="email-address">Nomi eng</label>
                            <div class="form-control-wrap">
                                <input required type="text" class="form-control" id="email-address" name="name_eng"
                                       placeholder="Enter your name in English" value="{{$menu->name_en}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="form-label" for="email-address">Teglar</label>
                        <div class="form-control-wrap">
                            <input required type="text" class="form-control" id="email-address" value="{{$menu->tags}}" name="tags" placeholder="Taglar">
                        </div>
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
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary">Saqlash</button>
                    </div>
                </form>
            @else
            @endif
        </div>
    </div>
</div>

