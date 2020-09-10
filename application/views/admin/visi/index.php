<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Halaman Visi Misi</h1>

    <!-- DataTales Example -->
    <div id="reload" class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url(); ?>visi/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
        <?= $this->session->flashdata('message'); ?>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display" id="table-visi" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">Visi</th>
                            <th scope="col">Misi</th>

                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($data as $visi) : ?>
                            <tr>
                                <td><?= $visi->visi ?></td>
                                <td><?= $visi->misi ?></td>
                                <td>
                                    <a href="<?php base_url() ?>visi/edit/<?= $visi->id_visi; ?>" class="btn btn-success btn-xs">Edit</a>
                                    <a href="<?php base_url() ?>visi/hapus/<?= $visi->id_visi; ?>" class="btn btn-danger btn-xs ml-2">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>