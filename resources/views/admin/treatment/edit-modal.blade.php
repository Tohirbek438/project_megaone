<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Tahrirlash</h5>
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
        </div>
        @if(isset($treatment))
            <div class="modal-body">
                <form action="{{route('treatment.update',$treatment->id)}}" class="form-validate is-alter"
                      enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="form-label" for="phone-no">Nomi uz</label>
                        <div class="form-control-wrap">
                            <input type="text" name="title_uz" class="form-control" id="phone-no"
                                   placeholder="Kassalik nomini kiriting" value="{{$treatment->title_uz}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="full-name">Nomi ru</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="full-name" name="title_ru"
                                       placeholder="Введите имя на русском языке" value="{{$treatment->title_ru}}">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="email-address">Nomi eng</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="email-address" name="title_eng"
                                       placeholder="Enter your name in English" value="{{$treatment->title_eng}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pay-amount">Tuzalish foizi</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="percent" id="pay-amount" placeholder="0%" value="{{$treatment->percent}}">
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

