<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Edit Data
                </div>

                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_visi" value="<?= $visi->id_visi; ?>">
                        <div class="form-group">
                            <label for="visi">visi</label>
                            <input type="text" class="form-control" name="visi" id="visi" value="<?= $visi->visi; ?>">
                            <small class="form-text text-danger"><?= form_error('visi'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="misi">misi</label>
                            <input type="text" class="form-control" name="misi" id="misi" value="<?= $visi->misi; ?>">
                            <small class="form-text text-danger"><?= form_error('misi'); ?></small>
                        </div>


                        <button type="submit" class="btn btn-primary float-right">Update Data</button>

                    </form>
                </div>
            </div>

        </div>
    </div>

</div>