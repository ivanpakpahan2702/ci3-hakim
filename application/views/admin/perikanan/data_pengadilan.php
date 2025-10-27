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

                        <!-- Tabel Data Pengadilan Perikanan -->
                        <div class="card-body">
                            <!-- Form pencarian spesifik kolom -->
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <select id="search-column" class="form-control select2-search">
                                        <option value="2">Nama Pengadilan</option>
                                        <option value="3">Kelas</option>
                                        <option value="4">Wilayah</option>
                                        <option value="5">Jumlah Hakim AdHoc Saat Ini</option>
                                        <option value="6">Perkara 2022</option>
                                        <option value="7">Perkara 2023</option>
                                        <option value="8">Perkara 2024</option>
                                        <option value="9">Rerata</option>
                                        <option value="10">Jumlah Hakim AdHoc Ideal</option>
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
                                    <button type="button" class="btn btn-success" id="btn-tambah-pengadilan">
                                        <i class="fas fa-plus-circle"></i> Tambah Pengadilan
                                    </button>
                                </div>
                            </div>

                            <!-- Tabel data -->
                            <table id="tabel_pengadilan_perikanan"
                                class="table table-hover table-bordered table-striped display nowrap text-align-left">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="select-all">
                                                <label for="select-all" class="custom-control-label"></label>
                                            </div>
                                        </th>
                                        <th>Nama Pengadilan</th>
                                        <th>Kelas</th>
                                        <th>Wilayah</th>
                                        <th>Jumlah Hakim AdHoc Saat Ini</th>
                                        <th>Perkara 2022</th>
                                        <th>Perkara 2023</th>
                                        <th>Perkara 2024</th>
                                        <th>Rerata</th>
                                        <th>Jumlah Hakim AdHoc Ideal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data akan diisi via AJAX -->
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="5" class="text-right">Total Keseluruhan</th>
                                        <th id="footer_jumlah_adhoc_sekarang"></th>
                                        <th id="footer_perkara_2022"></th>
                                        <th id="footer_perkara_2023"></th>
                                        <th id="footer_perkara_2024"></th>
                                        <th id="footer_rerata"></th>
                                        <th colspan="2"></th>
                                    </tr>
                                </tfoot>
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

<!-- Modal Tambah Pengadilan -->
<div class="modal fade" id="modalTambahPengadilan" tabindex="-1" aria-labelledby="modalTambahPengadilanLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form id="formTambahPengadilan" enctype="multipart/form-data">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="modalTambahPengadilanLabel">
                        <i class="fas fa-plus-circle mr-2"></i>Tambah Pengadilan Perikanan
                    </h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Tutup">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-building mr-1"></i>Nama Pengadilan *</label>
                            <input type="text" name="nama_pengadilan" class="form-control" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-graduation-cap mr-1"></i>Kelas *</label>
                            <select name="kelas" class="form-control select2-kelas" required>
                                <option value="">Pilih Kelas</option>
                                <option value="A">A</option>
                                <option value="I A Khusus">I A Khusus</option>
                                <option value="I A">I A</option>
                                <option value="I B">I B</option>
                                <option value="II">II</option>
                                <option value="B">B</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-map-marker-alt mr-1"></i>Wilayah *</label>
                            <input type="text" name="wilayah" class="form-control" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-user-graduate mr-1"></i>Jumlah Hakim AdHoc Saat Ini</label>
                            <input type="number" name="jumlah_adhoc_sekarang" class="form-control" min="0">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-balance-scale mr-1"></i>Perkara 2022</label>
                            <input type="number" name="perkara_2022" class="form-control perkara-input" min="0">
                        </div>
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-balance-scale mr-1"></i>Perkara 2023</label>
                            <input type="number" name="perkara_2023" class="form-control perkara-input" min="0">
                        </div>
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-balance-scale mr-1"></i>Perkara 2024</label>
                            <input type="number" name="perkara_2024" class="form-control perkara-input" min="0">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-calculator mr-1"></i>Rerata</label>
                            <input type="number" name="rerata" id="rerata" class="form-control" min="0" step="0.01"
                                readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-user-check mr-1"></i>Jumlah Hakim AdHoc Ideal</label>
                            <input type="number" name="jumlah_adhoc_ideal" id="jumlah_adhoc_ideal" class="form-control"
                                min="0" readonly>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label><i class="fas fa-images mr-1"></i>Carousel Gambar (bisa pilih banyak)</label>
                            <input type="file" name="carousel[]" id="inputCarousel" class="form-control"
                                accept="image/*" multiple>
                            <div id="previewCarousel" class="mt-2 d-flex flex-wrap"></div>
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

