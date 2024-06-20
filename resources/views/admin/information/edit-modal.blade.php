<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Tahrirlash</h5>
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
        </div>
        @if(isset($information))
            <div class="modal-body">
                <form action="{{route('information.update',$information->id)}}" class="form-validate is-alter"
                      enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="form-label" for="phone-no">Uchrashuvlar soni</label>
                        <div class="form-control-wrap">
                            <input type="text" name="appointments" class="form-control" id="phone-no"
                                   placeholder="" value="{{$information->appointments}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="full-name">Kasallar soni</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="full-name" name="patients"
                                       placeholder="Введите имя на русском языке" value="{{$information->patients}}">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="email-address">Shifokorlar</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="email-address" name="doctors"
                                       placeholder="Enter your name in English" value="{{$information->doctors}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pay-amount">Holatlar soni</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="cases" id="pay-amount" placeholder="0%" value="{{$information->cases}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary">Saqlash</button>
                    </div>
                </form>
            </div>
        @else
        @endif
    </div>
</div>

