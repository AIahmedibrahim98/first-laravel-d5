<!-- Button trigger modal -->
<button type="button" class="btn btn-{{ $btn_color??'primary' }}" data-bs-toggle="modal"
    data-bs-target="#exampleModal{{$id_t}}">
    {{ $title }}
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{$id_t}}" tabindex="-1"
    aria-labelledby="exampleModal{{$id_t}}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModal{{$id_t}}Label">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal">Exit</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