<!-- Modal Edit Pengadilan -->
<div class="modal fade" id="modalEditPengadilan" tabindex="-1" aria-labelledby="modalEditPengadilanLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <form id="formEditPengadilan" enctype="multipart/form-data">
                <div class="modal-header bg-warning text-dark">
                    <h5 class="modal-title" id="modalEditPengadilanLabel">
                        <i class="fas fa-edit mr-2"></i>Edit Pengadilan Perikanan
                    </h5>
                    <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Tutup">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="edit_id_pengadilan">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-building mr-1"></i>Nama Pengadilan *</label>
                            <input type="text" name="nama_pengadilan" id="edit_nama_pengadilan" class="form-control"
                                required>
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-graduation-cap mr-1"></i>Kelas *</label>
                            <select name="kelas" id="edit_kelas" class="form-control select2-kelas" required>
                                <option value="">Pilih Kelas</option>
                                <option value="A">A</option>
                                <option value="I A Khusus">I A Khusus</option>
                                <option value="I A">I A</option>
                                <option value="I B">I B</option>
                                <option value="II">II</option>
                                <option value="B">B</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-map-marker-alt mr-1"></i>Wilayah *</label>
                            <input type="text" name="wilayah" id="edit_wilayah" class="form-control" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-user-graduate mr-1"></i>Jumlah Hakim AdHoc Saat Ini</label>
                            <input type="number" name="jumlah_adhoc_sekarang" id="edit_jumlah_adhoc_sekarang"
                                class="form-control" min="0">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-balance-scale mr-1"></i>Perkara 2022</label>
                            <input type="number" name="perkara_2022" id="edit_perkara_2022"
                                class="form-control edit-perkara-input" min="0">
                        </div>
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-balance-scale mr-1"></i>Perkara 2023</label>
                            <input type="number" name="perkara_2023" id="edit_perkara_2023"
                                class="form-control edit-perkara-input" min="0">
                        </div>
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-balance-scale mr-1"></i>Perkara 2024</label>
                            <input type="number" name="perkara_2024" id="edit_perkara_2024"
                                class="form-control edit-perkara-input" min="0">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-calculator mr-1"></i>Rerata</label>
                            <input type="number" name="rerata" id="edit_rerata" class="form-control" min="0" step="0.01"
                                readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-user-check mr-1"></i>Jumlah Hakim AdHoc Ideal</label>
                            <input type="number" name="jumlah_adhoc_ideal" id="edit_jumlah_adhoc_ideal"
                                class="form-control" min="0" readonly>
                        </div>
                    </div>
                    <!-- Field Upload Carousel untuk Edit -->
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label><i class="fas fa-images mr-1"></i>Carousel Gambar (bisa pilih banyak)</label>
                            <input type="file" name="carousel[]" id="edit_inputCarousel" class="form-control"
                                accept="image/*" multiple>
                            <div id="edit_previewCarousel" class="mt-2 d-flex flex-wrap"></div>

                            <!-- Tampilkan gambar yang sudah ada -->
                            <div class="mt-3">
                                <label>Gambar Saat Ini:</label>
                                <div id="edit_currentCarousel" class="d-flex flex-wrap mt-2"></div>
                                <small class="form-text text-muted">
                                    <i class="fas fa-info-circle mr-1"></i>Gambar baru akan ditambahkan ke gambar yang
                                    sudah ada.
                                    Centang gambar yang ingin dihapus.
                                </small>
                            </div>
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

