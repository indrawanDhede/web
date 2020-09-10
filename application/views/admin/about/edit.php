<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form edit Data
                </div>

                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" name="id_about" value="<?= $about->id_about ?>">
                            <input type="hidden" name="fotoLama" value="<?= $about->foto ?>">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="<?= $about->nama ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jabatan">jabatan</label>
                            <input type="text" class="form-control" name="jabatan" id="jabatan" value="<?= $about->jabatan ?>">
                            <small class="form-text text-danger"><?= form_error('jabatan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="<?= $about->deskripsi ?>">
                            <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
                        </div>
                        <div class="form-group">
                            <img width="50" src="<?= base_url() ?>assets/img/team/<?= $about->foto ?>" alt="">
                            <label for="foto">Foto</label>

                            <input type="file" class="form-control-file" id="foto" name="foto">
                            <?= form_error('foto', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <button type="submit" name="edit" class="btn btn-primary float-right">edit Data</button>

                    </form>
                </div>
            </div>

        </div>
    </div>

</div>