<?php $this->load->view('./partials/head'); ?>

<!-- Preloader -->
<?php $this->load->view('./partials/preloader'); ?>

<!-- Navbar -->
<?php $this->load->view('./partials/navbar'); ?>

<!-- Sidebar -->
<?php $this->load->view('./partials/sidebar'); ?>

<!-- Content Wrapper -->
<div class="content-wrapper">
    <!-- Header halaman -->
    <?php $this->load->view('./partials/content-header'); ?>

    <!-- Konten utama -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <!-- Judul dan tools card -->
                        <div class="card-header">
                            <h5 class="card-title">Halo admin, kamu di <?php echo isset($title) ? $title : ''; ?></h5>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                        <i class="fas fa-wrench"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a href="#" class="dropdown-item">Action</a>
                                        <a href="#" class="dropdown-item">Another action</a>
                                        <a href="#" class="dropdown-item">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <!-- Tabel Data Mutasi -->
                        <div class="card-body">
                            <!-- Form pencarian spesifik kolom -->
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <select id="search-column" class="form-control select2-search">
                                        <option value="2">Nama Pegawai</option>
                                        <option value="3">Pengadilan Asal</option>
                                        <option value="4">Pengadilan Hasil TPM</option>
                                        <option value="5">Periode</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="search-value" class="form-control"
                                        placeholder="Kata kunci...">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" id="btn-search-column"
                                        class="btn btn-primary w-100">Cari</button>
                                </div>
                                <div class="col-md-2">
                                    <span id="search-info" class="badge badge-info"></span>
                                </div>
                            </div>

                            <!-- Tombol aksi -->
                            <div class="d-flex">
                                <div class="m-1">
                                    <button type="button" id="btn-reload" class="btn btn-info">
                                        <i class="fas fa-sync-alt"></i> Reload Data
                                    </button>
                                </div>
                                <div class="m-1">
                                    <button type="button" class="btn btn-success" id="btn-tambah-mutasi">
                                        <i class="fas fa-plus-circle"></i> Tambah Mutasi
                                    </button>
                                </div>
                            </div>

                            <!-- Tabel data -->
                            <table id="tabel_mutasi_perikanan"
                                class="table table-hover table-bordered table-striped display text-align-left">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="select-all">
                                                <label for="select-all" class="custom-control-label"></label>
                                            </div>
                                        </th>
                                        <th>Nama Pegawai</th>
                                        <th>NIP/NRP</th>
                                        <th>Jabatan</th>
                                        <th>Pengadilan Asal</th>
                                        <th>Pengadilan Hasil TPM</th>
                                        <th>Periode</th>
                                        <th>Tanggal TPM</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data akan diisi via AJAX -->
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                        <!-- Footer card -->
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary" id="show-selected">
                                <i class="fas fa-list"></i> Tampilkan Data Terpilih
                            </button>
                            <span id="selected-count" class="ml-2">0 rows selected</span>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<?php $this->load->view('./partials/control-sidebar'); ?>

<!-- Footer -->
<?php $this->load->view('./partials/main-footer'); ?>
</div>
<!-- ./wrapper -->

<!-- Script yang dibutuhkan -->
<?php $this->load->view('./partials/scripts'); ?>

