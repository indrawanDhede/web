<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data
                </div>

                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title">
                            <small class="form-text text-danger"><?= form_error('title'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="telp">Telepon</label>
                            <input type="text" class="form-control" name="telp" id="telp">
                            <small class="form-text text-danger"><?= form_error('telp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jam_kerja">Jam kerja</label>
                            <input type="text" class="form-control" name="jam_kerja" id="jam_kerja">
                            <small class="form-text text-danger"><?= form_error('jam_kerja'); ?></small>
                        </div>


                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>

                    </form>
                </div>
            </div>

        </div>
    </div>

</div>