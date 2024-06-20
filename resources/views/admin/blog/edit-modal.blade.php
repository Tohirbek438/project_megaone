<div class="modal fade" id="modalForm">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Blog edit</h5>
                <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <em class="icon ni ni-cross"></em>
                </a>
            </div>
            <div class="modal-body">
                <form action="#" class="form-validate is-alter">
                    <div class="form-group">
                        <label class="form-label" for="full-name">Sarlavha</label>
                        <div class="form-control-wrap">
                            <input type="text" value="{{$blog->title_uz ?? null}}" name="title_uz" class="form-control" id="full-name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email-address">Turkum</label>
                        <div class="form-control-wrap">
                            <select name="blog_category" class="form-control">
                                @foreach($blogCategory as $blog_category)
                                <option value="{{$blog_category->id}}">{{$blog_category->title_uz}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="phone-no">Kim tomonidan </label>
                        <div class="form-control-wrap">
                            <input type="text" value="{{$blog->writer_by ?? null}}" name="writer_by" class="form-control" id="writer_by">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="phone-no">Rasm</label>
                        <div class="form-control-wrap">
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <img src="{{\Illuminate\Support\Facades\Storage::url($blog->image->image_path)}}">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pay-amount">Tavsif</label>
                        <div class="form-control-wrap">
                            <textarea class="form-control" name="description_uz" id="" cols="30" rows="10">{{old('description_uz')}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer bg-light">
                <span class="sub-text">Modal Footer Text</span>
            </div>
        </div>
    </div>
</div>
