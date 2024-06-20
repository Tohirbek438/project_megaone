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
                <form action="{{route('header.store')}}" class="form-validate is-alter" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="phone-no">Telegram</label>
                        <div class="form-control-wrap">
                            <input type="text" name="telegram" class="form-control" id="phone-no" placeholder="Telegram nomini kiriting" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="full-name">Facebook</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="full-name" name="facebook" placeholder="Facebook kiriting.." required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="email-address">Twitter</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="email-address" name="twitter" placeholder="Twitter kiriting!" required>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="form-label" for="email-address">Instagramm</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="email-address" name="instagram" placeholder="Twitter kiriting!" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pay-amount">Sayt haqida</label>
                        <div class="form-control-wrap">
                            <textarea name="site_about" id="" class="form-control" placeholder="Sayt haqida" cols="2"  required rows="2"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="pay-amount">Logo</label>
                        <div class="form-control-wrap">
                           <input type="file" name="logo" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="pay-amount">Menyu tanlang</label>
                        <div class="form-control-wrap">
                            <select class="form-control" name="menu_id" required>
                                @foreach(\App\Models\Menus::all() as $menu)
                                <option value="{{$menu->id}}">{{$menu->name_uz}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary">Saqlash</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text">Modal Footer Text</span>
            </div>
        </div>
    </div>
</div>
