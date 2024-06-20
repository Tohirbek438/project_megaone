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
                <form action="{{route('treatment.store')}}" class="form-validate is-alter" enctype="multipart/form-data" method="POST">
                   @csrf
                    <div class="form-group">
                        <label class="form-label" for="phone-no">Nomi uz</label>
                        <div class="form-control-wrap">
                            <input type="text" name="title_uz" class="form-control" id="phone-no" placeholder="Kassalik nomini kiriting">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="full-name">Nomi ru</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="full-name" name="title_ru" placeholder="Введите имя на русском языке">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="email-address">Nomi eng</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="email-address" name="title_eng" placeholder="Enter your name in English">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="form-label" for="email-address">Qaysi sahifaga tegishli</label>
                        <div class="form-control-wrap">
                            <select name="menu_id" id="" class="form-control">
                                @foreach(\App\Models\Menus::all() as $page)
                                <option value="{{$page->id}}">{{$page->name_uz}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="form-label" for="pay-amount">Tuzalish foizi</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" name="percent" id="pay-amount" placeholder="0%">
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
