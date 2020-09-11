<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Halaman Service</h1>

    <!-- DataTales Example -->
    <div id="reload" class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url(); ?>service/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
        <?= $this->session->flashdata('message'); ?>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display" id="table-visi" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">Icon</th>
                            <th scope="col">Nama Service</th>
                            <th scope="col">Detail Service</th>

                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($data as $service) : ?>
                            <tr>
                                <td><img width="50px" src="<?= base_url() ?>assets/img/icon/<?= $service->foto ?>" alt=""></td>
                                <td><?= $service->nama_service ?></td>
                                <td><?= $service->detail_service ?></td>
                                <td>
                                    <a href="<?php base_url() ?>service/edit/<?= $service->id_service; ?>" class="btn btn-success btn-xs">Edit</a>
                                    <a href="<?php base_url() ?>service/hapus/<?= $service->id_service; ?>" class="btn btn-danger btn-xs ml-2">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>