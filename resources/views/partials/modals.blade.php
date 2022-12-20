<div class="modal" tabindex="-1" id="transmissionModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <h2 class="modal-title">@lang('stream_modal_title')</h2>
            <div class="modal-body">

                <p>@lang('stream_modal_description')</p>
                <div class="text-center">
                    <a href="{{route('live-broadcast')}}" class="btn btn-primary">@lang('stream_modal_btn')</a>
                </div>
            </div>

        </div>
    </div>
</div>
