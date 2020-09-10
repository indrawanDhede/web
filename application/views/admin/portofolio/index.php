<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Halaman Portofolio</h1>

    <!-- DataTales Example -->
    <div id="reload" class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url(); ?>portofolio/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
        <?= $this->session->flashdata('message'); ?>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display" id="table-porto" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">Foto Perusahaan</th>
                            <th scope="col">Nama Perusahaan</th>
                            <th scope="col">Detail Pekerjaan</th>

                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($data as $porto) : ?>
                            <tr>
                                <td><img width="100px" src="<?= base_url() ?>assets/img/portofolio/<?= $porto->foto ?>" alt=""></td>
                                <td><?= $porto->title ?></td>
                                <td><?= $porto->detail ?></td>
                                <td>
                                    <a href="<?php base_url() ?>portofolio/edit/<?= $porto->id_porto; ?>" class="btn btn-success btn-xs">Edit</a>
                                    <a href="<?php base_url() ?>portofolio/hapus/<?= $porto->id_porto; ?>" class="btn btn-danger btn-xs ml-2">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>