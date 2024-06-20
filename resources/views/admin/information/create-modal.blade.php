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
                <form action="{{route('information.store')}}" class="form-validate is-alter" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="phone-no">Kasallar soni</label>
                        <div class="form-control-wrap">
                            <input type="number" name="patients" class="form-control" id="phone-no" placeholder="Kasallar soni">
                        </div>
                        @error('patients')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="full-name">Shifokorlar soni</label>
                            <div class="form-control-wrap">
                                <input type="number" class="form-control" id="full-name" name="doctors" placeholder="Shifokorlar soni">
                            </div>
                            @error('doctors')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="email-address">Holatlar soni</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="email-address" name="cases" placeholder="Holatlar soni">
                            </div>
                            @error('cases')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pay-amount">Uchrashuvlar</label>
                        <div class="form-control-wrap">
                            <input type="number" class="form-control" name="appointments" id="pay-amount" placeholder="Uchrashuvlar soni">
                        </div>
                        @error('appointments')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
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

