<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>

                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="visi">visi</label>
                            <input type="text" class="form-control" name="visi" id="visi">
                            <small class="form-text text-danger"><?= form_error('visi'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="misi">misi</label>
                            <input type="text" class="form-control" name="misi" id="misi">
                            <small class="form-text text-danger"><?= form_error('misi'); ?></small>
                        </div>


                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>

                    </form>
                </div>
            </div>

        </div>
    </div>

</div>