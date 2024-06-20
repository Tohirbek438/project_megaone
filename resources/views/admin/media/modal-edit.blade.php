 <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Gallery Info</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            @if(isset($media))
            <div class="modal-body">
                <form action="{{route('media.update',$media->id)}}" method="POST" class="mt-4" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row g-gs">
                        <div class="col-md-12">
                            <div class="form-group"><label class="form-label" for="addName">Sarlavha uz</label><input
                                    type="text" class="form-control" name="title_uz" id="addName"
                                    value="{{$media->name_uz}}">
                                @error('title_uz')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"><label class="form-label" for="addName">Sarlavha ru</label><input
                                    type="text" class="form-control" name="title_ru" id="addName"
                                    value="{{$media->name_ru ?? null}}">
                                @error('title_ru')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group"><label class="form-label" for="addName">Sarlavha
                                    english</label><input
                                    type="text" class="form-control" name="title_eng" id="addName"
                                    value="{{$media->name_eng ?? null}}">
                                @error('title_eng')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"><label class="form-label" for="addAlt">Alter Text</label><input
                                    type="text" class="form-control" id="addAlt" name="alter_image"
                                    placeholder="Feature Image"
                                    value="{{$media->alter_media ?? null}}">
                                @error('alter_image')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"><label class="form-label" for="addAlt">Turkumlar</label>
                                <select class="form-control" name="category_id" id="category">
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
                                    <input type="file" style="display: none;" name="image" class="form-control">
                                </label>
                                @error('image')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <br>
                            <img src="{{\Illuminate\Support\Facades\Storage::url($media->image->image_url)}}" width="150px" height="100px">
                        </div>
                        <div class="col-12">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li>
                                    <button type="submit" data-bs-dismiss="modal" class="btn btn-primary">Yangilash
                                    </button>
                                </li>
                                <li><a href="#" class="link link-light" data-bs-dismiss="modal">Bekor qilish</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            @else
            @endif
            <div class="modal-footer bg-light">
                <span class="sub-text">Modal Footer Text</span>
            </div>
        </div>
    </div>

