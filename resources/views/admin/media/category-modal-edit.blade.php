<style>
    .dz-message {
        text-align: center;
        margin: 0 auto;
        width: 100%;
    }

</style>
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Turkum Tahrirlash</h5>
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
        </div>

        <div class="modal-body">
            @if(isset($category))
                <form action="{{ route('media-category.update',$category->id ?? null)}}" method="POST" class="mt-4"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row g-gs">
                        <div class="col-md-12">
                            <div class="form-group"><label class="form-label" for="addName">Sarlavha
                                    uz</label><input
                                    type="text" class="form-control" name="title_uz" id="addName"
                                    value="{{$category->title_uz}}">
                                @error('title_uz')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group"><label class="form-label" for="addName">Sarlavha
                                    ru</label><input
                                    type="text" class="form-control" name="title_ru" id="addName"
                                    value="{{$category->title_ru}}">
                                @error('title_ru')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group"><label class="form-label" for="addName">Sarlavha
                                    english</label><input
                                    type="text" class="form-control" name="title_eng" id="addName"
                                    value="{{$category->title_en}}"
                                @error('title_eng')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li>
                                    <button type="submit" data-bs-dismiss="modal" class="btn btn-primary">Tahrirlash
                                    </button>
                                </li>
                                <li><a href="#" class="link link-light" data-bs-dismiss="modal">Cancel</a></li>
                            </ul>
                        </div>
                    </div>

                </form>

            @else
            @endif
        </div>
    </div>
</div>



