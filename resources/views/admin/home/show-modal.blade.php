<div class="modal-dialog col-md-12" role="document">
    <div class="card card-preview my-5 mx-2 col-md-12" style="padding: 7% 7%;">
        <div class="modal-header">
            <h5 class="modal-title">Batafsil</h5>
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
        </div>
        @if(isset($page))
            <table class="table table-orders">
                <tr>
                    <th>Nomi uz</th>
                    <td>{{$page->name_uz}}</td>
                </tr>
                <tr>
                    <th>Nomi ru</th>
                    <td>{{$page->name_ru}}</td>
                </tr>
                <tr>
                    <th>Nomi eng</th>
                    <td>{{$page->name_eng}}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        @if($page->status == 1)
                            <span class="text-success">Chop etildi</span>
                        @elseif($page->status == 2)
                            <span class="text-primary">Kutilmoqda</span>
                        @elseif($page->status == 3)
                            <span class="text-danger">Qoralama</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Tavsif uz</th>
                    <td>{{$page->description_uz}}</td>
                </tr>
                <tr>
                    <th>Tavsif ru</th>
                    <td>{{$page->description_ru}}</td>
                </tr>
                <tr>
                    <th>Tavsif eng</th>
                    <td>{{$page->description_eng}}</td>
                </tr>
            </table>
        @else
        @endif

    </div>
</div>
