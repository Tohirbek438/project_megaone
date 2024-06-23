<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Tahrirlash</h5>
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
        </div>
        <div class="modal-body">
            @if(isset($category_blog))
            <form action="{{route('category-blog.update',$category_blog->id)}}" class="mt-4" method="POST">
                @csrf
                @method('PUT')
                <div class="row g-gs">
                    <div class="col-md-6">
                        <div class="form-group"><label class="form-label" for="editName">Sarlavha uz</label><input
                                type="text" class="form-control" name="title_uz" id="editName" placeholder="Sarlavha uz" value="{{$category_blog->title_uz}}"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"><label class="form-label" for="editName">Sarlavha ru</label><input
                                type="text" class="form-control" name="title_ru" id="editName" placeholder="Sarlavha ru" value="{{$category_blog->title_ru}}"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"><label class="form-label" for="editName">Sarlavha en</label><input
                                type="text" class="form-control" name="title_en" id="editName" placeholder="Sarlavha en" value="{{$category_blog->title_en}}"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"><label class="form-label" for="editSlug">Slug</label>
                            <input
                                type="text" class="form-control" name="slug" id="editName" placeholder="Slug" value="{{$category_blog->slug}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group"><label class="form-label" for="editSlug">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1">Chop etildi</option>
                                <option value="2">Kutilmoqda</option>
                                <option value="3">Qoralama</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                            <li>
                                <button type="submit" data-bs-dismiss="modal" class="btn btn-primary">Tahrirlash
                                </button>
                            </li>
                            <li><a href="#" class="link link-light" data-bs-dismiss="modal">Bekor qilish</a></li>
                        </ul>
                    </div>
                </div>
            </form>
            @else
            @endif
        </div>
    </div>
</div>
