<?php $this->load->view('back/layouts/header') ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
            <div class="card shadow mb-4">
                <div class="card-header bg-info py-3">
                    <h6 class="m-0 font-weight-bold text-white">Ubah Data Pengurus</h6>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('pengurus/run/update/'.$pengurus->idpngrs) ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group row">
                                    <label for="txt_nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" id="txt_nama" name="txt_nama" value="<?= $pengurus->namapngrs ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="txt_gmbr" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control form-control-sm" id="txt_gmbr" name="txt_gmbr">
                                        <br>
                                        <img src="<?= base_url('asset/pengurus/'.$pengurus->gbrpngrs) ?>" alt="<?= $pengurus->gbrpngrs ?>" width="200" height="200">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 offset-2">
                                        <button type="submit" id="btn_save" class="btn btn-sm btn-warning"><i class="fas fa-check fa-sm"></i> &nbsp; Simpan Perubahan</button>
                                        <a href="<?php echo site_url('admin/view/pengurus') ?>" class="btn btn-sm btn-danger"><i class="fas fa-reply fa-sm"></i> &nbsp; Batal</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group row">
                                    <label for="txt_jbtn" class="col-sm-2 col-form-label">Jabatan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-control-sm" id="txt_jbtn" name="txt_jbtn" value="<?= $pengurus->jbtnpngrs ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php $this->load->view('back/layouts/footer') ?>

</body></html>