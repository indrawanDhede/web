</div>
<!-- End of Main Content -->

<!-- Footer -->
<!-- <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Siakad University 2020</span>
            </div>
        </div>
    </footer> -->
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('logout') ?>">Logout</a>
            </div>
        </div>
    </div>
</div>
< <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Datatables plugins -->
    <script src="<?= base_url('assets/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

    <!-- Sweetalert -->
    <script src="<?= base_url('assets/') ?>js/sweetalert.min.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script> -->



    <script>
        $(document).ready(function() {
            // $('.js-example-basic-single').select2();
            $('#tablePeriode, #tableFakultas, #tablePstudi').DataTable();

            tampil_data_periode();


            // tampil data periode
            function tampil_data_periode() {
                $.ajax({
                    type: 'GET',
                    url: '<?= base_url() ?>periode/listPeriode',
                    async: true,
                    dataType: 'json',
                    success: function(data) {
                        var html = '';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<tr>' +
                                '<td>' + data[i].tahun + '</td>' +
                                '<td>' + data[i].nama_periode + '</td>' +
                                '<td style="text-align:right;">' +
                                '<a href="javascript:;" class="btn btn-info btn-sm item_edit" data="' + data[i].id_periode + '">Edit</a>' + ' ' +
                                '<a href="javascript:;" class="btn btn-danger btn-sm item_hapus" data="' + data[i].id_periode + '">Hapus</a>' +
                                '</td>' +
                                '</tr>';
                        }
                        $('#data_periode').html(html);
                    }
                })
            }

            //  tambah data periode
            $('#btn-simpan').on('click', function() {
                var tahun = $('#tahun').val();
                var periode = $('#nama_periode').val();

                $.ajax({
                    type: 'POST',
                    data: {
                        tahun: tahun,
                        periode: periode
                    },
                    url: '<?= base_url() ?>periode/tambahPeriode',
                    dataType: 'json',
                    success: function(data) {
                        $('[name="tahun"]').val("");
                        $('[name="nama_periode"]').val("");
                        $('#ModalTambah').modal('hide');
                        swal("Good job!", "Data berhasil di simpan!", "success");
                        tampil_data_periode();
                    }
                });
                return false;
            });

            // edit data periode
            $('#data_periode').on('click', '.item_edit', function() {
                var id = $(this).attr('data');

                $.ajax({
                    type: 'post',
                    data: {
                        id: id
                    },
                    url: '<?= base_url() ?>periode/getDataById',
                    dataType: 'json',
                    success: function(data) {
                        $('#ModalUbah').modal('show');
                        $('[name="id"]').val(data[0].id_periode);
                        $('[name="tahun2"]').val(data[0].tahun);
                        $('[name="nama_periode2"]').val(data[0].nama_periode);
                    }
                });
                return false;
            });

            // update data periode
            $('#btn-ubah').on('click', function() {
                var id = $('#id').val();
                var tahun = $('#tahun2').val();
                var periode = $('#nama_periode2').val();

                $.ajax({
                    type: 'POST',
                    data: {
                        id: id,
                        tahun: tahun,
                        periode: periode
                    },
                    url: '<?= base_url() ?>periode/ubahData',
                    dataType: 'json',
                    success: function(data) {
                        $('[name="tahun2"]').val("");
                        $('[name="nama_periode2"]').val("");
                        $('#ModalUbah').modal('hide');
                        swal("Good job!", "Data berhasil di ubah!", "success");
                        tampil_data_periode();
                    }
                });
                return false;
            });


            // hapus data
            $('#data_periode').on('click', '.item_hapus', function() {
                var id = $(this).attr('data');

                swal({
                        title: "Apakah anda yakin",
                        text: "data ini akan dihapus?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                type: 'post',
                                data: {
                                    id: id
                                },
                                url: '<?= base_url() ?>periode/hapusPeriode',
                                dataType: 'json',
                                success: function(data) {
                                    swal("Data berhasil di hapus!", {
                                        icon: "success",
                                    });
                                    tampil_data_periode();
                                }
                            })
                        }
                    });
            });


            tampil_data_fakultas();
            // tampil data fakultas
            function tampil_data_fakultas() {
                $.ajax({
                    type: 'GET',
                    url: '<?= base_url() ?>fakultas/listFakultas',
                    async: true,
                    dataType: 'json',
                    success: function(data) {
                        var html = '';
                        var no = 1;
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<tr>' +
                                '<td>' + no++ + '</td>' +
                                '<td>' + data[i].nama_fakultas + '</td>' +
                                '<td style="text-align:left;">' +
                                '<a href="javascript:;" class="btn btn-info btn-sm item_edit" data="' + data[i].id_fakultas + '" data-nama="' + data[i].nama_fakultas + '">Edit</a>' + ' ' +
                                '<a href="javascript:;" class="btn btn-danger btn-sm item_hapus" data="' + data[i].id_fakultas + '">Hapus</a>' +
                                '</td>' +
                                '</tr>';
                        }
                        $('#data_fakultas').html(html);
                    }
                })
            }



            // edit data fakultas
            $('#data_fakultas').on('click', '.item_edit', function() {

                var id = $(this).attr('data');
                $('#id_fakultas').val("");
                $('#fakultas2').val("");
                $('#fakultas_error2').html("");

                $.ajax({
                    type: 'POST',
                    url: '<?= base_url() ?>fakultas/getFakultas',
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function(data) {

                        $('#ModalUbahFakultas').modal('show');
                        $('[name="id"]').val(data[0].id_fakultas);
                        $('[name="fakul"]').val(data[0].nama_fakultas);
                    }
                })
            })



            // update data fakultas
            $('#ubah-fakultas').on('click', function() {

                var id = $('#id_fakultas').val();
                var fakultas = $('#fakultas2').val();

                $.ajax({
                    type: 'post',
                    url: '<?= base_url() ?>fakultas/updateFakultas',
                    data: {
                        id: id,
                        fakultas: fakultas
                    },
                    dataType: 'json',
                    success: function(data) {

                        if (data.error == false) {
                            $('#ModalUbahFakultas').modal('hide');
                            swal("Good Job!", "Data berhasil diubah", "success");
                            $('#fakultas_error2').html("");
                            $('#fakultas2').val("");

                            tampil_data_fakultas();
                        } else {
                            $('#fakultas_error2').html(data.fakultas);
                            $('#fakultas2').on('keyup', function() {
                                $('#fakultas_error2').html("");
                            })
                        }
                    }
                })
            })



            // tambah data fakultas
            $('#btn-tambah').on('click', function() {

                $('#fakultas_error').html("");
                $('#fakultas').val("");
            })


            // tambah data fakultas
            $('#simpan-fakultas').on('click', function() {
                var fakultas = $('#fakultas').val();
                $.ajax({
                    type: 'post',
                    url: '<?= base_url() ?>fakultas/tambah',
                    data: {
                        fakultas: fakultas
                    },
                    dataType: 'json',
                    success: function(data) {
                        if (data.error == false) {

                            $('#ModalTambahFakultas').modal('hide');
                            swal("Good Job!", "Data berhasil ditambah", "success");
                            $('#fakultas_error').html("");
                            $('#fakultas').val("");

                            tampil_data_fakultas();
                        } else {
                            $('#fakultas_error').html(data.fakultas);
                            $('#fakultas').on('keyup', function() {
                                $('#fakultas_error').html("");
                            })
                        }
                    }
                })
            })


            // hapus data fakultas
            $('#data_fakultas').on('click', '.item_hapus', function() {
                var id = $(this).attr('data');

                swal({
                        title: "Apakah anda yakin",
                        text: "data ini akan dihapus?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                type: 'post',
                                data: {
                                    id: id
                                },
                                url: '<?= base_url() ?>fakultas/hapusFakultas',
                                dataType: 'json',
                                success: function(data) {
                                    swal("Data berhasil di hapus!", {
                                        icon: "success",
                                    });
                                    tampil_data_fakultas();
                                }
                            })
                        }
                    });
            });



            // Program Studi
            tampil_data_pstudi();


            function tampil_data_pstudi() {
                $.ajax({
                    type: 'get',
                    url: '<?= base_url() ?>pstudi/getPstudi',
                    async: true,
                    dataType: 'json',
                    success: function(data) {
                        var html = '';
                        var no = 1;
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<tr>' +
                                '<td>' + no++ + '</td>' +
                                '<td>' + data[i].nama_fakultas + '</td>' +
                                '<td>' + data[i].nama_pstudi + '</td>' +
                                '<td style="text-align:left;">' +
                                '<a href="javascript:;" class="btn btn-info btn-sm item_edit" data="' + data[i].id_pstudi + '">Edit</a>' + ' ' +
                                '<a href="javascript:;" class="btn btn-danger btn-sm item_hapus" data="' + data[i].id_pstudi + '">Hapus</a>' +
                                '</td>' +
                                '</tr>';
                        }
                        $('#data_pstudi').html(html);
                    }
                })
            }


            // tambah program studi
            $('#tambah-studi').on('click', function() {
                $('#p_fakultas').val("");
                $('#pstudi').val("");
                $('#fakultas_error').html("");
                $('#pstudi_error').html("");
                $('#ModalTambahPstudi').modal('show');

                $.ajax({
                    type: 'get',
                    url: '<?= base_url() ?>fakultas/listFakultas',
                    async: true,
                    dataType: 'json',
                    success: function(data) {
                        var html = '';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<option value=' + data[i].id_fakultas + '>' + data[i].nama_fakultas + '</option>';
                        }

                        $('#p_fakultas').html(html);


                    }
                })
                return false;
            })

            $('#simpan-pstudi').on('click', function() {

                var fakultas = $('#p_fakultas').val();
                var pstudi = $('#pstudi').val();

                $.ajax({
                    type: 'post',
                    url: '<?= base_url() ?>pstudi/tambahPstudi',
                    data: {
                        fakultas: fakultas,
                        pstudi: pstudi
                    },
                    dataType: 'json',
                    success: function(data) {
                        if (data.error == true) {
                            $('#fakultas_error').html(data.err_fakultas);
                            $('#pstudi_error').html(data.err_pstudi);
                            $('#pstudi').on('keyup', function() {
                                $('#pstudi_error').html("");
                            })
                            $('#fakultas').on('keyup', function() {
                                $('#fakultas_error').html("");
                            })
                        } else {
                            $('#ModalTambahPstudi').modal('hide');
                            swal("Good Job!", "Data berhasil ditambah", "success");
                            tampil_data_pstudi();
                        }
                    }
                })
            })



            //edit data pstudi
            $('#data_pstudi').on('click', '.item_edit', function() {
                var id = $(this).attr('data');
                $('#ubah_pfakultas').val("");
                $('#ubah_studi').val("");

                $.ajax({
                    type: 'post',
                    url: '<?= base_url() ?>pstudi/editPstudi',
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function(data) {
                        $('#ubah_pfakultas').html("");
                        $('#ModalUbahPstudi').modal('show');


                    }
                })
            })



            // hapus data pstudi
            $('#data_pstudi').on('click', '.item_hapus', function() {
                var id = $(this).attr('data');

                swal({
                        title: "Apakah anda yakin",
                        text: "data ini akan dihapus?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                type: 'post',
                                data: {
                                    id: id
                                },
                                url: '<?= base_url() ?>pstudi/hapusPstudi',
                                dataType: 'json',
                                success: function(data) {

                                    swal(data.message, {
                                        icon: "success",
                                    });
                                    tampil_data_pstudi();
                                }
                            })
                        }
                    });
            })





            //penerimaan mahasiswa
            var table = $('#tablePenerimaan').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": true,
                "order": [
                    [0, 'asc']
                ],
                "ajax": {
                    "url": "<?php echo base_url('penerimaan/view') ?>",
                    "type": "POST"
                },
                "deferRender": true,
                "aLengthMenu": [
                    [5, 10, 50, 100],
                    [5, 10, 50, 100]
                ],
                "columns": [{
                        "render": function(data, type, row) {
                            var html = "";
                            if (row.foto == "") {
                                html = '<img src="<?= base_url() ?>assets/img/profile/default.jpg" width="80px"></img>';
                            } else {
                                html = '<img src="<?= base_url() ?>assets/img/profile/' + row.foto + '" width="80px"></img>';
                            }
                            return html;
                        }
                    },
                    {
                        "data": "nim"
                    },
                    {
                        "data": "nama"
                    },
                    {
                        "data": "alamat"
                    },
                    {
                        "data": "telp"
                    },
                    {
                        "data": "email"
                    },
                    {
                        "data": "tgl_masuk"
                    },
                    {
                        "render": function(data, type, row) {
                            var html = "<a href='javascript:;' class='badge badge-info btn-edit' data='" + row.id + "'>EDIT</a> | "
                            html += "<a href='javascript:;' class='badge badge-danger btn-hapus' data='" + row.id + "'>DELETE</a>"
                            return html;
                        }
                    },
                ],
            });



            // tambah data mahasiswa
            $('#btnTambah').on('click', function() {
                $('#modalPenerimaan').modal('show');
                $('#nama').val("");
                $('#alamat').val("");
                $('#telp').val("");
                $('#email').val("");

                $('#error_nama').html("");
                $('#error_alamat').html("");
                $('#error_telp').html("");
                $('#error_email').html("");
                $('#modalLabelMahasiswa').html('Form Tambah Mahasiswa');
                $('.ubah-mhs').hide();
                $('.simpan-mhs').show();
            })

            $('.simpan-mhs').on('click', function() {
                var nama = $('#nama').val();
                var alamat = $('#alamat').val();
                var telp = $('#telp').val();
                var email = $('#email').val();

                $.ajax({
                    type: 'POST',
                    url: '<?= base_url() ?>penerimaan/tambah',
                    data: {
                        nama: nama,
                        alamat: alamat,
                        telp: telp,
                        email: email
                    },
                    dataType: 'JSON',
                    success: function(data) {
                        if (data.error == true) {
                            $('#error_nama').html(data.error_nama);
                            $('#error_alamat').html(data.error_alamat);
                            $('#error_telp').html(data.error_telp);
                            $('#error_email').html(data.error_email);

                            $('#nama').on('keyup', function() {
                                $('#error_nama').html("");
                            });
                            $('#alamat').on('keyup', function() {
                                $('#error_alamat').html("");
                            });
                            $('#telp').on('keyup', function() {
                                $('#error_telp').html("");
                            });
                            $('#email').on('keyup', function() {
                                $('#error_email').html("");
                            })

                        } else {
                            // jika tidak error
                            if (data.error == false && data.pesan == "berhasil") {
                                $('#modalPenerimaan').modal('hide');
                                swal("Good Job!", "Data berhasil ditambah", "success");
                                table.ajax.reload();
                            } else if (data.error == false && data.pesan == "gagal") {
                                $('#modalPenerimaan').modal('hide');
                                swal("Good Job!", "Data gagal ditambah", "warning");
                                table.ajax.reload();
                            }
                        }
                    }
                })
            })



            // edit data mahasiswa
            $('#tablePenerimaan').on('click', '.btn-edit', function() {
                var id = $(this).attr('data');

                $('#error_nama').html("");
                $('#error_alamat').html("");
                $('#error_telp').html("");
                $('#error_email').html("");

                $('#modalPenerimaan').modal('show');
                $('#modalLabelMahasiswa').html('Form Edit Mahasiswa');
                $('.simpan-mhs').hide();
                $('.ubah-mhs').show();


                $.ajax({
                    type: 'post',
                    url: '<?= base_url() ?>penerimaan/edit',
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function(data) {
                        $('#nama').val(data.nama);
                        $('#alamat').val(data.alamat);
                        $('#telp').val(data.telp);
                        $('#email').val(data.email);

                        $('.ubah-mhs').on('click', function() {
                            var nama = $('#nama').val();
                            var alamat = $('#alamat').val();
                            var telp = $('#telp').val();
                            var email = $('#email').val();

                            $.ajax({
                                type: 'post',
                                url: '<?= base_url() ?>penerimaan/update',
                                data: {
                                    id: id,
                                    nama: nama,
                                    alamat: alamat,
                                    telp: telp,
                                    email: email
                                },
                                dataType: 'json',
                                success: function(data) {
                                    if (data.error == true) {
                                        $('#error_nama').html(data.error_nama);
                                        $('#error_alamat').html(data.error_alamat);
                                        $('#error_telp').html(data.error_telp);
                                        $('#error_email').html(data.error_email);

                                        $('#nama').on('keyup', function() {
                                            $('#error_nama').html("");
                                        });
                                        $('#alamat').on('keyup', function() {
                                            $('#error_alamat').html("");
                                        });
                                        $('#telp').on('keyup', function() {
                                            $('#error_telp').html("");
                                        });
                                        $('#email').on('keyup', function() {
                                            $('#error_email').html("");
                                        })

                                    } else {
                                        // jika tidak error
                                        if (data.error == false && data.pesan == "berhasil") {
                                            $('#modalPenerimaan').modal('hide');
                                            swal("Good Job!", "Data berhasil ditambah", "success");
                                            table.ajax.reload();
                                        } else if (data.error == false && data.pesan == "gagal") {
                                            $('#modalPenerimaan').modal('hide');
                                            swal("Good Job!", "Data gagal ditambah", "warning");
                                            table.ajax.reload();
                                        }
                                    }
                                }
                            })
                        })
                    }
                })
            })


            $('#tablePenerimaan').on('click', '.btn-hapus', function() {
                var id = $(this).attr('data');

                swal({
                        title: "Apakah anda yakin",
                        text: "data ini akan dihapus?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                type: 'post',
                                data: {
                                    id: id
                                },
                                url: '<?= base_url() ?>penerimaan/hapus',
                                dataType: 'json',
                                success: function(data) {
                                    swal(data.message, {
                                        icon: "success",
                                    });
                                    table.ajax.reload();
                                }
                            })
                        }
                    });
            })

            // reload table tiap 30 detik
            setInterval(function() {
                table.ajax.reload();
            }, 30000);















        });
    </script>

    </body>

    </html>