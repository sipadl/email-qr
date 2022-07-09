<!-- Modal -->
<div class="modal fade" id="changeStatus" tabindex="-1" aria-labelledby="changeStatusLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="changeStatusLabel">Tambah Dokumen</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('upload.akta') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" id="id">
        <div class="modal-body">
            <div class="form-group row mb-2">
                <label for="" class="col-form-label col-md-5 mt-1">Pemilik</label>
                <div class="col-md-7">
                    <input type="text" name="pemilik" id="pemilik" disabled class="form-control">
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="" class="col-form-label col-md-5 mt-1">KTP</label>
                <div class="col-md-7">
                    <input type="text" name="ktp" id="ktp" class="form-control" disabled>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="" class="col-form-label col-md-5 mt-1">Nama Perusahaan</label>
                <div class="col-md-7">
                    <input type="text" name="nama_perusahaan" id="nama_perusahaan" disabled class="form-control">
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="" class="col-form-label col-md-5 mt-1">Email</label>
                <div class="col-md-7">
                    <input type="text" name="email" class="form-control" id="email" disabled >
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="" class="col-form-label col-md-5 mt-1">Handphone</label>
                <div class="col-md-7">
                    <input type="text" name="no_telp" class="form-control" id="no_telp" disabled>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="" class="col-form-label col-md-5 mt-1">Alamat Perusahaan</label>
                <div class="col-md-7">
                    <textarea type="text" name="alamat_perusahaan" class="form-control" id="alamat_perusahaan" disabled></textarea>
                </div>
            </div>
            <div class="form-group row mb-2">
                <label for="" class="col-form-label col-md-5 mt-1">Akta Perusahaan</label>
                <div class="col-md-7">
                    <div class="mb-3">
                        <input class="form-control" name="akta_perusahaan" type="file" id="formFile">
                      </div>
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
