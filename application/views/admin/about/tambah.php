<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data
                </div>

                <div class="card-body">
                    <form action="<?= base_url() ?>about/tambah" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">nama</label>
                            <input type="text" class="form-control" name="nama" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">jabatan</label>
                            <input type="text" class="form-control" name="jabatan" id="jabatan">
                            <small class="form-text text-danger"><?= form_error('jabatan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" id="deskripsi">
                            <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control-file" id="foto" name="foto">
                            <?= form_error('foto', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>

                    </form>
                </div>
            </div>

        </div>
    </div>

</div>