<div class="modal fade" tabindex="-1" role="dialog" id="userEdit">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tahrirlash</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="{{route('show.update',Auth::user()->id)}}" class="form-validate is-alter" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="phone-no">F.I.SH</label>
                            <div class="form-control-wrap">
                                <input type="text" name="name" class="form-control" id="phone-no"
                                       placeholder="Ism familiya" value="{{Auth::user()->name}}">
                            </div>
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="phone-no">Tel no'mer</label>
                            <div class="form-control-wrap">
                                <input type="text" name="phone" class="form-control" id="phone-no"
                                       placeholder="Tel no'mer" value="{{Auth::user()->phone}}">
                            </div>
                            @error('phone')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="full-name">Email</label>
                            <div class="form-control-wrap">
                                <input type="email" class="form-control" id="full-name" name="email"
                                       value="{{Auth::user()->email}}" placeholder="Email">
                            </div>
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="email-address">Tug'ilgan sana</label>
                            <div class="form-control-wrap">
                                <input type="date" class="form-control" id="email-address" name="date" placeholder="">
                            </div>
                            @error('date')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pay-amount">Manzil</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="address" id="pay-amount"
                                   placeholder="Farg'ona shahri Mustaqillik shoh ko'chasi">
                        </div>
                        @error('address')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
