<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Halaman Contact</h1>

    <!-- DataTales Example -->
    <div id="reload" class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url(); ?>contact/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
        <?= $this->session->flashdata('message'); ?>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered display" id="table-contact" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telp</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jam Kerja</th>

                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($data as $contact) : ?>
                            <tr>
                                <td><?= $contact->title ?></td>
                                <td><?= $contact->email ?></td>
                                <td><?= $contact->telp ?></td>
                                <td><?= $contact->alamat ?></td>
                                <td><?= $contact->jam_kerja ?></td>
                                <td>
                                    <a href="<?php base_url() ?>contact/edit/<?= $contact->id_contact; ?>" class="btn btn-success btn-xs">Edit</a>
                                    <a href="<?php base_url() ?>contact/hapus/<?= $contact->id_contact; ?>" class="btn btn-danger btn-xs ml-2">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>