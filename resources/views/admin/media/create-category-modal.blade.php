<style>
    .dz-message {
        text-align: center;
        margin: 0 auto;
        width: 100%;
    }

</style>
<div class="modal fade" id="modalForm">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Turkum qoshish</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="{{ route('category-media.store')}}" method="POST" class="mt-4" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-gs">
                        <div class="col-md-12">
                            <div class="form-group"><label class="form-label" for="addName">Sarlavha uz</label><input
                                    type="text" class="form-control" name="title_uz" id="addName"
                                    value="{{old('title_uz')}}" required>
                                @error('title_uz')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"><label class="form-label" for="addName">Sarlavha ru</label><input
                                    type="text" class="form-control" name="title_ru" id="addName" required
                                    {{old('title_ru')}}>
                                @error('title_ru')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group"><label class="form-label" for="addName">Sarlavha
                                    english</label><input
                                    type="text" class="form-control" name="title_eng" id="addName"
                                    {{old('title_eng')}} required>
                                @error('title_eng')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"><label class="form-label" for="addName">Qaysi sahifaga tegishli</label>
                                <select name="menu_id" id="" class="form-control" required>
                                    @foreach(\App\Models\Menus::all() as $menu)
                                    <option value="{{$menu->id}}">{{$menu->name_uz}}</option>
                                    @endforeach
                                </select>
                                @error('menu_id')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li>
                                    <button type="submit" data-bs-dismiss="modal" class="btn btn-primary">Create
                                    </button>
                                </li>
                                <li><a href="#" class="link link-light" data-bs-dismiss="modal">Cancel</a></li>
                            </ul>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

