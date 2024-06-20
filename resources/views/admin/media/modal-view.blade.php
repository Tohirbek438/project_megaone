<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">{{$media->name_uz ?? null}}</h5>
            <a href="#" class="close" data-bs-dismiss="modal" aria-label="Close">
                <em class="icon ni ni-cross"></em>
            </a>
        </div>
        <div class="modal-body">
            <table class="table">

                <tr>
                    <th>Name uz</th>
                    <td>{{$media->name_uz ?? null}}</td>

                </tr>
                <tr>
                    <th>Name ru</th>
                    <td>{{$media->name_ru ?? null}}</td>
                </tr>
                <tr>
                    <th>Name en</th>
                    <td>{{$media->name_eng ?? null}}</td>
                </tr>
                <tr>
                    <th>Alter name</th>
                    <td>{{$media->alter_media ?? null}}</td>
                </tr>
                <tr>
                    <th>Turkumi</th>
                    <td>{{$media->category->title_uz ?? null}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
