<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Tahrirlash</h5>
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
        </div>
        @if(isset($header))
            <div class="modal-body">
                <form action="{{route('contact.update',$header->id)}}" class="form-validate is-alter"
                      enctype="multipart/form-data"
                      method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="form-label" for="phone-no">Telegram</label>
                        <div class="form-control-wrap">
                            <input type="text" name="telegram" class="form-control" id="phone-no"
                                   placeholder="Telegram nomini kiriting" value="{{$header->telegram}}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="full-name">Ofis telefon</label>
                            <div class="form-control-wrap">
                                <input type="tel" class="form-control" id="full-name" name="office_phone"
                                       placeholder="Ofis telefon kiriting.." value="{{$header->office_phone}}" required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="email-address">Telefon no'mer</label>
                            <div class="form-control-wrap">
                                <input type="tel" class="form-control" id="email-address" name="phone"
                                       placeholder="Telefon no'mer kiriting!" value="{{$header->phone}}" required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="email-address">Email</label>
                            <div class="form-control-wrap">
                                <input type="email" class="form-control" id="email-address" name="email"
                                       value="{{$header->email}}"
                                       placeholder="Email kiriting!" required>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="email-address">So'rovlar uchun</label>
                            <div class="form-control-wrap">
                                <input type="email" class="form-control" id="email-address" name="inquires"
                                       value="{{$header->inquires}}"
                                       placeholder="Email kiriting!" required>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="form-label" for="email-address">Manzil kiriting</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="email-address" name="address" value="{{$header->address}}"
                                       placeholder="Manzil kiriting!" required>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="form-label" for="email-address">Xarita kiriting</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="email-address" name="map_x"
                                       placeholder="Xarita kiriting!" required value="{{$header->map_x}}">
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="form-label" for="email-address">Ish kunlari</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="email-address" name="work_days"
                                       placeholder="Dushanba-shanba: 9:00 dan 19:00 gacha" required
                                       value="{{$header->work_days}}">
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="form-label" for="email-address">Qaysi menyuga tegishli</label>
                            <div class="form-control-wrap">
                                <select name="menu_id" id="" required class="form-control">
                                    @foreach(\App\Models\Menus::all() as $menu)
                                        <option value="{{$menu->id}}">{{$menu->name_uz}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group my-2">
                        <button type="submit" class="btn btn-lg btn-primary">Saqlash</button>
                    </div>
                </form>
            </div>
        @else
        @endif
    </div>
</div>