<!-- Modal Detail Pengadilan dengan Carousel -->
<div class="modal fade" id="modalDetailPengadilan" tabindex="-1" aria-labelledby="modalDetailPengadilanLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="modalDetailPengadilanLabel">
                    <i class="fas fa-eye mr-2"></i>Detail Pengadilan Perikanan
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Tutup">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Carousel -->
                <div id="detailCarousel" class="carousel slide mb-4" data-ride="carousel">
                    <div class="carousel-inner" id="carousel-inner">
                        <!-- Gambar carousel akan diisi via JavaScript -->
                    </div>

                    <!-- Indicators -->
                    <ol class="carousel-indicators" id="carousel-indicators">
                        <!-- Indicators akan diisi via JavaScript -->
                    </ol>

                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#detailCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#detailCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <!-- Informasi Detail -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h6 class="card-title mb-0"><i class="fas fa-building mr-2"></i>Informasi Umum</h6>
                            </div>
                            <div class="card-body">
                                <table class="table table-borderless table-sm">
                                    <tr>
                                        <td class="font-weight-bold" width="40%">Nama Pengadilan</td>
                                        <td id="detail_nama_pengadilan">-</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Kelas</td>
                                        <td id="detail_kelas">-</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Wilayah</td>
                                        <td id="detail_wilayah">-</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-success text-white">
                                <h6 class="card-title mb-0"><i class="fas fa-balance-scale mr-2"></i>Data Perkara</h6>
                            </div>
                            <div class="card-body">
                                <table class="table table-borderless table-sm">
                                    <tr>
                                        <td class="font-weight-bold" width="60%">Jumlah Hakim Saat Ini</td>
                                        <td id="detail_jumlah_adhoc_sekarang" class="text-right">-</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Jumlah Hakim Ideal</td>
                                        <td id="detail_jumlah_adhoc_ideal" class="text-right">-</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Rerata Perkara</td>
                                        <td id="detail_rerata" class="text-right">-</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Daftar Hakim AdHoc -->
                <div class="card mt-4">
                    <div class="card-header bg-purple text-white">
                        <h6 class="card-title mb-0"><i class="fas fa-users mr-2"></i>Daftar Hakim AdHoc</h6>
                    </div>
                    <div class="card-body">
                        <div id="hakim-list" class="row">
                            <!-- Daftar hakim akan diisi via JavaScript -->
                        </div>
                    </div>
                </div>

                <!-- Statistik Perkara per Tahun -->
                <div class="card mt-4">
                    <div class="card-header bg-warning text-dark">
                        <h6 class="card-title mb-0"><i class="fas fa-chart-bar mr-2"></i>Statistik Perkara</h6>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-md-4">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h5 class="text-primary" id="detail_perkara_2022">0</h5>
                                        <small class="text-muted">Perkara 2022</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h5 class="text-success" id="detail_perkara_2023">0</h5>
                                        <small class="text-muted">Perkara 2023</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h5 class="text-info" id="detail_perkara_2024">0</h5>
                                        <small class="text-muted">Perkara 2024</small>
                                    </div>
                                </div>
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
    .modal-dialog-scrollable .modal-body {
        padding: 15px;
    }

    .form-group label i {
        width: 16px;
        text-align: center;
    }

    .form-group:hover {
        background-color: #f8f9fa;
        transition: all 1s ease;
        border-radius: 5px;
        border-color: #16a085;
    }

    /* Styling untuk DataTables */
    .dataTables_wrapper .dataTables_length,
    .dataTables_wrapper .dataTables_filter,
    .dataTables_wrapper .dataTables_info,
    .dataTables_wrapper .dataTables_processing,
    .dataTables_wrapper .dataTables_paginate {
        margin: 10px 0;
    }

    /* Styling untuk tombol aksi */
    .btn-group-sm>.btn,
    .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.75rem;
    }

    /* Styling untuk carousel detail */
    .carousel-item img {
        height: 400px;
        object-fit: cover;
        border-radius: 8px;
        width: 100%;
    }

    .carousel-indicators li {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background-color: #ccc;
        margin: 0 4px;
    }

    .carousel-indicators .active {
        background-color: #007bff;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        width: 40px;
        height: 40px;
        background-size: 20px 20px;
    }

    .carousel-caption {
        background-color: rgba(0, 0, 0, 0.6);
        border-radius: 4px;
        padding: 5px 10px;
    }

    /* Styling untuk card informasi */
    .card {
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        border: 1px solid #e3e6f0;
        margin-bottom: 0;
    }

    .card-header {
        border-bottom: 1px solid #e3e6f0;
        padding: 12px 15px;
    }

    .table-borderless td {
        padding: 8px 0;
        border: none !important;
    }

    .table-borderless tr:not(:last-child) {
        border-bottom: 1px solid #f8f9fa;
    }

    /* Styling untuk statistik */
    .bg-light {
        background-color: #f8f9fa !important;
    }

    .text-muted {
        font-size: 0.85rem;
    }

    /* Styling untuk preview gambar */
    .image-preview {
        position: relative;
        margin: 5px;
    }

    .image-preview img {
        border: 2px solid #dee2e6;
        border-radius: 4px;
    }

    .image-preview .badge {
        position: absolute;
        top: 5px;
        right: 5px;
    }

    .current-image {
        position: relative;
        margin: 5px;
        border: 2px solid #28a745;
        border-radius: 4px;
        padding: 5px;
        background: #f8f9fa;
    }

    .current-image img {
        border-radius: 3px;
    }

    .delete-checkbox {
        position: absolute;
        top: 5px;
        left: 5px;
        transform: scale(1.2);
    }

    .image-name {
        font-size: 0.75rem;
        margin-top: 5px;
        word-break: break-all;
        max-width: 80px;
    }

    /* Styling untuk daftar hakim */
    .bg-purple {
        background-color: #6f42c1 !important;
    }

    .hakim-card {
        transition: transform 0.2s ease-in-out;
        border: 1px solid #e3e6f0;
        border-radius: 8px;
        overflow: hidden;
    }

    .hakim-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .hakim-photo {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #e9ecef;
    }

    .hakim-info {
        padding: 15px;
    }

    .hakim-name {
        font-weight: 600;
        color: #2d3748;
        margin-bottom: 5px;
    }

    .hakim-position {
        color: #6c757d;
        font-size: 0.875rem;
        margin-bottom: 8px;
    }

    .hakim-contact {
        font-size: 0.8rem;
        color: #718096;
    }

    .hakim-contact i {
        width: 16px;
        margin-right: 5px;
    }

    .empty-hakim {
        text-align: center;
        padding: 40px 20px;
        color: #6c757d;
    }

    .empty-hakim i {
        font-size: 3rem;
        margin-bottom: 15px;
        color: #dee2e6;
    }

    .hakim-badge {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 0.7rem;
    }

    .hakim-detail-item {
        margin-bottom: 3px;
        font-size: 0.75rem;
    }
</style>

