<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data
                </div>

                <div class="card-body">
                    <form action="<?= base_url() ?>service/tambah" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama_service">Nama Service</label>
                            <input type="text" class="form-control" name="nama_service" id="nama_service">
                            <small class="form-text text-danger"><?= form_error('nama_service'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="detail_service">Detail Service</label>
                            <input type="text" class="form-control" name="detail_service" id="detail_service">
                            <small class="form-text text-danger"><?= form_error('detail_service'); ?></small>
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