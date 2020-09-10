<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Edit Data
                </div>

                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_contact" value="<?= $contact->id_contact; ?>">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email" value="<?= $contact->email; ?>">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="telp">Telepon</label>
                            <input type="text" class="form-control" name="telp" id="telp" value="<?= $contact->telp; ?>">
                            <small class="form-text text-danger"><?= form_error('telp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $contact->alamat; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jam_kerja">Jam Kerja</label>
                            <input type="text" class="form-control" name="jam_kerja" id="jam_kerja" value="<?= $contact->jam_kerja; ?>">
                            <small class="form-text text-danger"><?= form_error('jam_kerja'); ?></small>
                        </div>


                        <button type="submit" class="btn btn-primary float-right">Update Data</button>

                    </form>
                </div>
            </div>

        </div>
    </div>

</div>