<script>
    // Fungsi untuk menghitung rerata
    function hitungRerata(perkara2022, perkara2023, perkara2024) {
        const total = parseFloat(perkara2022 || 0) + parseFloat(perkara2023 || 0) + parseFloat(perkara2024 || 0);
        return total / 3;
    }

    // Fungsi untuk menghitung jumlah hakim ideal
    function hitungHakimIdeal(rerata) {
        if (rerata < 31) return 3;
        if (rerata < 61) return 4;
        if (rerata < 81) return 6;
        if (rerata < 101) return 10;
        if (rerata < 151) return 13;
        if (rerata < 201) return 16;
        return 17;
    }

    // Fungsi untuk update nilai rerata dan hakim ideal di modal tambah
    function updatePerhitunganTambah() {
        const perkara2022 = parseFloat($('input[name="perkara_2022"]').val()) || 0;
        const perkara2023 = parseFloat($('input[name="perkara_2023"]').val()) || 0;
        const perkara2024 = parseFloat($('input[name="perkara_2024"]').val()) || 0;

        const rerata = hitungRerata(perkara2022, perkara2023, perkara2024);
        const hakimIdeal = hitungHakimIdeal(rerata);

        $('#rerata').val(rerata.toFixed(2));
        $('#jumlah_adhoc_ideal').val(hakimIdeal);
    }

    // Fungsi untuk update nilai rerata dan hakim ideal di modal edit
    function updatePerhitunganEdit() {
        const perkara2022 = parseFloat($('#edit_perkara_2022').val()) || 0;
        const perkara2023 = parseFloat($('#edit_perkara_2023').val()) || 0;
        const perkara2024 = parseFloat($('#edit_perkara_2024').val()) || 0;

        const rerata = hitungRerata(perkara2022, perkara2023, perkara2024);
        const hakimIdeal = hitungHakimIdeal(rerata);

        $('#edit_rerata').val(rerata.toFixed(2));
        $('#edit_jumlah_adhoc_ideal').val(hakimIdeal);
    }

    // Fungsi untuk menampilkan SweetAlert
    function showAlert(icon, title, text, confirmButtonText = 'OK') {
        return Swal.fire({
            icon: icon,
            title: title,
            text: text,
            confirmButtonText: confirmButtonText,
            confirmButtonColor: '#3085d6',
            customClass:
            {
                popup: 'animated bounceIn'
            }
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
            cancelButtonText: cancelButtonText,
            customClass:
            {
                popup: 'animated bounceIn'
            }
        });
    }

    // Inisialisasi Select2 pada halaman utama
    function initSelect2Main() {
        try {
            $('#search-column').select2({
                theme: 'bootstrap4',
                width: '100%',
                placeholder: 'Pilih kolom pencarian'
            });
            console.log('Select2 main berhasil diinisialisasi');
        } catch (error) {
            console.warn('Select2 main tidak tersedia:', error);
        }
    }

    // PERBAIKAN: Inisialisasi Select2 untuk kelas dengan cara yang benar
    function initSelect2Kelas() {
        try {
            // Inisialisasi untuk modal tambah
            $('#modalTambahPengadilan .select2-kelas').select2({
                theme: 'bootstrap4',
                width: '100%',
                placeholder: 'Pilih Kelas',
                allowClear: true,
                dropdownParent: $('#modalTambahPengadilan')
            });

            // Inisialisasi untuk modal edit
            $('#modalEditPengadilan .select2-kelas').select2({
                theme: 'bootstrap4',
                width: '100%',
                placeholder: 'Pilih Kelas',
                allowClear: true,
                dropdownParent: $('#modalEditPengadilan')
            });

            console.log('Select2 kelas berhasil diinisialisasi untuk modal');
        } catch (error) {
            console.warn('Select2 kelas tidak tersedia:', error);
        }
    }

    // TAMBAHAN: Inisialisasi Select2 pada modal saat dibuka
    function initSelect2OnModalShow() {
        // Inisialisasi ulang Select2 ketika modal tambah ditampilkan
        $('#modalTambahPengadilan').on('shown.bs.modal', function () {
            $('#modalTambahPengadilan .select2-kelas').select2({
                theme: 'bootstrap4',
                width: '100%',
                placeholder: 'Pilih Kelas',
                allowClear: true,
                dropdownParent: $('#modalTambahPengadilan')
            });
        });

        // Inisialisasi ulang Select2 ketika modal edit ditampilkan
        $('#modalEditPengadilan').on('shown.bs.modal', function () {
            $('#modalEditPengadilan .select2-kelas').select2({
                theme: 'bootstrap4',
                width: '100%',
                placeholder: 'Pilih Kelas',
                allowClear: true,
                dropdownParent: $('#modalEditPengadilan')
            });
        });
    }

    // Fungsi untuk setup carousel dengan gambar dari database
    function setupCarousel(images) {
        var carouselInner = $('#carousel-inner');
        var carouselIndicators = $('#carousel-indicators');

        // Kosongkan carousel sebelumnya
        carouselInner.empty();
        carouselIndicators.empty();

        if (!images || images.length === 0) {
            // Jika tidak ada gambar, tampilkan placeholder
            carouselInner.append(`
                <div class="carousel-item active">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b9/Mahkamah_Agung_Building.jpeg" 
                         class="d-block w-100" 
                         alt="No Image Available">
                </div>
            `);
            carouselIndicators.append('<li data-target="#detailCarousel" data-slide-to="0" class="active"></li>');
            return;
        }

        // Tambahkan gambar ke carousel
        images.forEach(function (image, index) {
            var isActive = index === 0 ? 'active' : '';
            var imageUrl = image.url;
            var imageName = image.filename || 'Gambar ' + (index + 1);

            // Item carousel
            carouselInner.append(`
                <div class="carousel-item ${isActive}">
                    <img src="${imageUrl}" 
                         class="d-block w-100" 
                         alt="${imageName}"
                         onerror="this.src='https://upload.wikimedia.org/wikipedia/commons/b/b9/Mahkamah_Agung_Building.jpeg'">
                </div>
            `);

            // Indicator
            carouselIndicators.append(`
                <li data-target="#detailCarousel" data-slide-to="${index}" class="${isActive}"></li>
            `);
        });

        // Re-initialize carousel
        $('#detailCarousel').carousel();
    }

    // Fungsi untuk memproses gambar carousel dari data database
    function processCarouselImages(carouselData) {
        if (!carouselData || carouselData.trim() === '') {
            return [];
        }

        var imageNames = carouselData.split(',');
        var processedImages = [];

        imageNames.forEach(function (imageName) {
            imageName = imageName.trim();
            if (imageName) {
                processedImages.push({
                    filename: imageName,
                    url: '<?php echo base_url("uploads/carousel_pengadilan/"); ?>' + imageName,
                    caption: imageName
                });
            }
        });

        return processedImages;
    }

    // Fungsi untuk menampilkan gambar current carousel di modal edit
    function showCurrentCarousel(images) {
        $('#edit_currentCarousel').empty();

        if (images && images.length > 0) {
            images.forEach(function (image, index) {
                $('#edit_currentCarousel').append(`
                    <div class="current-image">
                        <input type="checkbox" class="delete-checkbox" name="delete_images[]" value="${image.filename}" 
                               id="delete_${index}" style="display: none;">
                        <label for="delete_${index}" class="d-block" style="cursor: pointer;">
                            <img src="${image.url}" 
                                 style="max-width:80px;max-height:80px;"
                                 onerror="this.src='https://upload.wikimedia.org/wikipedia/commons/b/b9/Mahkamah_Agung_Building.jpeg'"
                                 alt="${image.filename}">
                            <div class="image-name text-center">${image.filename}</div>
                        </label>
                        <div class="text-center mt-1">
                            <small class="text-danger">
                                <i class="fas fa-trash"></i> Klik untuk hapus
                            </small>
                        </div>
                    </div>
                `);
            });
        } else {
            $('#edit_currentCarousel').html(`
                <div class="text-muted text-center w-100">
                    <i class="fas fa-image fa-2x mb-2 d-block"></i>
                    Tidak ada gambar
                </div>
            `);
        }

        // Event handler untuk toggle checkbox delete
        $('.delete-checkbox').on('change', function () {
            var currentImage = $(this).closest('.current-image');
            if ($(this).is(':checked')) {
                currentImage.css('border-color', '#dc3545');
                currentImage.css('background-color', '#ffe6e6');
            } else {
                currentImage.css('border-color', '#28a745');
                currentImage.css('background-color', '#f8f9fa');
            }
        });
    }

    // Fungsi untuk mengambil data hakim dari database
    function getHakimData(pengadilanId) {
        return new Promise((resolve, reject) => {
            $.ajax({
                url: "<?php echo site_url('admin/adhoc/perikanan/get_hakim_by_pengadilan/'); ?>" + pengadilanId,
                type: "GET",
                dataType: "json",
                success: function (response) {
                    if (response.success && response.data) {
                        // Process the hakim data
                        const processedData = response.data.map(hakim => ({
                            id: hakim.id,
                            nama: hakim.nama || 'Nama tidak tersedia',
                            nip_nrp: hakim.nip_nrp || '-',
                            nik: hakim.nik || '-',
                            tempat_lahir: hakim.tempat_lahir || '-',
                            tanggal_lahir: hakim.tanggal_lahir || '-',
                            jenis_kelamin: hakim.jenis_kelamin || '-',
                            pendidikan_terakhir: hakim.pendidikan_terakhir || '-',
                            jabatan: hakim.jabatan || 'Hakim AdHoc',
                            tmt_gol: hakim.tmt_gol || '-',
                            golongan: hakim.golongan || '-',
                            tmt_mutasi: hakim.tmt_mutasi || '-',
                            foto: hakim.foto_url || 'https://placehold.co/800?text=Tidak+Bergambar&font=roboto',
                            sumber_foto: hakim.sumber_foto || '-'
                        }));
                        resolve(processedData);
                    } else {
                        resolve([]); // Return empty array if no data
                    }
                },
                error: function (xhr, status, error) {
                    console.error('Error loading hakim data:', error);
                    resolve([]); // Return empty array on error
                }
            });
        });
    }

    // Fungsi untuk menampilkan daftar hakim
    function showHakimList(hakimData) {
        const hakimList = $('#hakim-list');
        hakimList.empty();

        if (!hakimData || hakimData.length === 0) {
            hakimList.html(`
                <div class="col-12">
                    <div class="empty-hakim">
                        <i class="fas fa-user-slash"></i>
                        <h5 class="text-muted">Belum Ada Data Hakim</h5>
                        <p class="text-muted">Tidak ada hakim AdHoc yang terdaftar untuk pengadilan ini.</p>
                    </div>
                </div>
            `);
            return;
        }

        hakimData.forEach((hakim, index) => {
            // Format tanggal lahir jika ada
            const tanggalLahir = hakim.tanggal_lahir && hakim.tanggal_lahir !== '-' ?
                new Date(hakim.tanggal_lahir).toLocaleDateString('id-ID') : '-';

            // Format TMT Golongan jika ada
            const tmtGol = hakim.tmt_gol && hakim.tmt_gol !== '-' ?
                new Date(hakim.tmt_gol).toLocaleDateString('id-ID') : '-';

            // Format jenis kelamin
            const jenisKelamin = hakim.jenis_kelamin === 'L' ? 'Laki-laki' :
                hakim.jenis_kelamin === 'P' ? 'Perempuan' : '-';


            const hakimCard = `
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="hakim-card bg-white">
                        <div class="hakim-info position-relative">
                            <span class="badge badge-primary hakim-badge">${index + 1}</span>
                            <div class="d-flex align-items-center">
                                <div class="mr-3">
                                    <img src="${hakim.foto}" 
                                         class="hakim-photo" 
                                         alt="${hakim.nama}"
                                         onerror="this.src='https://placehold.co/800?text=Tidak+Bergambar&font=roboto'">
                                </div>
                                <div class="flex-grow-1">
                                    <div class="hakim-name">${hakim.nama}</div>
                                    <div class="hakim-position">
                                        <i class="fas fa-briefcase text-primary"></i>
                                        ${hakim.jabatan}
                                    </div>
                                    <div class="hakim-contact">
                                        <div class="hakim-detail-item">
                                            <i class="fas fa-id-card text-info"></i>
                                            NIP: ${hakim.nip_nrp}
                                        </div>
                                        <div class="hakim-detail-item">
                                            <i class="fas fa-graduation-cap text-success"></i>
                                            ${hakim.pendidikan_terakhir}
                                        </div>
                                        <div class="hakim-detail-item">
                                            <i class="fas fa-calendar text-warning"></i>
                                            TMT: ${tmtGol}
                                        </div>
                                        <div class="hakim-detail-item">
                                            <i class="fas fa-venus-mars text-purple"></i>
                                            ${hakim.golongan} - ${jenisKelamin}
                                        </div>
                                        ${hakim.tempat_lahir && hakim.tempat_lahir !== '-' ? `
                                        <div class="hakim-detail-item">
                                            <i class="fas fa-map-marker-alt text-danger"></i>
                                            ${hakim.tempat_lahir}, ${tanggalLahir}
                                        </div>` : ''}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            hakimList.append(hakimCard);
        });
    }

    $(document).ready(function () {
        console.log('Document ready, menginisialisasi komponen...');

        // Inisialisasi komponen utama
        initSelect2Main();
        initSelect2Kelas();
        initSelect2OnModalShow(); // TAMBAHAN: Inisialisasi modal events

        // Event listener untuk input perkara di modal tambah
        $('.perkara-input').on('input', updatePerhitunganTambah);

        // Event listener untuk input perkara di modal edit
        $('.edit-perkara-input').on('input', updatePerhitunganEdit);

        // Inisialisasi DataTables
        var table = $('#tabel_pengadilan_perikanan').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/2.3.4/i18n/id.json'
            },
            ordering: {
                indicators: false
            },
            columnControl: ['order'],
            ordering: {
                indicators: false,
                handler: false
            },
            fixedHeader: true,
            fixedColumns: {
                leftColumns: 1,
                rightColumns: 1
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
                                        if (column === 1 || column === 11) {
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
                                columns: ':visible:not(:eq(1)):not(:eq(19))', // Exclude checkbox dan aksi columns
                                format: {
                                    body: function (data, row, column, node) {
                                        // Jangan export kolom checkbox dan aksi
                                        if (column === 1 || column === 11) {
                                            return '';
                                        }
                                        return data;
                                    }
                                }
                            },
                            customize: function (doc) {
                                // Pastikan PDF menampilkan semua data
                                doc.content[1].table.widths = Array(doc.content[1].table.body[0].length).fill('*');
                                doc.pageSize = 'A1';
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
            processing: true,
            serverSide: false,
            responsive: true,
            scrollX: true,
            scrollY: "500px",
            ajax: {
                url: "<?php echo site_url('admin/adhoc/perikanan/get_data_pengadilan'); ?>",
                type: "GET",
                dataSrc: "",
                error: function (xhr, error, thrown) {
                    console.error('Error loading data:', error);
                    showAlert('error', 'Error', 'Gagal memuat data dari server');
                }
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
                    data: "nama_pengadilan",
                    width: '200px'
                },
                {
                    data: "kelas",
                    className: 'text-center',
                    width: '100px'
                },
                {
                    data: "wilayah",
                    width: '150px'
                },
                {
                    data: "jumlah_adhoc_sekarang",
                    className: 'text-center',
                    width: '120px'
                },
                {
                    data: "perkara_2022",
                    className: 'text-center',
                    width: '100px'
                },
                {
                    data: "perkara_2023",
                    className: 'text-center',
                    width: '100px'
                },
                {
                    data: "perkara_2024",
                    className: 'text-center',
                    width: '100px'
                },
                {
                    data: "rerata",
                    className: 'text-center',
                    width: '100px'
                },
                {
                    data: "jumlah_adhoc_ideal",
                    className: 'text-center',
                    width: '120px'
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
                            <button class="mt-1 mr-1 mb-1 btn btn-sm btn-warning btn-edit" data-id="${row.id}" title="Edit">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="mt-1 mr-1 mb-1 btn btn-sm btn-danger btn-delete" data-id="${row.id}" title="Hapus">
                                <i class="fas fa-trash"></i>
                            </button>`;
                    },
                    className: 'text-center',
                    width: '120px'
                }
            ],
            order: [[0, 'asc']],
            pageLength: 10,
            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Semua"]],
            "footerCallback": function (row, data, start, end, display) {
                // Helper untuk sum
                function intVal(i) {
                    return typeof i === 'string' ?
                        i.replace(/[\.,]/g, '') * 1 :
                        typeof i === 'number' ? i : 0;
                }

                // Total Jumlah Hakim AdHoc Saat Ini
                var totalAdhoc = data.reduce(function (a, b) {
                    return a + intVal(b.jumlah_adhoc_sekarang);
                }, 0);

                // Total Perkara 2022
                var total2022 = data.reduce(function (a, b) {
                    return a + intVal(b.perkara_2022);
                }, 0);

                // Total Perkara 2023
                var total2023 = data.reduce(function (a, b) {
                    return a + intVal(b.perkara_2023);
                }, 0);

                // Total Perkara 2024
                var total2024 = data.reduce(function (a, b) {
                    return a + intVal(b.perkara_2024);
                }, 0);

                // Rerata total
                var totalRerata = data.reduce(function (a, b) {
                    return a + intVal(b.rerata);
                }, 0);
                var avgRerata = data.length ? (totalRerata / data.length).toFixed(2) : 0;

                // Set ke footer
                $('#footer_jumlah_adhoc_sekarang').html(totalAdhoc);
                $('#footer_perkara_2022').html(total2022);
                $('#footer_perkara_2023').html(total2023);
                $('#footer_perkara_2024').html(total2024);
                $('#footer_rerata').html(totalRerata);
            },
            initComplete: function () {
                console.log('DataTables initialized successfully');
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

        // Event handler untuk tombol tambah pengadilan
        $('#btn-tambah-pengadilan').on('click', function () {
            $('#formTambahPengadilan')[0].reset();
            $('#previewCarousel').empty();
            // Reset perhitungan
            $('#rerata').val('');
            $('#jumlah_adhoc_ideal').val('');
            // Reset select2 - PERBAIKAN: Reset dengan cara yang benar
            $('#modalTambahPengadilan .select2-kelas').val('').trigger('change');
            $('#modalTambahPengadilan').modal('show');
        });

        // Submit form tambah pengadilan - PERBAIKAN
        $('#formTambahPengadilan').on('submit', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            var submitBtn = $(this).find('button[type="submit"]');
            var originalText = submitBtn.html();

            submitBtn.html('<i class="fas fa-spinner fa-spin"></i> Menyimpan...').prop('disabled', true);

            $.ajax({
                url: "<?php echo site_url('admin/adhoc/perikanan/tambah_pengadilan'); ?>",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function (res) {
                    submitBtn.html(originalText).prop('disabled', false);

                    // Debug response
                    console.log('Tambah response:', res);

                    if (res.success) {
                        $('#modalTambahPengadilan').modal('hide');
                        table.ajax.reload(null, false);
                        showAlert('success', 'Berhasil!', res.message || 'Data pengadilan berhasil ditambahkan!');
                    } else {
                        var errorMsg = res.error || 'Gagal menambah data pengadilan';
                        console.error('Tambah failed:', errorMsg);
                        showAlert('error', 'Gagal!', errorMsg);
                    }
                },
                error: function (xhr, status, error) {
                    submitBtn.html(originalText).prop('disabled', false);
                    console.error('AJAX Error:', xhr.responseText);

                    var errorMsg = 'Gagal menambah data pengadilan! ';
                    try {
                        var jsonResponse = JSON.parse(xhr.responseText);
                        errorMsg += jsonResponse.error || jsonResponse.message || error;
                    } catch (e) {
                        errorMsg += error;
                    }

                    showAlert('error', 'Kesalahan!', errorMsg);
                }
            });
        });

        // Event handler untuk tombol detail
        $(document).on('click', '.btn-detail', function () {
            var id = $(this).data('id');
            var detailBtn = $(this);
            var originalHtml = detailBtn.html();

            detailBtn.html('<i class="fas fa-spinner fa-spin"></i>').prop('disabled', true);

            // Ambil data pengadilan by id
            $.ajax({
                url: "<?php echo site_url('admin/adhoc/perikanan/get_pengadilan_by_id/'); ?>" + id,
                type: "GET",
                dataType: "json",
                success: async function (data) {
                    detailBtn.html(originalHtml).prop('disabled', false);
                    if (data && !data.error) {
                        // Isi data detail
                        $('#detail_nama_pengadilan').text(data.nama_pengadilan || '-');
                        $('#detail_kelas').text(data.kelas || '-');
                        $('#detail_wilayah').text(data.wilayah || '-');
                        $('#detail_jumlah_adhoc_sekarang').text(data.jumlah_adhoc_sekarang || '0');
                        $('#detail_jumlah_adhoc_ideal').text(data.jumlah_adhoc_ideal || '0');
                        $('#detail_rerata').text(data.rerata ? parseFloat(data.rerata).toFixed(2) : '0');
                        $('#detail_perkara_2022').text(data.perkara_2022 || '0');
                        $('#detail_perkara_2023').text(data.perkara_2023 || '0');
                        $('#detail_perkara_2024').text(data.perkara_2024 || '0');

                        // Setup carousel dengan gambar dari database
                        var carouselImages = processCarouselImages(data.carousel);
                        setupCarousel(carouselImages);

                        // Tampilkan daftar hakim dari database
                        try {
                            const hakimData = await getHakimData(id);
                            showHakimList(hakimData);
                        } catch (error) {
                            console.error('Error loading hakim data:', error);
                            showHakimList([]); // Tampilkan kosong jika error
                        }

                        $('#modalDetailPengadilan').modal('show');
                    } else {
                        showAlert('error', 'Gagal!', data.error || 'Data pengadilan tidak ditemukan!');
                    }
                },
                error: function (xhr, status, error) {
                    detailBtn.html(originalHtml).prop('disabled', false);
                    console.error('Error loading detail data:', error);
                    showAlert('error', 'Gagal!', 'Gagal memuat data detail pengadilan!');
                }
            });
        });

        // Event handler untuk tombol edit pengadilan
        $(document).on('click', '.btn-edit', function () {
            var id = $(this).data('id');
            var editBtn = $(this);
            var originalHtml = editBtn.html();

            editBtn.html('<i class="fas fa-spinner fa-spin"></i>').prop('disabled', true);

            // Ambil data pengadilan by id
            $.ajax({
                url: "<?php echo site_url('admin/adhoc/perikanan/get_pengadilan_by_id/'); ?>" + id,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    editBtn.html(originalHtml).prop('disabled', false);
                    if (data && !data.error) {
                        // Isi field modal edit
                        $('#edit_id_pengadilan').val(data.id);
                        $('#edit_nama_pengadilan').val(data.nama_pengadilan);
                        $('#edit_kelas').val(data.kelas).trigger('change');
                        $('#edit_wilayah').val(data.wilayah);
                        $('#edit_jumlah_adhoc_sekarang').val(data.jumlah_adhoc_sekarang);
                        $('#edit_perkara_2022').val(data.perkara_2022);
                        $('#edit_perkara_2023').val(data.perkara_2023);
                        $('#edit_perkara_2024').val(data.perkara_2024);
                        $('#edit_rerata').val(data.rerata);
                        $('#edit_jumlah_adhoc_ideal').val(data.jumlah_adhoc_ideal);

                        // Reset form upload
                        $('#edit_inputCarousel').val('');
                        $('#edit_previewCarousel').empty();

                        // Tampilkan gambar carousel yang sudah ada
                        var currentImages = processCarouselImages(data.carousel);
                        showCurrentCarousel(currentImages);

                        $('#modalEditPengadilan').modal('show');
                    } else {
                        showAlert('error', 'Gagal!', data.error || 'Data pengadilan tidak ditemukan!');
                    }
                },
                error: function (xhr, status, error) {
                    editBtn.html(originalHtml).prop('disabled', false);
                    console.error('Error loading data:', error);
                    showAlert('error', 'Gagal!', 'Gagal memuat data pengadilan!');
                }
            });
        });

        // Submit form edit pengadilan - PERBAIKAN
        $('#formEditPengadilan').on('submit', function (e) {
            e.preventDefault();

            showConfirm('Konfirmasi Update', 'Apakah Anda yakin ingin mengupdate data pengadilan ini?', 'Ya, Update!', 'Batal')
                .then((result) => {
                    if (result.isConfirmed) {
                        var formData = new FormData(this);
                        var submitBtn = $(this).find('button[type="submit"]');
                        var originalText = submitBtn.html();
                        submitBtn.html('<i class="fas fa-spinner fa-spin"></i> Menyimpan...').prop('disabled', true);

                        $.ajax({
                            url: "<?php echo site_url('admin/adhoc/perikanan/update_pengadilan'); ?>",
                            type: "POST",
                            data: formData,
                            processData: false,
                            contentType: false,
                            dataType: 'json',
                            success: function (res) {
                                submitBtn.html(originalText).prop('disabled', false);

                                // Debug response
                                console.log('Update response:', res);

                                if (res.success) {
                                    $('#modalEditPengadilan').modal('hide');
                                    table.ajax.reload(null, false);
                                    showAlert('success', 'Berhasil!', res.message || 'Data pengadilan berhasil diupdate!');
                                } else {
                                    var errorMsg = res.error || 'Gagal update data pengadilan';
                                    console.error('Update failed:', errorMsg);
                                    showAlert('error', 'Gagal!', errorMsg);
                                }
                            },
                            error: function (xhr, status, error) {
                                submitBtn.html(originalText).prop('disabled', false);
                                console.error('AJAX Error:', xhr.responseText);

                                // Coba parse error message
                                var errorMsg = 'Gagal update data pengadilan! ';
                                try {
                                    var jsonResponse = JSON.parse(xhr.responseText);
                                    errorMsg += jsonResponse.error || jsonResponse.message || error;
                                } catch (e) {
                                    errorMsg += error;
                                }

                                showAlert('error', 'Kesalahan!', errorMsg);
                            }
                        });
                    }
                });
        });

        // Event handler untuk tombol hapus pengadilan
        $(document).on('click', '.btn-delete', function () {
            var id = $(this).data('id');
            showConfirm('Konfirmasi Hapus', 'Yakin ingin menghapus data pengadilan ini?', 'Ya, Hapus', 'Batal')
                .then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "<?php echo site_url('admin/adhoc/perikanan/hapus_pengadilan'); ?>",
                            type: "POST",
                            data: { id: id },
                            dataType: "json",
                            success: function (res) {
                                if (res.success) {
                                    table.ajax.reload(null, false);
                                    showAlert('success', 'Berhasil!', res.message || 'Data pengadilan berhasil dihapus!');
                                } else {
                                    showAlert('error', 'Gagal!', res.error || 'Gagal menghapus data pengadilan');
                                }
                            },
                            error: function (xhr, status, error) {
                                console.error('Delete error:', error);
                                showAlert('error', 'Kesalahan!', 'Gagal menghapus data pengadilan! Error: ' + error);
                            }
                        });
                    }
                });
        });

        // Preview carousel images di modal tambah
        $('#inputCarousel').on('change', function () {
            $('#previewCarousel').empty();
            var files = this.files;
            if (files && files.length > 0) {
                $.each(files, function (i, file) {
                    if (file.type.match('image.*')) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $('#previewCarousel').append(
                                `<div class="image-preview m-1">
                                    <img src="${e.target.result}" style="max-width:80px;max-height:80px;border:1px solid #ccc;border-radius:4px;">
                                    <span class="badge badge-primary">Baru</span>
                                </div>`
                            );
                        }
                        reader.readAsDataURL(file);
                    }
                });
            }
        });

        // Preview carousel images di modal edit
        $('#edit_inputCarousel').on('change', function () {
            $('#edit_previewCarousel').empty();
            var files = this.files;
            if (files && files.length > 0) {
                $.each(files, function (i, file) {
                    if (file.type.match('image.*')) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $('#edit_previewCarousel').append(
                                `<div class="image-preview m-1">
                                    <img src="${e.target.result}" style="max-width:80px;max-height:80px;border:1px solid #007bff;border-radius:4px;">
                                    <span class="badge badge-info">Baru</span>
                                </div>`
                            );
                        }
                        reader.readAsDataURL(file);
                    }
                });
            }
        });

        // Event handler untuk modal detail saat ditutup
        $('#modalDetailPengadilan').on('hidden.bs.modal', function () {
            // Reset carousel ke slide pertama
            $('#detailCarousel').carousel(0);
        });

        // Event handler untuk modal edit saat ditutup
        $('#modalEditPengadilan').on('hidden.bs.modal', function () {
            // Reset form upload
            $('#edit_inputCarousel').val('');
            $('#edit_previewCarousel').empty();
            $('#edit_currentCarousel').empty();
        });

        // Inisialisasi jumlah terpilih saat pertama kali load
        updateSelectedCount();

        console.log('Aplikasi pengadilan perikanan berhasil diinisialisasi');
    });
</script>