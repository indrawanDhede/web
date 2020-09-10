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
                            <input type="hidden" name="id_porto" value="<?= $portofolio->id_porto ?>">
                            <input type="hidden" name="fotoLama" value="<?= $portofolio->foto ?>">
                            <label for="title">Nama Perusahaan</label>
                            <input type="text" class="form-control" name="title" id="title" value="<?= $portofolio->title ?>">
                            <small class="form-text text-danger"><?= form_error('title'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="detail">Detail Pekerjaan</label>
                            <input type="text" class="form-control" name="detail" id="detail" value="<?= $portofolio->detail ?>">
                            <small class="form-text text-danger"><?= form_error('detail'); ?></small>
                        </div>

                        <div class="form-group">
                            <img width="50" src="<?= base_url() ?>assets/img/portofolio/<?= $portofolio->foto ?>" alt="">
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