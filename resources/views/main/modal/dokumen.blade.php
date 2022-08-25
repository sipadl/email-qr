<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Dokumen</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('create.dokumen') }}" method="post">
        @csrf
        <div class="modal-body">
            <div class="form-group row mb-2">
                <label for="" class="col-form-label col-md-5 mt-1">Pemilik</label>
                <div class="col-md-7">
                    <input type="text" required name="pemilik" class="form-control">
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="" class="col-form-label col-md-5 mt-1">KTP</label>
                <div class="col-md-7">
                    <input type="text" required name="ktp" class="form-control">
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="" class="col-form-label col-md-5 mt-1">Nama Perusahaan</label>
                <div class="col-md-7">
                    <input type="text" required name="nama_perusahaan" class="form-control">
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="" class="col-form-label col-md-5 mt-1">Email</label>
                <div class="col-md-7">
                    <input type="email" required name="email" class="form-control" >
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="" class="col-form-label col-md-5 mt-1">Handphone</label>
                <div class="col-md-7">
                    <input type="text" required name="no_telp" class="form-control">
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="" class="col-form-label col-md-5 mt-1">Alamat Perusahaan</label>
                <div class="col-md-7">
                    <textarea type="text" required name="alamat_perusahaan" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
        </div>
      </div>
    </div>
  </div>
