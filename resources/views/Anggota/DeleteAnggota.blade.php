<form action="{{ route('detail.hapus', [$agt['id_pesertaor']]) }}" method="post" class="d-inline">
@method('delete')
@csrf
              
<!-- Modal -->
<div class="modal fade" id="ModalDelete{{$agt->id_pesertaor}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{{ __('Hapus Anggota')}}</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">Yakin akan menghapus <b> {{$agt->nama}}</b></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Cancel')}}</button>
        <button type="submit" class="btn btn-danger">{{ __('Hapus')}}</button>
      </div>
    </div>
  </div>
</div>  
</form>