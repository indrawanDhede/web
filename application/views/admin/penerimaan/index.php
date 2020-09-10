<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Penerimaan Mahasiswa</h1>

    <!-- DataTales Example -->
    <div id="reload" class="card shadow mb-4">
        <div class="card-header py-3">
            <button class="btn btn-primary" id="btnTambah" data-toggle="modal" data-target="#modalPenerimaan">Tambah Data</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display" id="tablePenerimaan" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">Foto</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Telp</th>
                            <th scope="col">Email</th>
                            <th scope="col">Tgl Masuk</th>
                            <!-- <th scope="col">Status</th> -->
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>

                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Modal -->
<div class="modal fade" id="modalPenerimaan" tabindex="-1" role="dialog" aria-labelledby="modalLabelMahasiswa" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabelMahasiswa">Form Pendaftaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="namaMhs">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama..">
                        <div id="error_nama"></div>
                        </input>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" cols="10" rows="2"></textarea>
                        <div id="error_alamat"></div>
                    </div>
                    <div class="form-group">
                        <label for="telp">Telepon</label>
                        <input type="text" class="form-control" id="telp" placeholder="Masukkan nomor telepon..">
                        <div id="error_telp"></div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Masukkan email..">
                        <div id="error_email"></div>
                    </div>
                    <!-- <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control" id="foto">
                        <div id="mhs_error"></div>
                    </div> -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary simpan-mhs">Simpan Data</button>
                <button type="submit" class="btn btn-primary ubah-mhs">Ubah Data</button>
            </div>
        </div>
    </div>
</div>
<!--END MODAL ADD-->