<!-- Modal Tambah Mutasi -->
<div class="modal fade" id="modalTambahMutasi" tabindex="-1" aria-labelledby="modalTambahMutasiLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form id="formTambahMutasi">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="modalTambahMutasiLabel">
                        <i class="fas fa-plus-circle mr-2"></i>Tambah Mutasi Perikanan
                    </h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Tutup">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p style="font-style: italic;">*Tambahkan Data Mutasi Hakim Ad Hoc Perikanan</p>
                    <br><br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-user mr-1"></i>Nama Pegawai *</label>
                            <select name="id_pegawai" class="form-control select2-pegawai" required>
                                <option value="">Pilih Pegawai</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-building mr-1"></i>Pengadilan Asal *</label>
                            <select name="id_pengadilan_asal" id="tambah_id_pengadilan_asal"
                                class="form-control select2-pengadilan" required>
                                <option value="">Pilih Pengadilan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-building mr-1"></i>Pengadilan Hasil TPM *</label>
                            <select name="id_pengadilan_hasil_tpm" class="form-control select2-pengadilan" required>
                                <option value="">Pilih Pengadilan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-calendar-alt mr-1"></i>Periode *</label>
                            <input type="text" name="periode" class="form-control" placeholder="Contoh: 2023-2024"
                                required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-calendar-day mr-1"></i>Tanggal TPM *</label>
                            <input type="text" name="tanggal_tpm" class="form-control datepicker" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save mr-1"></i>Simpan
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <i class="fas fa-times mr-1"></i>Batal
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit Mutasi -->
<div class="modal fade" id="modalEditMutasi" tabindex="-1" aria-labelledby="modalEditMutasiLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form id="formEditMutasi">
                <div class="modal-header bg-warning text-dark">
                    <h5 class="modal-title" id="modalEditMutasiLabel">
                        <i class="fas fa-edit mr-2"></i>Edit Mutasi Perikanan
                    </h5>
                    <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Tutup">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p style="font-style: italic;">*Perubahan Data Mutasi Hakim Ad Hoc Perikanan</p>
                    <br><br>
                    <input type="hidden" name="id" id="edit_id_mutasi">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-user mr-1"></i>Nama Pegawai *</label>
                            <select name="id_pegawai" id="edit_id_pegawai" class="form-control select2-pegawai"
                                required>
                                <option value="">Pilih Pegawai</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-building mr-1"></i>Pengadilan Asal *</label>
                            <select name="id_pengadilan_asal" id="edit_id_pengadilan_asal"
                                class="form-control select2-pengadilan" required>
                                <option value="">Pilih Pengadilan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-building mr-1"></i>Pengadilan Hasil TPM *</label>
                            <select name="id_pengadilan_hasil_tpm" id="edit_id_pengadilan_hasil_tpm"
                                class="form-control select2-pengadilan" required>
                                <option value="">Pilih Pengadilan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-calendar-alt mr-1"></i>Periode *</label>
                            <input type="text" name="periode" id="edit_periode" class="form-control"
                                placeholder="Contoh: 2023-2024" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-calendar-day mr-1"></i>Tanggal TPM *</label>
                            <input type="text" name="tanggal_tpm" id="edit_tanggal_tpm" class="form-control datepicker"
                                required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning">
                        <i class="fas fa-save mr-1"></i>Update
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <i class="fas fa-times mr-1"></i>Batal
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Detail Mutasi -->
<div class="modal fade" id="modalDetailMutasi" tabindex="-1" aria-labelledby="modalDetailMutasiLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="modalDetailMutasiLabel">
                    <i class="fas fa-eye mr-2"></i>Detail Mutasi Perikanan
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Tutup">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h6 class="card-title mb-0"><i class="fas fa-user mr-2"></i>Informasi Pegawai</h6>
                            </div>
                            <div class="card-body">
                                <table class="table table-borderless table-lg">
                                    <tr>
                                        <td class="font-weight-bold" width="40%">Nama Pegawai</td>
                                        <td id="detail_nama_pegawai">-</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Pengadilan Asal</td>
                                        <td id="detail_pengadilan_asal">-</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Pengadilan Hasil TPM</td>
                                        <td id="detail_pengadilan_hasil_tpm">-</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-success text-white">
                                <h6 class="card-title mb-0"><i class="fas fa-info-circle mr-2"></i>Informasi Mutasi</h6>
                            </div>
                            <div class="card-body">
                                <table class="table table-borderless table-sm">
                                    <tr>
                                        <td class="font-weight-bold" width="40%">Periode</td>
                                        <td id="detail_periode">-</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Tanggal TPM</td>
                                        <td id="detail_tanggal_tpm">-</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    <i class="fas fa-times mr-1"></i>Tutup
                </button>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('./partials/bottom'); ?>

