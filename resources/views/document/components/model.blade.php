<div class="modal fade" id="doc-{{$document->id}}" tabindex="-1" role="dialog"
     aria-labelledby="Confirm to delete" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger">Warning</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>This will permanently delete Notice, are you sure you want to delete it</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
                <form action="{{ route('destroy.doc', $document->file) }}" method="post">
                    {{ method_field('delete') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger"
                            data-toggle="tooltip" title="Delete Permanently" data-placement="bottom">
                        Confirm
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
