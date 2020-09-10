<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Halaman About</h1>

    <!-- DataTales Example -->
    <div id="reload" class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url(); ?>about/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
        <?= $this->session->flashdata('message'); ?>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display" id="table-visi" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">Foto</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Deskripsi</th>

                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($data as $about) : ?>
                            <tr>
                                <td><img width="50px" src="<?= base_url() ?>assets/img/team/<?= $about->foto ?>" alt=""></td>
                                <td><?= $about->nama ?></td>
                                <td><?= $about->jabatan ?></td>
                                <td><?= $about->deskripsi ?></td>
                                <td>
                                    <a href="<?php base_url() ?>about/edit/<?= $about->id_about; ?>" class="btn btn-success btn-xs">Edit</a>
                                    <a href="<?php base_url() ?>about/hapus/<?= $about->id_about; ?>" class="btn btn-danger btn-xs ml-2">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>