<style>
    .form-group:hover {
        background-color: #f8f9fa;
        transition: all 0.3s ease;
        border-radius: 5px;
    }

    .text-wrap-cell {
        white-space: normal !important;
        word-wrap: break-word !important;
        max-height: 50px;
        overflow-y: auto;
    }

    .modal-dialog-scrollable .modal-body {
        max-height: 70vh;
        overflow-y: auto;
    }
</style>

<script>
    // Fungsi untuk menampilkan SweetAlert
    function showAlert(icon, title, text, confirmButtonText = 'OK') {
        return Swal.fire({
            icon: icon,
            title: title,
            text: text,
            confirmButtonText: confirmButtonText,
            confirmButtonColor: '#3085d6'
        });
    }

    // Fungsi untuk konfirmasi
    function showConfirm(title, text, confirmButtonText = 'Ya', cancelButtonText = 'Tidak') {
        return Swal.fire({
            title: title,
            text: text,
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: confirmButtonText,
            cancelButtonText: cancelButtonText
        });
    }

    // Inisialisasi Select2
    function initSelect2() {
        $('.select2-pegawai, .select2-pengadilan, .select2-search').select2({
            theme: 'bootstrap4',
            width: '100%',
            placeholder: 'Pilih opsi'
        });
    }

    // Inisialisasi Select2 untuk semua select di halaman utama
    function initSelect2Global() {
        $('#search-column').select2({
            theme: 'bootstrap4',
            width: '100%',
            placeholder: 'Pilih Kolom'
        });
    }

    // Inisialisasi Select2 untuk select di modal tambah
    function initSelect2Tambah() {
        $('#modalTambahMutasi .select2-pegawai').select2({
            theme: 'bootstrap4',
            width: '100%',
            dropdownParent: $('#modalTambahMutasi')
        });
        $('#modalTambahMutasi .select2-pengadilan').select2({
            theme: 'bootstrap4',
            width: '100%',
            dropdownParent: $('#modalTambahMutasi')
        });
    }

    // Inisialisasi Select2 untuk select di modal edit
    function initSelect2Edit() {
        $('#modalEditMutasi .select2-pegawai').select2({
            theme: 'bootstrap4',
            width: '100%',
            dropdownParent: $('#modalEditMutasi')
        });
        $('#modalEditMutasi .select2-pengadilan').select2({
            theme: 'bootstrap4',
            width: '100%',
            dropdownParent: $('#modalEditMutasi')
        });
    }

    // Inisialisasi Datepicker
    function initDatepicker() {
        try {
            $('.datepicker').daterangepicker({
                singleDatePicker: true,
                showDropdowns: true,
                autoUpdateInput: false,
                drops: 'up',
                locale: {
                    format: 'YYYY-MM-DD',
                    daysOfWeek: ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'],
                    monthNames: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                    firstDay: 1,
                    cancelLabel: 'Batal',
                    applyLabel: 'Pilih'
                }
            });

            $('.datepicker').on('apply.daterangepicker', function (ev, picker) {
                $(this).val(picker.startDate.format('YYYY-MM-DD'));
            });

            $('.datepicker').on('cancel.daterangepicker', function (ev, picker) {
                $(this).val('');
            });

            console.log('Datepicker berhasil diinisialisasi');
        } catch (error) {
            console.warn('Datepicker tidak tersedia, menggunakan input date biasa:', error);
            $('.datepicker').each(function () {
                if (!$(this).attr('type')) {
                    $(this).attr('type', 'date');
                }
            });
        }
    }

    // Load data pegawai dan pengadilan untuk dropdown
    function loadDropdownData() {
        // Load pegawai
        $.ajax({
            url: "<?php echo site_url('admin/adhoc/perikanan/get_hakim_list'); ?>",
            type: "GET",
            dataType: "json",
            success: function (response) {
                var pegawaiSelect = $('.select2-pegawai');
                pegawaiSelect.empty().append('<option value="">Pilih Pegawai</option>');
                if (response && response.length > 0) {
                    response.forEach(function (pegawai) {
                        pegawaiSelect.append('<option value="' + pegawai.id + '">' + pegawai.nama + '</option>');
                    });
                }
            },
            error: function (xhr, status, error) {
                console.error('Error loading hakim list:', error);
            }
        });

        // Load pengadilan
        $.ajax({
            url: "<?php echo site_url('admin/adhoc/perikanan/get_pengadilan_list'); ?>",
            type: "GET",
            dataType: "json",
            success: function (response) {
                var pengadilanSelect = $('.select2-pengadilan');
                pengadilanSelect.empty().append('<option value="">Pilih Pengadilan</option>');
                if (response && response.length > 0) {
                    response.forEach(function (pengadilan) {
                        pengadilanSelect.append('<option value="' + pengadilan.id + '">' + pengadilan.nama_pengadilan + '</option>');
                    });
                }
            },
            error: function (xhr, status, error) {
                console.error('Error loading pengadilan list:', error);
            }
        });
    }

    // Format tanggal
    function formatTanggal(tanggal) {
        if (!tanggal || tanggal === "0000:00:00" || tanggal === "0000-00-00") return '-';
        const date = new Date(tanggal);
        return date.toLocaleDateString('id-ID');
    }

    $(document).ready(function () {
        console.log('Document ready, menginisialisasi komponen mutasi...');

        // Inisialisasi komponen
        initSelect2();
        initSelect2Global();
        initDatepicker();
        loadDropdownData();

        // Inisialisasi DataTables
        var table = $('#tabel_mutasi_perikanan').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/2.3.4/i18n/id.json'
            },
            processing: true,
            serverSide: false,
            responsive: true,
            fixedHeader: true,
            fixedColumns: {
                leftColumns: 1
            },
            scrollY: '400px',
            scrollX: true,
            ajax: {
                url: "<?php echo site_url('admin/adhoc/data-mutasi/get_mutasi'); ?>",
                type: "GET",
                dataSrc: "",
                error: function (xhr, error, thrown) {
                    console.error('Error loading data:', error);
                    showAlert('error', 'Error', 'Gagal memuat data dari server');
                }
            },
            columnDefs: [
                { orderable: false, targets: [0, 1, 7] } // Kolom No, Checkbox, dan Aksi tidak bisa diurutkan
            ],
            ordering: {
                indicators: false,
                handler: false
            },
            layout: {
                topStart: {
                    buttons: [
                        'copy',
                        {
                            extend: 'excel',
                            text: '<i class="fas fa-file-excel mr-1"></i>Export Excel',
                            exportOptions: {
                                format: {
                                    body: function (data, row, column, node) {
                                        // Jangan export kolom checkbox dan aksi
                                        if (column === 1 || column === 7) {
                                            return '';
                                        }
                                        return data;
                                    }
                                }
                            }
                        },
                        {
                            extend: 'pdf',
                            text: '<i class="fas fa-file-pdf mr-1"></i>Export PDF',
                            exportOptions: {
                                columns: ':visible:not(:eq(1)):not(:eq(7))', // Exclude checkbox dan aksi columns
                                format: {
                                    body: function (data, row, column, node) {
                                        // Jangan Export HTML tags
                                        var div = document.createElement("div");
                                        div.innerHTML = data;
                                        data = div.textContent || div.innerText || "";

                                        // Jangan export kolom checkbox dan aksi
                                        if (column === 1 || column === 7) {
                                            return '';
                                        }
                                        return data;
                                    }
                                }
                            },
                            customize: function (doc) {
                                // Pastikan PDF menampilkan semua data
                                doc.content[1].table.widths = Array(doc.content[1].table.body[0].length).fill('*');
                                doc.pageSize = 'A4';
                                doc.pageOrientation = 'landscape';
                                doc.defaultStyle.fontSize = 8;
                                doc.styles.tableHeader.fontSize = 9;
                            }
                        },
                        'colvis'
                    ]
                },
                topEnd: ['search', 'pageLength']
            },
            columns: [
                {
                    data: null,
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    },
                    orderable: false,
                    className: 'text-center',
                    width: '50px'
                },
                {
                    data: null,
                    orderable: false,
                    searchable: false,
                    render: function (data, type, row, meta) {
                        return `<div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input row-checkbox" id="cb${row.id}">
                            <label class="custom-control-label" for="cb${row.id}"></label>
                        </div>`;
                    },
                    className: 'text-center',
                    width: '30px'
                },
                {
                    data: "nama_pegawai",
                    width: '150px'
                },
                {
                    data: "nip_nrp",
                    width: '150px'
                },
                {
                    data: "jabatan",
                    width: '150px'
                },
                {
                    data: "pengadilan_asal",
                    width: '150px',
                    render: function (data, type, row) {
                        return data || '-';
                    }
                },
                {
                    data: "pengadilan_hasil_tpm",
                    width: '150px'
                },
                {
                    data: "periode",
                    width: '100px'
                },
                {
                    data: "tanggal_tpm",
                    render: function (data) {
                        return formatTanggal(data);
                    },
                    width: '100px'
                },
                {
                    data: null,
                    orderable: false,
                    searchable: false,
                    render: function (data, type, row) {
                        return `
                            <button class="m-1 btn btn-sm btn-info btn-detail" data-id="${row.id}" title="Detail">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="m-1 btn btn-sm btn-warning btn-edit" data-id="${row.id}" title="Edit">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="m-1 btn btn-sm btn-danger btn-delete" data-id="${row.id}" title="Hapus">
                                <i class="fas fa-trash"></i>
                            </button>`;
                    },
                    className: 'text-center',
                    width: '150px'
                }
            ],
            order: [[0, 'asc']],
            pageLength: 10,
            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Semua"]],
            initComplete: function () {
                console.log('DataTables mutasi initialized successfully');
            }
        });

        // Event handler untuk perubahan select pegawai pada modal tambah
        $(document).on('change', '#formTambahMutasi select[name="id_pegawai"]', function () {
            var id_pegawai = $(this).val();
            if (id_pegawai) {
                $.ajax({
                    url: "<?php echo site_url('admin/adhoc/data-mutasi/get_hakim_by_id/'); ?>" + id_pegawai,
                    type: "GET",
                    dataType: "json",
                    success: function (response) {
                        if (response && !response.error) {
                            // Set nilai select pengadilan asal pada modal tambah
                            $('#formTambahMutasi select[id="tambah_id_pengadilan_asal"]').val(response.id_pengadilan).trigger('change');
                        } else {
                            console.error('Error:', response.error);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            } else {
                // Kosongkan select pengadilan asal jika pegawai tidak dipilih
                $('#formTambahMutasi select[id="tambah_id_pengadilan_asal"]').val('').trigger('change');
            }
        });

        // Fungsi untuk update jumlah baris terpilih
        function updateSelectedCount() {
            var selectedCount = $('.row-checkbox:checked').length;
            $('#selected-count').text(selectedCount + ' baris terpilih');
        }

        // Event handler untuk checkbox "Pilih Semua"
        $('#select-all').on('click', function () {
            var isChecked = $(this).prop('checked');
            $('.row-checkbox').prop('checked', isChecked);
            updateSelectedCount();
        });

        // Event handler untuk checkbox per baris
        $(document).on('change', '.row-checkbox', function () {
            var allChecked = $('.row-checkbox:checked').length === $('.row-checkbox').length;
            $('#select-all').prop('checked', allChecked);
            updateSelectedCount();
        });

        // Event handler untuk tombol tampilkan data terpilih
        $('#show-selected').on('click', function () {
            var selectedData = [];
            $('.row-checkbox:checked').each(function () {
                var row = $(this).closest('tr');
                var rowData = table.row(row).data();
                if (rowData) {
                    selectedData.push(rowData);
                }
            });

            if (selectedData.length === 0) {
                showAlert('warning', 'Tidak ada data', 'Silakan pilih baris data terlebih dahulu!');
            } else {
                showAlert('info', 'Data Terpilih',
                    selectedData.length + ' baris data dipilih. Lihat detail di konsol browser.');
                console.log("Data terpilih:", selectedData);
            }
        });

        // Event handler untuk tombol reload data
        $('#btn-reload').on('click', function () {
            var reloadBtn = $(this);
            var originalHtml = reloadBtn.html();

            reloadBtn.html('<i class="fas fa-spinner fa-spin"></i> Memuat...').prop('disabled', true);

            table.ajax.reload(function () {
                reloadBtn.html(originalHtml).prop('disabled', false);
                $('#search-info').text('');
                showAlert('success', 'Berhasil', 'Data berhasil dimuat ulang!');
            }, false);
        });

        // Event handler untuk pencarian spesifik kolom
        $('#btn-search-column').on('click', function () {
            var colIdx = $('#search-column').val();
            var keyword = $('#search-value').val().trim();

            if (keyword === '') {
                table.columns().search('').draw();
                $('#search-info').text('');
                return;
            }

            table.columns().search('');
            table.column(colIdx).search(keyword).draw();

            setTimeout(function () {
                var resultCount = table.rows({ filter: 'applied' }).count();
                $('#search-info').text('Ditemukan ' + resultCount + ' data');

                if (resultCount === 0 && keyword) {
                    showAlert('info', 'Pencarian', 'Tidak ada data yang sesuai dengan kata kunci "' + keyword + '"');
                }
            }, 500);
        });

        // Reset info pencarian saat input berubah
        $('#search-value').on('input', function () {
            if ($(this).val().trim() === '') {
                table.columns().search('').draw();
                $('#search-info').text('');
            }
        });

        // Event handler untuk tombol tambah mutasi
        $('#btn-tambah-mutasi').on('click', function () {
            $('#formTambahMutasi')[0].reset();
            $('.select2-pegawai, .select2-pengadilan').val('').trigger('change');
            $('.datepicker').val('');
            $('#modalTambahMutasi').modal('show');
        });

        // Submit form tambah mutasi
        $('#formTambahMutasi').on('submit', function (e) {
            e.preventDefault();
            var formData = $(this).serialize();

            $.ajax({
                url: "<?php echo site_url('admin/adhoc/data-mutasi/tambah_mutasi'); ?>",
                type: "POST",
                data: formData,
                dataType: "json",
                success: function (response) {
                    if (response.status === 'success') {
                        $('#modalTambahMutasi').modal('hide');
                        table.ajax.reload();
                        showAlert('success', 'Berhasil', response.message);
                    } else {
                        showAlert('error', 'Gagal', response.message);
                    }
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                    showAlert('error', 'Error', 'Terjadi kesalahan saat menyimpan data');
                }
            });
        });

        // Event handler untuk tombol detail
        $(document).on('click', '.btn-detail', function () {
            var id = $(this).data('id');
            $.ajax({
                url: "<?php echo site_url('admin/adhoc/data-mutasi/get_mutasi_by_id/'); ?>" + id,
                type: "GET",
                dataType: "json",
                success: function (response) {
                    if (response && !response.error) {
                        // Isi data ke modal detail
                        $('#detail_nama_pegawai').text(response.nama_pegawai || '-');
                        $('#detail_pengadilan_asal').text(response.pengadilan_asal || '-');
                        $('#detail_pengadilan_hasil_tpm').text(response.pengadilan_hasil_tpm || '-');
                        $('#detail_periode').text(response.periode || '-');
                        $('#detail_tanggal_tpm').text(formatTanggal(response.tanggal_tpm));

                        $('#modalDetailMutasi').modal('show');
                    } else {
                        showAlert('error', 'Error', response.error || 'Data tidak ditemukan');
                    }
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                    showAlert('error', 'Error', 'Terjadi kesalahan saat memuat detail data');
                }
            });
        });

        // Event handler untuk tombol edit
        $(document).on('click', '.btn-edit', function () {
            var id = $(this).data('id');

            $.ajax({
                url: "<?php echo site_url('admin/adhoc/data-mutasi/get_mutasi_by_id/'); ?>" + id,
                type: "GET",
                dataType: "json",
                success: function (response) {
                    if (response && !response.error) {
                        // Isi data ke modal edit
                        $('#edit_id_mutasi').val(response.id);
                        $('#edit_id_pegawai').val(response.id_pegawai).trigger('change');
                        $('#edit_id_pengadilan_asal').val(response.id_pengadilan_asal).trigger('change');
                        $('#edit_id_pengadilan_hasil_tpm').val(response.id_pengadilan_hasil_tpm).trigger('change');
                        $('#edit_periode').val(response.periode);
                        $('#edit_tanggal_tpm').val(response.tanggal_tpm);
                        $('#modalEditMutasi').modal('show');
                    } else {
                        showAlert('error', 'Error', response.error || 'Data tidak ditemukan');
                    }
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                    showAlert('error', 'Error', 'Terjadi kesalahan saat memuat data untuk edit');
                }
            });
        });

        // Submit form edit mutasi
        $('#formEditMutasi').on('submit', function (e) {
            e.preventDefault();

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: 'Data Mutasi akan diupdate. Lanjutkan?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Update!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    var formData = $(this).serialize();
                    $.ajax({
                        url: "<?php echo site_url('admin/adhoc/data-mutasi/update_mutasi'); ?>",
                        type: "POST",
                        data: formData,
                        dataType: "json",
                        success: function (response) {
                            if (response.status === 'success') {
                                $('#modalEditMutasi').modal('hide');
                                table.ajax.reload();
                                showAlert('success', 'Berhasil', response.message);
                            } else {
                                showAlert('error', 'Gagal', response.message);
                            }
                        },
                        error: function (xhr, status, error) {
                            console.error('Error:', error);
                            showAlert('error', 'Error', 'Terjadi kesalahan saat mengupdate data');
                        }
                    });
                }
            });
        });

        // Event handler untuk tombol hapus
        $(document).on('click', '.btn-delete', function () {
            var id = $(this).data('id');

            showConfirm('Konfirmasi Hapus', 'Apakah Anda yakin ingin menghapus data mutasi ini?', 'Ya, Hapus!', 'Batal')
                .then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "<?php echo site_url('admin/adhoc/data-mutasi/hapus_mutasi/'); ?>" + id,
                            type: "DELETE",
                            dataType: "json",
                            success: function (response) {
                                if (response.status === 'success') {
                                    table.ajax.reload();
                                    showAlert('success', 'Berhasil', response.message);
                                } else {
                                    showAlert('error', 'Gagal', response.message);
                                }
                            },
                            error: function (xhr, status, error) {
                                console.error('Error:', error);
                                showAlert('error', 'Error', 'Terjadi kesalahan saat menghapus data');
                            }
                        });
                    }
                });
        });

        // Inisialisasi select2 setiap kali modal tambah dibuka
        $('#modalTambahMutasi').on('shown.bs.modal', function () {
            initSelect2Tambah();
        });

        // Inisialisasi select2 setiap kali modal edit dibuka
        $('#modalEditMutasi').on('shown.bs.modal', function () {
            initSelect2Edit();
        });

        console.log('Semua event handler berhasil diinisialisasi');
    });
</script>