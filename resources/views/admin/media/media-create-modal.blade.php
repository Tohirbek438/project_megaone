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
                <h5 class="modal-title">Galleriya qoshish</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="{{route('media.store')}}" method="POST" class="mt-4" enctype="multipart/form-data">
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
                                    type="text" class="form-control" name="title_ru" id="addName"
                                    {{old('title_ru')}} required>
                                @error('title_ru')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group"><label class="form-label" for="addName">Sarlavha
                                    english</label><input
                                    type="text" class="form-control" name="title_eng" id="addName" value="{{old('title_eng')}}" required>
                                @error('title_eng')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"><label class="form-label" for="addAlt">Alter nomi</label><input
                                    type="text" class="form-control" id="addAlt" name="alter_image"
                                    placeholder="Feature Image"
                                    value="{{old('alter_image')}}" required>
                                @error('alter_image')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"><label class="form-label" for="addAlt">Turkumlar</label>
                                <select class="form-control" name="category_id" id="category" required>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title_uz}} |{{$category->title_ru}}</option>
                                    @endforeach
                                </select>
                                @error('alter_image')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="upload-zone small bg-lighter my-2 dropzone dz-clickable">
                                <label class="dz-message text-center"><span class="text-center"> Drag and drop file</span>
                                    <input type="file" style="display: none;" name="image" class="form-control" required>
                                </label>
                                @error('image')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li>
                                    <button type="submit" data-bs-dismiss="modal" class="btn btn-primary">Yaratish
                                    </button>
                                </li>
                                <li><a href="#" class="link link-light" data-bs-dismiss="modal">Chiqish</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
