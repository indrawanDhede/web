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
                            <input type="hidden" name="id_service" value="<?= $service->id_service ?>">
                            <input type="hidden" name="fotoLama" value="<?= $service->foto ?>">

                            <label for="nama_service">Nama Service</label>
                            <input type="text" class="form-control" name="nama_service" id="nama_service" value="<?= $service->nama_service ?>">
                            <small class="form-text text-danger"><?= form_error('nama_service'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="detail_service">Detail Service</label>
                            <input type="text" class="form-control" name="detail_service" id="detail_service" value="<?= $service->detail_service ?>">
                            <small class="form-text text-danger"><?= form_error('detail_service'); ?></small>
                        </div>
                        <div class="form-group">
                            <img width="50" src="<?= base_url() ?>assets/img/icon/<?= $service->foto ?>" alt="">
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