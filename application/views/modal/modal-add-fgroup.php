<!-- Button trigger modal -->
<div class="modal fade" id="addFgroup" tabindex="-1" aria-labelledby="addFgroupLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
            <form enctype="multipart/form-data" method="POST" action="<?= base_url() ?>manage/fgroup/add">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="addUserLabel">Tambah Kelola Fungsi Jabatan Baru</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="row">
                      <div class="col col-12 col-lg-6 mb-lg-2 mb-2">
                          <label class="mb-2">Nama</label>
                          <input type="text" name="func_group_name" class="form-control" />
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
    </div>
</div>

