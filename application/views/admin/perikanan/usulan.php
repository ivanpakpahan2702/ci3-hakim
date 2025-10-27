<?php
/**
 * View untuk manajemen usulan perikanan
 * Berisi form dan tabel untuk mengelola usulan mutasi hakim ad hoc perikanan
 */

// Load header
$this->load->view('./partials/head');
?>

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
                                <!-- Tombol collapse card -->
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <!-- Dropdown tools -->
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
                                <!-- Tombol close card -->
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <!-- Tabel Data Usulan -->
                        <div class="card-body">
                            <!-- Form pencarian spesifik kolom -->
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <!-- Dropdown pilih kolom pencarian -->
                                    <select id="search-column" class="form-control select2-search">
                                        <option value="2">Nama Pegawai</option>
                                        <option value="3">Asal Pengadilan</option>
                                        <option value="4">Pengadilan Usulan</option>
                                        <option value="5">Nomor Surat</option>
                                        <option value="6">Tanggal Usulan</option>
                                        <option value="7">Alasan Usulan</option>
                                        <option value="8">Status</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <!-- Input kata kunci pencarian -->
                                    <input type="text" id="search-value" class="form-control"
                                        placeholder="Kata kunci...">
                                </div>
                                <div class="col-md-2">
                                    <!-- Tombol cari -->
                                    <button type="button" id="btn-search-column"
                                        class="btn btn-primary w-100">Cari</button>
                                </div>
                                <div class="col-md-2">
                                    <!-- Info hasil pencarian -->
                                    <span id="search-info" class="badge badge-info"></span>
                                </div>
                            </div>

                            <!-- Tombol aksi -->
                            <div class="d-flex">
                                <div class="m-1">
                                    <!-- Tombol reload data -->
                                    <button type="button" id="btn-reload" class="btn btn-info">
                                        <i class="fas fa-sync-alt"></i> Reload Data
                                    </button>
                                </div>
                                <div class="m-1">
                                    <!-- Tombol tambah usulan -->
                                    <button type="button" class="btn btn-success" id="btn-tambah-usulan">
                                        <i class="fas fa-plus-circle"></i> Tambah Usulan
                                    </button>
                                </div>
                            </div>

                            <!-- Tabel data usulan -->
                            <table id="tabel_usulan_perikanan"
                                class="table table-hover table-bordered table-striped display text-align-left">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>
                                            <!-- Checkbox pilih semua -->
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="select-all">
                                                <label for="select-all" class="custom-control-label"></label>
                                            </div>
                                        </th>
                                        <th>Nama Pegawai</th>
                                        <th>Asal Pengadilan</th>
                                        <th>Pengadilan Usulan</th>
                                        <th>Nomor Surat</th>
                                        <th>Tanggal Usulan</th>
                                        <th>Tanggal Surat</th>
                                        <th>Alasan Usulan</th>
                                        <th>Status</th>
                                        <th>Tanggal Diproses</th>
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
                            <!-- Tombol aksi untuk data terpilih -->
                            <button type="button" class="btn btn-primary" id="show-selected">
                                <i class="fas fa-list"></i> Tampilkan Data Terpilih
                            </button>
                            <button type="button" class="btn btn-warning" id="print-drp">
                                <i class="fas fa-print"></i> Cetak DRP
                            </button>
                            <!-- Counter data terpilih -->
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

<!-- Modal Tambah Usulan -->
<div class="modal fade" id="modalTambahUsulan" tabindex="-1" aria-labelledby="modalTambahUsulanLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Form tambah usulan -->
            <form id="formTambahUsulan" enctype="multipart/form-data">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="modalTambahUsulanLabel">
                        <i class="fas fa-plus-circle mr-2"></i>Tambah Usulan Perikanan
                    </h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Tutup">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p style="font-style: italic;">*Tambahkan Usulan Mutasi Hakim Ad Hoc Perikanan</p>
                    <br><br>
                    <!-- Form fields untuk tambah usulan -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-user mr-1"></i>Nama Pegawai *</label>
                            <select name="id_pegawai" class="form-control select2-pegawai" required>
                                <option value="">Pilih Pegawai</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-building mr-1"></i>Pengadilan Usulan *</label>
                            <select name="id_pengadilan_usulan" class="form-control select2-pengadilan" required>
                                <option value="">Pilih Pengadilan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-calendar-alt mr-1"></i>Tanggal Usulan *</label>
                            <input type="text" name="tanggal_usulan" class="form-control datepicker" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-file-alt mr-1"></i>Nomor Surat</label>
                            <input type="text" name="nomor_surat" class="form-control" placeholder="Nomor surat usulan">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-calendar-check mr-1"></i>Tanggal Surat</label>
                            <input type="text" name="tanggal_surat" class="form-control datepicker">
                        </div>
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-info-circle mr-1"></i>Status</label>
                            <select name="_status_" class="form-control select2-status">
                                <option value="pending">Pending</option>
                                <option value="diterima">Diterima</option>
                                <option value="ditolak">Ditolak</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label><i class="fas fa-comment mr-1"></i>Keterangan Usulan</label>
                            <textarea name="keterangan_usulan" class="form-control" rows="3"
                                placeholder="Keterangan usulan..."></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-comment-dots mr-1"></i>Keterangan Status</label>
                            <input type="text" name="keterangan_status" class="form-control"
                                placeholder="Keterangan status...">
                        </div>
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-calendar-day mr-1"></i>Tanggal Diproses</label>
                            <input type="text" name="tanggal_diproses" class="form-control datepicker">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label><i class="fas fa-file-upload mr-1"></i>Berkas</label>
                            <input type="file" name="berkas" id="inputBerkas" class="form-control">
                            <small class="form-text text-muted">Format file: PDF, DOC, DOCX (Maks. 5MB)</small>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- Tombol simpan dan batal -->
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

<!-- Modal Edit Usulan -->
<div class="modal fade" id="modalEditUsulan" tabindex="-1" aria-labelledby="modalEditUsulanLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <!-- Form edit usulan -->
            <form id="formEditUsulan" enctype="multipart/form-data">
                <div class="modal-header bg-warning text-dark">
                    <h5 class="modal-title" id="modalEditUsulanLabel">
                        <i class="fas fa-edit mr-2"></i>Edit Usulan Perikanan
                    </h5>
                    <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Tutup">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p style="font-style: italic;">*Perubahan Usulan Mutasi Hakim Ad Hoc Perikanan</p>
                    <br><br>
                    <!-- Hidden fields untuk edit -->
                    <input type="hidden" name="id" id="edit_id_usulan">
                    <input type="hidden" name="current_berkas" id="edit_current_berkas">

                    <!-- Form fields untuk edit usulan -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-user mr-1"></i>Nama Pegawai *</label>
                            <select name="id_pegawai" id="edit_id_pegawai" class="form-control select2-pegawai"
                                required>
                                <option value="">Pilih Pegawai</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-building mr-1"></i>Pengadilan Usulan *</label>
                            <select name="id_pengadilan_usulan" id="edit_id_pengadilan_usulan"
                                class="form-control select2-pengadilan" required>
                                <option value="">Pilih Pengadilan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-calendar-alt mr-1"></i>Tanggal Usulan *</label>
                            <input type="text" name="tanggal_usulan" id="edit_tanggal_usulan"
                                class="form-control datepicker" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-file-alt mr-1"></i>Nomor Surat</label>
                            <input type="text" name="nomor_surat" id="edit_nomor_surat" class="form-control"
                                placeholder="Nomor surat usulan">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-calendar-check mr-1"></i>Tanggal Surat</label>
                            <input type="text" name="tanggal_surat" id="edit_tanggal_surat"
                                class="form-control datepicker">
                        </div>
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-info-circle mr-1"></i>Status</label>
                            <select name="_status_" id="edit_status" class="form-control select2-status">
                                <option value="pending">Pending</option>
                                <option value="diterima">Diterima</option>
                                <option value="ditolak">Ditolak</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label><i class="fas fa-comment mr-1"></i>Keterangan Usulan</label>
                            <textarea name="keterangan_usulan" id="edit_keterangan_usulan" class="form-control" rows="3"
                                placeholder="Keterangan usulan..."></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-comment-dots mr-1"></i>Keterangan Status</label>
                            <input type="text" name="keterangan_status" id="edit_keterangan_status" class="form-control"
                                placeholder="Keterangan status...">
                        </div>
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-calendar-day mr-1"></i>Tanggal Diproses</label>
                            <input type="text" name="tanggal_diproses" id="edit_tanggal_diproses"
                                class="form-control datepicker">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label><i class="fas fa-file-upload mr-1"></i>Berkas</label>
                            <input type="file" name="berkas" id="edit_inputBerkas" class="form-control">
                            <small class="form-text text-muted">Format file: PDF, DOC, DOCX (Maks. 5MB)</small>
                            <!-- Area untuk menampilkan berkas saat ini -->
                            <div id="current-berkas" class="mt-2"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- Tombol update dan batal -->
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

<!-- Modal Detail Usulan -->
<div class="modal fade" id="modalDetailUsulan" tabindex="-1" aria-labelledby="modalDetailUsulanLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="modalDetailUsulanLabel">
                    <i class="fas fa-eye mr-2"></i>Detail Usulan Perikanan
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Tutup">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Layout detail usulan dalam card -->
                <div class="row">
                    <!-- Card informasi pegawai -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h6 class="card-title mb-0"><i class="fas fa-user mr-2"></i>Informasi Pegawai</h6>
                            </div>
                            <div class="card-body">
                                <table class="table table-borderless table-lg">
                                    <tr>
                                        <!-- Foto pegawai -->
                                        <td colspan="2" width="30%" class="text-center align-middle">
                                            <img id="detail_foto_pegawai" alt="Foto Pegawai"
                                                class="img-fluid img-thumbnail" style="max-height: 150px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold" width="40%">Nama Pegawai</td>
                                        <td id="detail_nama_pegawai">-</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Asal Pengadilan</td>
                                        <td id="detail_asal_pengadilan">-</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Pengadilan Usulan</td>
                                        <td id="detail_pengadilan_usulan">-</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Card informasi surat -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header bg-success text-white">
                                <h6 class="card-title mb-0"><i class="fas fa-file-alt mr-2"></i>Informasi Surat</h6>
                            </div>
                            <div class="card-body">
                                <table class="table table-borderless table-sm">
                                    <tr>
                                        <td class="font-weight-bold" width="40%">Nomor Surat</td>
                                        <td id="detail_nomor_surat">-</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Tanggal Surat</td>
                                        <td id="detail_tanggal_surat">-</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Tanggal Usulan</td>
                                        <td id="detail_tanggal_usulan">-</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card status dan keterangan -->
                <div class="card mt-4">
                    <div class="card-header bg-warning text-dark">
                        <h6 class="card-title mb-0"><i class="fas fa-info-circle mr-2"></i>Status & Keterangan</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="font-weight-bold">Status</label>
                                    <div id="detail_status" class="badge badge-secondary">-</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="font-weight-bold">Tanggal Diproses</label>
                                    <div id="detail_tanggal_diproses">-</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="font-weight-bold">Keterangan Status</label>
                                    <div id="detail_keterangan_status">-</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Keterangan Usulan</label>
                            <div id="detail_keterangan_usulan" class="border p-2 rounded bg-light">-</div>
                        </div>
                    </div>
                </div>

                <!-- Card berkas -->
                <div class="card mt-4">
                    <div class="card-header bg-purple text-white">
                        <h6 class="card-title mb-0"><i class="fas fa-file-upload mr-2"></i>Berkas</h6>
                    </div>
                    <div class="card-body">
                        <div id="detail-berkas" class="text-center">
                            <i class="fas fa-file fa-3x text-muted mb-2"></i>
                            <p class="text-muted">Tidak ada berkas</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <!-- Tombol tutup -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    <i class="fas fa-times mr-1"></i>Tutup
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal DRP Fullscreen -->
<div class="modal fade" id="modalDRP" tabindex="-1" aria-labelledby="modalDRPLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="modalDRPLabel">
                    <i class="fas fa-print mr-2"></i>Cetak DRP - Data Terpilih
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Tutup">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <!-- Toolbar untuk export dan print -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-success" id="exportExcelDRP">
                                <i class="fas fa-file-excel mr-2"></i>Export ke Excel
                            </button>
                            <button type="button" class="btn btn-danger" id="printDRP">
                                <i class="fas fa-print mr-2"></i>Print
                            </button>
                        </div>
                        <div class="col-md-6 text-right">
                            <!-- Counter data terpilih -->
                            <span id="drpCount" class="badge badge-info">0 data terpilih</span>
                        </div>
                    </div>

                    <!-- Pencarian dan Pagination Controls -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="input-group">
                                <input type="text" id="drpSearchInput" class="form-control" placeholder="Cari data...">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="drpSearchClear">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span id="drpPageInfo" class="badge badge-light">Halaman 1 dari 1</span>
                                    <span id="drpTotalInfo" class="badge badge-secondary ml-2">Total: 0 data</span>
                                </div>
                                <div>
                                    <button id="drpPrevPage" class="btn btn-sm btn-outline-primary" disabled>
                                        <i class="fas fa-chevron-left"></i> Sebelumnya
                                    </button>
                                    <button id="drpNextPage" class="btn btn-sm btn-outline-primary ml-1" disabled>
                                        Selanjutnya <i class="fas fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tabel DRP -->
                    <div class="table-responsive">
                        <table id="tabelDRP" class="table table-bordered table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th colspan="3">Biodata</th>
                                    <th rowspan="2">Jabatan</th>
                                    <th rowspan="2">Pengadilan</th>
                                    <th colspan="2">Riwayat Pekerjaan</th>
                                    <th rowspan="2">Keterangan</th>
                                </tr>
                                <tr>
                                    <th>Label</th>
                                    <th></th>
                                    <th>Nilai</th>
                                    <th>Tanggal</th>
                                    <th>Jabatan</th>
                                </tr>
                            </thead>
                            <tbody id="drpTableBody">
                                <!-- Data akan diisi via JavaScript -->
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination Info Footer -->
                    <div class="row mt-3">
                        <div class="col-md-12 text-center">
                            <div id="drpPaginationInfo" class="text-muted">
                                Menampilkan 0 data
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Pilihan Export Excel -->
<div class="modal fade" id="modalExportPilihan" tabindex="-1" aria-labelledby="modalExportPilihanLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="modalExportPilihanLabel">
                    <i class="fas fa-file-excel mr-2"></i>Pilihan Export Excel
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Tutup">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="mb-3">
                    <i class="fas fa-file-excel fa-3x text-success mb-3"></i>
                    <h6>Pilih metode export gambar:</h6>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-primary btn-block mb-2" id="exportWithImages">
                        <i class="fas fa-images mr-2"></i>Export dengan Gambar
                    </button>
                    <small class="text-muted">Gambar akan dimasukkan langsung ke Excel</small>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-outline-primary btn-block mb-2" id="exportWithLinks">
                        <i class="fas fa-link mr-2"></i>Export dengan Hyperlink
                    </button>
                    <small class="text-muted">Gambar sebagai link "Foto Hakim"</small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('./partials/bottom'); ?>

<style>
    /* Style untuk modal pilihan export */
    #modalExportPilihan .modal-body .btn {
        padding: 12px;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    #modalExportPilihan .modal-body .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    #modalExportPilihan .modal-body small {
        font-size: 0.8rem;
    }

    /* Style untuk pagination DRP */
    #drpSearchInput {
        border-right: none;
    }

    #drpSearchInput:focus {
        box-shadow: none;
        border-color: #ced4da;
    }

    #drpSearchClear {
        border-left: none;
    }

    #drpSearchClear:hover {
        background-color: #f8f9fa;
    }

    /* Style untuk tabel DRP dengan pagination */
    #tabelDRP {
        font-size: 12px;
    }

    #tabelDRP th {
        background-color: #f8f9fa;
        font-weight: bold;
        text-align: center;
        vertical-align: middle;
    }

    #tabelDRP td {
        vertical-align: top;
    }

    /* Force fix untuk modal DRP */
    body.modal-open #modalDRP {
        padding-right: 0px !important;
    }

    #modalDRP.modal {
        padding-right: 0px !important;
    }

    #modalDRP .modal-dialog {
        margin: 0 !important;
        max-width: 100% !important;
        width: 100% !important;
    }

    #modalDRP .modal-content {
        border-radius: 0 !important;
        height: 100vh !important;
        border: none !important;
    }

    #modalDRP .modal-body {
        padding: 0 !important;
        overflow: auto;
    }

    /* Hapus scrollbar body saat modal terbuka */
    body.modal-open {
        overflow: hidden;
        padding-right: 0px !important;
    }

    /* Style untuk badge status */
    .badge-pending {
        background-color: #ffc107;
        color: #212529;
    }

    .badge-diterima {
        background-color: #28a745;
        color: white;
    }

    .badge-ditolak {
        background-color: #dc3545;
        color: white;
    }

    /* Hover effect untuk form group */
    .form-group:hover {
        background-color: #f8f9fa;
        transition: all 0.3s ease;
        border-radius: 5px;
    }

    /* Style untuk wrap text di cell tabel */
    .text-wrap-cell {
        white-space: normal !important;
        word-wrap: break-word !important;
        max-height: 50px;
        overflow-y: auto;
    }

    /* Style untuk modal scrollable */
    .modal-dialog-scrollable .modal-body {
        max-height: 70vh;
        overflow-y: auto;
    }

    /* Style untuk modal fullscreen */
    .modal-fullscreen {
        max-width: 100% !important;
        margin: 0 !important;
    }

    .modal-fullscreen .modal-content {
        height: 100vh;
        border-radius: 0;
    }

    .modal-fullscreen .modal-body {
        overflow-y: auto;
    }

    /* Style khusus untuk tabel DRP */
    #tabelDRP {
        font-size: 12px;
    }

    #tabelDRP th {
        background-color: #f8f9fa;
        font-weight: bold;
        text-align: center;
        vertical-align: middle;
    }

    #tabelDRP td {
        vertical-align: top;
    }

    /* Style untuk responsive table */
    .table-responsive {
        border: 1px solid #dee2e6;
    }

    /* Style untuk align middle */
    .align-middle {
        vertical-align: middle !important;
    }

    /* Style untuk foto */
    #tabelDRP img {
        max-height: 150px;
        max-width: 120px;
        object-fit: cover;
    }

    /* Style untuk print */
    @media print {
        .modal-fullscreen .modal-content {
            height: auto;
        }

        .modal-header,
        .modal-footer {
            display: none !important;
        }

        .table-responsive {
            overflow: visible !important;
        }

        #tabelDRP {
            font-size: 10px;
        }
    }
</style>

<script>
    // Deklarasikan variabel table di scope global
    let table;

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

    // Inisialisasi Select2 untuk elemen di luar modal
    function initSelect2() {
        $('.select2-search').select2({
            theme: 'bootstrap4',
            width: '100%',
            placeholder: 'Pilih Kolom Pencarian'
        });
    }

    // Inisialisasi Select2 untuk modal tambah
    function initSelect2Tambah() {
        $('#modalTambahUsulan .select2-pegawai').select2({
            theme: 'bootstrap4',
            width: '100%',
            dropdownParent: $('#modalTambahUsulan')
        });
        $('#modalTambahUsulan .select2-pengadilan').select2({
            theme: 'bootstrap4',
            width: '100%',
            dropdownParent: $('#modalTambahUsulan')
        });
        $('#modalTambahUsulan .select2-status').select2({
            theme: 'bootstrap4',
            width: '100%',
            dropdownParent: $('#modalTambahUsulan')
        });
    }

    // Inisialisasi Select2 untuk modal edit
    function initSelect2Edit() {
        $('#modalEditUsulan .select2-pegawai').select2({
            theme: 'bootstrap4',
            width: '100%',
            dropdownParent: $('#modalEditUsulan')
        });
        $('#modalEditUsulan .select2-pengadilan').select2({
            theme: 'bootstrap4',
            width: '100%',
            dropdownParent: $('#modalEditUsulan')
        });
        $('#modalEditUsulan .select2-status').select2({
            theme: 'bootstrap4',
            width: '100%',
            dropdownParent: $('#modalEditUsulan')
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

            // Event handler untuk apply datepicker
            $('.datepicker').on('apply.daterangepicker', function (ev, picker) {
                $(this).val(picker.startDate.format('YYYY-MM-DD'));
            });

            // Event handler untuk cancel datepicker
            $('.datepicker').on('cancel.daterangepicker', function (ev, picker) {
                $(this).val('');
            });

            console.log('Datepicker berhasil diinisialisasi');
        } catch (error) {
            console.warn('Datepicker tidak tersedia, menggunakan input date biasa:', error);
            // Fallback ke input date biasa
            $('.datepicker').each(function () {
                if (!$(this).attr('type')) {
                    $(this).attr('type', 'date');
                }
            });
        }
    }

    // Load data pegawai dan pengadilan untuk dropdown
    function loadDropdownData() {
        // Load data pegawai
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

        // Load data pengadilan
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

    // Format tanggal ke format Indonesia
    function formatTanggal(tanggal) {
        if (!tanggal || tanggal === "0000:00:00" || tanggal === "0000-00-00") return '-';
        const date = new Date(tanggal);
        return date.toLocaleDateString('id-ID');
    }

    // Format status dengan badge
    function formatStatus(status) {
        const badgeClass = {
            'pending': 'badge-pending',
            'diterima': 'badge-diterima',
            'ditolak': 'badge-ditolak'
        };
        const statusText = {
            'pending': 'Pending',
            'diterima': 'Diterima',
            'ditolak': 'Ditolak'
        };
        return '<span class="badge ' + (badgeClass[status] || 'badge-secondary') + '">' + (statusText[status] || status) + '</span>';
    }

    // Variabel global untuk pagination dan searching DRP
    let drpCurrentPage = 1;
    let drpRowsPerPage = 5;
    let drpAllData = [];
    let drpFilteredData = [];
    let drpSearchKeyword = '';

    // Fungsi untuk inisialisasi pagination dan searching DRP
    function initDRPPagination() {
        // Event handler untuk pencarian
        $('#drpSearchInput').on('input', function () {
            drpSearchKeyword = $(this).val().toLowerCase().trim();
            drpCurrentPage = 1;
            filterDRPData();
            renderDRPTable();
            updateDRPPaginationControls();
        });

        // Event handler untuk clear search
        $('#drpSearchClear').on('click', function () {
            $('#drpSearchInput').val('');
            drpSearchKeyword = '';
            drpCurrentPage = 1;
            filterDRPData();
            renderDRPTable();
            updateDRPPaginationControls();
        });

        // Event handler untuk previous page
        $('#drpPrevPage').on('click', function () {
            if (drpCurrentPage > 1) {
                drpCurrentPage--;
                renderDRPTable();
                updateDRPPaginationControls();
            }
        });

        // Event handler untuk next page
        $('#drpNextPage').on('click', function () {
            const totalPages = Math.ceil(drpFilteredData.length / drpRowsPerPage);
            if (drpCurrentPage < totalPages) {
                drpCurrentPage++;
                renderDRPTable();
                updateDRPPaginationControls();
            }
        });
    }

    // Fungsi untuk memfilter data berdasarkan keyword pencarian
    function filterDRPData() {
        if (!drpSearchKeyword) {
            drpFilteredData = [...drpAllData];
            return;
        }

        drpFilteredData = drpAllData.filter(item => {
            // Cari di semua field yang relevan
            const searchFields = [
                item.nama_drp,
                item.nama_hakim,
                item.nip,
                item.gol_ruang,
                item.tp_tgl_lahir,
                item.jenis_kelamin,
                item.isteri_suami,
                item.anak,
                item.agama,
                item.pendidikan,
                item.email,
                item.usulan,
                item.jabatan,
                item.pengadilan,
                item.riwayat_pekerjaan,
                item.keterangan
            ];

            return searchFields.some(field =>
                field && field.toString().toLowerCase().includes(drpSearchKeyword)
            );
        });
    }

    // Fungsi untuk merender tabel DRP dengan pagination
    function renderDRPTable() {
        const tableBody = $('#drpTableBody');
        tableBody.empty();

        if (drpFilteredData.length === 0) {
            tableBody.html(`
            <tr>
                <td colspan="9" class="text-center py-4">
                    <i class="fas fa-search fa-2x text-muted mb-2"></i>
                    <p class="text-muted">${drpSearchKeyword ? 'Tidak ada data yang sesuai dengan pencarian' : 'Tidak ada data'}</p>
                </td>
            </tr>
        `);
            return;
        }

        // Hitung data yang akan ditampilkan
        const startIndex = (drpCurrentPage - 1) * drpRowsPerPage;
        const endIndex = Math.min(startIndex + drpRowsPerPage, drpFilteredData.length);
        const currentPageData = drpFilteredData.slice(startIndex, endIndex);

        let tableHtml = '';

        currentPageData.forEach((row, index) => {
            const globalIndex = startIndex + index;
            const nomor = globalIndex + 1;

            // Siapkan foto URL
            let fotoUrl = '';
            if (row.sumber_foto === 'sikep') {
                fotoUrl = row.foto_pegawai
                    ? 'https://sikep.mahkamahagung.go.id/uploads/foto_pegawai/' + row.foto_pegawai
                    : '';
            } else {
                fotoUrl = row.foto_pegawai
                    ? "<?php echo base_url('uploads/foto_hakim/'); ?>" + row.foto_pegawai
                    : '';
            }

            // Parse riwayat pekerjaan
            const riwayatPekerjaan = row.riwayat_pekerjaan ? row.riwayat_pekerjaan.split('|').map(item => item.trim()) : [];

            // Hitung jumlah baris yang dibutuhkan
            const jumlahDataDasar = 11; // Data biodata dasar
            const jumlahRiwayat = riwayatPekerjaan.length;
            const totalBaris = Math.max(jumlahDataDasar, jumlahRiwayat + 1); // +1 untuk header riwayat

            // Parse pendidikan
            const pendidikanList = row.pendidikan ? row.pendidikan.split('|').map(item => item.trim()) : [];

            // Parse keterangan
            const keteranganList = row.keterangan ? row.keterangan.split('|').map(item => item.trim()) : [];

            // Data biodata dasar
            const biodata = [
                { label: 'Nama', value: row.nama_drp || row.nama_hakim || '-' },
                { label: 'NIP', value: row.nip || '-' },
                { label: 'GOL.Ruang', value: row.gol_ruang || '-' },
                { label: 'TP/TGL Lahir', value: row.tp_tgl_lahir || '-' },
                { label: 'Jenis Kelamin', value: row.jenis_kelamin || '-' },
                { label: 'ISTERI/SUAMI', value: row.isteri_suami || '-' },
                { label: 'Anak', value: row.anak || '0' },
                { label: 'Agama', value: row.agama || '-' },
                { label: 'Pendidikan', value: pendidikanList.map(item => `• ${item}`).join('<br>') || '-' },
                { label: 'Email', value: row.email || '-' },
                { label: 'Usulan', value: row.usulan || '-' }
            ];

            // Baris 1: Header
            tableHtml += `
            <tr>
                <td rowspan="${totalBaris}" class="text-center align-middle">${nomor}</td>
                <td>Nama</td>
                <td>:</td>
                <td>${biodata[0].value}</td>
                <td rowspan="${totalBaris}" class="align-middle">
                    <div class="text-center">
                        ${fotoUrl ? `<img src="${fotoUrl}" alt="Foto" style="max-height: 150px; max-width: 120px;" class="img-thumbnail mb-2">` : ''}
                        <br>
                        <strong>${row.jabatan || '-'}</strong>
                        <br>
                        <em>${row.kelas_pengadilan ? '(' + row.kelas_pengadilan + ')' : ''}</em>
                    </div>
                </td>
                <td rowspan="${totalBaris}" class="align-middle">${row.pengadilan || '-'}</td>
                <td><strong>Tanggal</strong></td>
                <td><strong>Jabatan</strong></td>
                <td rowspan="${totalBaris}" class="align-middle">
                    ${keteranganList.map(item => `• ${item}`).join('<br>') || '-'}
                </td>
            </tr>
        `;

            // Baris 2-11: Data biodata dan riwayat
            for (let i = 1; i < totalBaris; i++) {
                const biodataItem = biodata[i];
                const riwayatItem = riwayatPekerjaan[i - 1]; // -1 karena baris 1 sudah header

                let label = '';
                let value = '';
                let tanggal = '';
                let jabatan = '';

                if (i < biodata.length) {
                    // Masih dalam range biodata
                    label = biodataItem.label;
                    value = biodataItem.value;
                }

                if (riwayatItem) {
                    // Ada data riwayat
                    const parts = riwayatItem.split(' - ');
                    tanggal = parts[0] || '';
                    jabatan = parts[1] || '';
                }

                tableHtml += `
                <tr>
                    <td>${label}</td>
                    <td>${label ? ':' : ''}</td>
                    <td>${value}</td>
                    <td>${tanggal}</td>
                    <td>${jabatan}</td>
                </tr>
            `;
            }
        });

        tableBody.html(tableHtml);
    }

    // Fungsi untuk update kontrol pagination
    function updateDRPPaginationControls() {
        const totalItems = drpFilteredData.length;
        const totalPages = Math.ceil(totalItems / drpRowsPerPage);
        const startItem = totalItems > 0 ? (drpCurrentPage - 1) * drpRowsPerPage + 1 : 0;
        const endItem = Math.min(drpCurrentPage * drpRowsPerPage, totalItems);

        // Update info halaman
        $('#drpPageInfo').text(`Halaman ${drpCurrentPage} dari ${totalPages}`);
        $('#drpTotalInfo').text(`Total: ${totalItems} data`);
        $('#drpPaginationInfo').text(`Menampilkan ${startItem}-${endItem} dari ${totalItems} data`);

        // Update status tombol
        $('#drpPrevPage').prop('disabled', drpCurrentPage === 1);
        $('#drpNextPage').prop('disabled', drpCurrentPage === totalPages || totalPages === 0);

        // Update style tombol
        $('#drpPrevPage').toggleClass('btn-outline-primary', drpCurrentPage > 1);
        $('#drpPrevPage').toggleClass('btn-secondary', drpCurrentPage === 1);

        $('#drpNextPage').toggleClass('btn-outline-primary', drpCurrentPage < totalPages);
        $('#drpNextPage').toggleClass('btn-secondary', drpCurrentPage === totalPages || totalPages === 0);
    }

    // Fungsi untuk merender tabel DRP dengan pagination dan searching
    function renderDRPTableWithPagination(selectedUsulanIds) {
        const countBadge = $('#drpCount');
        countBadge.text(selectedUsulanIds.length + ' data terpilih');

        if (selectedUsulanIds.length === 0) {
            $('#drpTableBody').html('<tr><td colspan="9" class="text-center">Tidak ada data yang dipilih.</td></tr>');
            updateDRPPaginationControls();
            return;
        }

        // Ambil data DRP dari server
        $.ajax({
            url: "<?php echo site_url('admin/usulanperikanan/get_drp_by_usulan_ids'); ?>",
            type: "POST",
            data: { ids: selectedUsulanIds },
            dataType: "json",
            success: function (drpList) {
                if (!Array.isArray(drpList) || drpList.length === 0) {
                    $('#drpTableBody').html('<tr><td colspan="9" class="text-center">Data DRP tidak ditemukan.</td></tr>');
                    drpAllData = [];
                    drpFilteredData = [];
                    updateDRPPaginationControls();
                    return;
                }

                // Hitung total baris untuk menentukan pagination
                let totalRows = 0;
                drpList.forEach(row => {
                    const riwayatPekerjaan = row.riwayat_pekerjaan ? row.riwayat_pekerjaan.split('|').map(item => item.trim()) : [];
                    const jumlahRiwayat = riwayatPekerjaan.length;
                    totalRows += Math.max(11, jumlahRiwayat + 1); // Minimal 11 baris, atau lebih jika ada riwayat banyak
                });

                // Sesuaikan rowsPerPage berdasarkan kompleksitas data
                drpRowsPerPage = Math.max(1, Math.floor(50 / (totalRows / drpList.length)));

                // Simpan data dan reset state
                drpAllData = drpList;
                drpCurrentPage = 1;
                drpSearchKeyword = '';
                $('#drpSearchInput').val('');

                // Filter dan render data
                filterDRPData();
                renderDRPTable();
                updateDRPPaginationControls();
            },
            error: function () {
                $('#drpTableBody').html('<tr><td colspan="9" class="text-center text-danger">Gagal mengambil data DRP.</td></tr>');
                drpAllData = [];
                drpFilteredData = [];
                updateDRPPaginationControls();
            }
        });
    }

    // Fungsi untuk export DRP ke Excel dengan pilihan gambar
    async function exportDRPToExcel() {
        // Kumpulkan data yang dipilih - PERBAIKAN: tidak menggunakan variabel table
        var selectedUsulanIds = [];
        $('.row-checkbox:checked').each(function () {
            // Ambil ID dari atribut id checkbox (format: cb123)
            var checkboxId = $(this).attr('id');
            if (checkboxId && checkboxId.startsWith('cb')) {
                var id = checkboxId.replace('cb', '');
                selectedUsulanIds.push(id);
            }
        });

        if (selectedUsulanIds.length === 0) {
            showAlert('warning', 'Tidak ada data', 'Silakan pilih baris data terlebih dahulu!');
            return;
        }

        // Tampilkan modal pilihan export
        $('#modalExportPilihan').modal('show');

        // Handler untuk export dengan gambar
        $('#exportWithImages').off('click').on('click', function () {
            $('#modalExportPilihan').modal('hide');
            executeExport(selectedUsulanIds, 'with_images');
        });

        // Handler untuk export dengan hyperlink
        $('#exportWithLinks').off('click').on('click', function () {
            $('#modalExportPilihan').modal('hide');
            executeExport(selectedUsulanIds, 'with_links');
        });
    }

    // Fungsi utama untuk execute export berdasarkan pilihan
    async function executeExport(selectedUsulanIds, exportType) {
        try {
            // Tampilkan loading
            const loadingAlert = Swal.fire({
                title: 'Mempersiapkan Excel...',
                text: exportType === 'with_images'
                    ? 'Sedang memproses data dan gambar untuk export'
                    : 'Sedang memproses data dengan hyperlink',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            // Ambil data DRP dari server
            const response = await $.ajax({
                url: "<?php echo site_url('admin/usulanperikanan/get_drp_by_usulan_ids'); ?>",
                type: "POST",
                data: { ids: selectedUsulanIds },
                dataType: "json"
            });

            const drpList = response;

            if (!Array.isArray(drpList) || drpList.length === 0) {
                await loadingAlert.close();
                showAlert('error', 'Error', 'Tidak ada data DRP untuk diexport');
                return;
            }

            // Buat workbook baru dengan exceljs
            const workbook = new ExcelJS.Workbook();
            workbook.creator = 'Sistem Perikanan';
            workbook.lastModifiedBy = 'Sistem Perikanan';
            workbook.created = new Date();
            workbook.modified = new Date();

            // Buat worksheet
            const worksheet = workbook.addWorksheet('DRP Hakim Ad Hoc Perikanan');

            // Define columns dengan lebar yang sesuai
            worksheet.columns = [
                { width: 8 },   // No
                { width: 15 },  // Biodata (label)
                { width: 3 },   // Titik dua
                { width: 30 },  // Nilai biodata
                { width: 25 },  // Jabatan
                { width: 25 },  // Pengadilan
                { width: 15 },  // Riwayat tanggal
                { width: 25 },  // Riwayat jabatan
                { width: 20 },  // Keterangan
                { width: 20 }   // Foto
            ];

            // Style untuk header
            const headerStyle = {
                font: {
                    name: 'Arial',
                    size: 10,
                    bold: true
                },
                alignment: {
                    vertical: 'middle',
                    horizontal: 'center',
                    wrapText: true
                },
                fill: {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: 'D3D3D3' }
                },
                border: {
                    top: { style: 'thin' },
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                }
            };

            // Style untuk data
            const dataStyle = {
                font: {
                    name: 'Arial',
                    size: 9
                },
                alignment: {
                    vertical: 'top',
                    wrapText: true
                },
                border: {
                    top: { style: 'thin' },
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                }
            };

            // Style untuk hyperlink
            const hyperlinkStyle = {
                font: {
                    name: 'Arial',
                    size: 9,
                    color: { argb: '0000FF' },
                    underline: true
                },
                alignment: {
                    vertical: 'middle',
                    horizontal: 'center',
                    wrapText: true
                },
                border: {
                    top: { style: 'thin' },
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                }
            };

            // HEADER BARIS 1
            const headerRow1 = worksheet.addRow([
                'No', 'Biodata', '', 'Nilai', 'Jabatan', 'Pengadilan', 'Riwayat Pekerjaan', '', 'Keterangan', 'Foto'
            ]);

            // Apply style ke header baris 1
            headerRow1.eachCell((cell) => {
                cell.style = headerStyle;
            });

            // Merge cells untuk header baris 1
            worksheet.mergeCells('A1:A2'); // No
            worksheet.mergeCells('B1:D1'); // Biodata
            worksheet.mergeCells('E1:E2'); // Jabatan
            worksheet.mergeCells('F1:F2'); // Pengadilan
            worksheet.mergeCells('G1:H1'); // Riwayat Pekerjaan
            worksheet.mergeCells('I1:I2'); // Keterangan
            worksheet.mergeCells('J1:J2'); // Foto

            // HEADER BARIS 2
            const headerRow2 = worksheet.addRow([
                '', '', '', '', '', '', '', '', '', ''
            ]);

            // Apply style ke header baris 2
            headerRow2.eachCell((cell) => {
                cell.style = headerStyle;
            });

            // Set tinggi baris header
            headerRow1.height = 25;
            headerRow2.height = 25;

            // PROCESS DATA
            let currentRow = 3;

            // Fungsi untuk load gambar via proxy
            async function loadImageViaProxy(url) {
                return new Promise((resolve, reject) => {
                    const xhr = new XMLHttpRequest();
                    xhr.open('GET', url, true);
                    xhr.responseType = 'arraybuffer';

                    xhr.onload = function () {
                        if (xhr.status === 200) {
                            resolve(xhr.response);
                        } else {
                            reject(new Error(`Gagal load gambar: ${xhr.status}`));
                        }
                    };

                    xhr.onerror = function () {
                        reject(new Error('Network error saat load gambar'));
                    };

                    xhr.send();
                });
            }

            // Process setiap data hakim
            for (let index = 0; index < drpList.length; index++) {
                const row = drpList[index];
                const nomor = index + 1;

                // Siapkan foto URL
                let fotoUrl = '';
                if (row.sumber_foto === 'sikep' && row.foto_pegawai) {
                    fotoUrl = "<?php echo site_url('admin/adhoc/perikanan/get_image_proxy/'); ?>" + row.foto_pegawai;
                } else if (row.foto_pegawai) {
                    fotoUrl = "<?php echo base_url('uploads/foto_hakim/'); ?>" + row.foto_pegawai;
                }

                // Parse data
                const riwayatPekerjaan = row.riwayat_pekerjaan ? row.riwayat_pekerjaan.split('|').map(item => item.trim()) : [];
                const riwayatTanggal = riwayatPekerjaan.map(item => item.split(' - ')[0] || '').filter(item => item);
                const riwayatJabatan = riwayatPekerjaan.map(item => item.split(' - ')[1] || '').filter(item => item);
                const pendidikanList = row.pendidikan ? row.pendidikan.split('|').map(item => item.trim()) : [];
                const keteranganList = row.keterangan ? row.keterangan.split('|').map(item => item.trim()) : [];

                // Data untuk 11 baris per hakim - TAMBAHKAN LOGIKA UNTUK RIWAYAT LEBIH DARI 11
                const barisData = [
                    ['Nama', row.nama_drp || row.nama_hakim || '-', 'Tanggal', 'Jabatan', keteranganList[0] || '-'],
                    ['NIP', row.nip || '-', riwayatTanggal[0] || '-', riwayatJabatan[0] || '-', keteranganList[1] || '-'],
                    ['GOL.Ruang', row.gol_ruang || '-', riwayatTanggal[1] || '-', riwayatJabatan[1] || '-', keteranganList[2] || '-'],
                    ['TP/TGL Lahir', row.tp_tgl_lahir || '-', riwayatTanggal[2] || '-', riwayatJabatan[2] || '-', keteranganList[3] || '-'],
                    ['Jenis Kelamin', row.jenis_kelamin || '-', riwayatTanggal[3] || '-', riwayatJabatan[3] || '-', keteranganList[4] || '-'],
                    ['ISTERI/SUAMI', row.isteri_suami || '-', riwayatTanggal[4] || '-', riwayatJabatan[4] || '-', keteranganList[5] || '-'],
                    ['Anak', row.anak || '0', riwayatTanggal[5] || '-', riwayatJabatan[5] || '-', keteranganList[6] || '-'],
                    ['Agama', row.agama || '-', riwayatTanggal[6] || '-', riwayatJabatan[6] || '-', keteranganList[7] || '-'],
                    // PERUBAHAN: Pendidikan dipisahkan new line
                    ['Pendidikan', pendidikanList.join('\n') || '-', riwayatTanggal[7] || '-', riwayatJabatan[7] || '-', keteranganList[8] || '-'],
                    ['Email', row.email || '-', riwayatTanggal[8] || '-', riwayatJabatan[8] || '-', keteranganList[9] || '-'],
                    ['Usulan', row.usulan || '-', riwayatTanggal[9] || '-', riwayatJabatan[9] || '-', keteranganList[10] || '-']
                ];

                // TAMBAHKAN RIWAYAT PEKERJAAN LEBIH DARI 10
                for (let i = 10; i < riwayatPekerjaan.length; i++) {
                    barisData.push([
                        '', // Kolom label kosong
                        '', // Kolom nilai kosong  
                        riwayatTanggal[i] || '-',
                        riwayatJabatan[i] || '-',
                        ''  // Kolom keterangan kosong
                    ]);
                }

                // Tambahkan data untuk setiap baris
                barisData.forEach((baris, idx) => {
                    const rowNumber = currentRow + idx;
                    const excelRow = worksheet.getRow(rowNumber);

                    // Set nilai untuk setiap cell
                    excelRow.getCell(1).value = idx === 0 ? nomor : '';
                    excelRow.getCell(2).value = baris[0];
                    excelRow.getCell(3).value = ':';
                    excelRow.getCell(4).value = baris[1];
                    excelRow.getCell(5).value = idx === 0 ? (row.jabatan || '-') : '';
                    excelRow.getCell(6).value = idx === 0 ? (row.pengadilan || '-') : '';
                    excelRow.getCell(7).value = baris[2];
                    excelRow.getCell(8).value = baris[3];
                    excelRow.getCell(9).value = baris[4];

                    // Apply data style ke semua cell
                    for (let col = 1; col <= 9; col++) {
                        const cell = excelRow.getCell(col);
                        cell.style = dataStyle;

                        // Center untuk kolom nomor dan titik dua
                        if (col === 1 || col === 3) {
                            cell.style.alignment = { ...dataStyle.alignment, horizontal: 'center' };
                        }
                    }

                    // Set tinggi baris
                    excelRow.height = 20;
                });

                // Center alignment untuk kolom yang di-merge
                const centerStyle = {
                    ...dataStyle,
                    alignment: {
                        vertical: 'middle',
                        horizontal: 'center',
                        wrapText: true
                    }
                };

                // Merge cells untuk kolom yang sama
                if (barisData.length > 1) {
                    worksheet.mergeCells(`A${currentRow}:A${currentRow + barisData.length - 1}`);
                    worksheet.mergeCells(`E${currentRow}:E${currentRow + barisData.length - 1}`);
                    worksheet.mergeCells(`F${currentRow}:F${currentRow + barisData.length - 1}`);
                    worksheet.mergeCells(`J${currentRow}:J${currentRow + barisData.length - 1}`);
                }

                // Apply center style ke cell yang di-merge
                if (barisData.length > 1) {
                    const mergedCells = [
                        `A${currentRow}`, `E${currentRow}`, `F${currentRow}`, `J${currentRow}`
                    ];

                    mergedCells.forEach(cellAddress => {
                        const cell = worksheet.getCell(cellAddress);
                        cell.style = centerStyle;
                    });
                }

                // Handle kolom foto berdasarkan pilihan export
                if (exportType === 'with_images') {
                    // Export dengan gambar
                    let imageBuffer = null;
                    if (fotoUrl) {
                        try {
                            console.log('Memuat gambar via proxy:', fotoUrl);
                            imageBuffer = await loadImageViaProxy(fotoUrl);
                            console.log('Gambar berhasil dimuat, size:', imageBuffer ? imageBuffer.byteLength + ' bytes' : 'null');
                        } catch (error) {
                            console.warn('Gagal memuat gambar via proxy:', error);
                            imageBuffer = null;
                        }
                    }

                    if (imageBuffer && imageBuffer.byteLength > 0) {
                        try {
                            const imageId = workbook.addImage({
                                buffer: imageBuffer,
                                extension: 'jpeg'
                            });

                            worksheet.addImage(imageId, {
                                tl: { col: 9, row: currentRow - 1 },
                                br: { col: 10, row: currentRow + barisData.length - 1 },
                                editAs: 'absolute'
                            });

                            console.log('Gambar berhasil ditambahkan untuk baris', currentRow);
                        } catch (error) {
                            console.warn('Gagal menambahkan gambar ke Excel:', error);
                            // Fallback: tambahkan teks info
                            const firstRow = worksheet.getRow(currentRow);
                            firstRow.getCell(10).value = 'Foto\nTersedia';
                            firstRow.getCell(10).style = centerStyle;
                        }
                    } else {
                        const firstRow = worksheet.getRow(currentRow);
                        firstRow.getCell(10).value = fotoUrl ? 'Gagal\nLoad\nFoto' : 'Tidak\nAda\nFoto';
                        firstRow.getCell(10).style = {
                            ...centerStyle,
                            fill: {
                                type: 'pattern',
                                pattern: 'solid',
                                fgColor: { argb: fotoUrl ? 'FFFFCC' : 'F0F0F0' }
                            }
                        };
                    }
                } else {
                    // Export dengan hyperlink
                    const firstRow = worksheet.getRow(currentRow);
                    if (fotoUrl) {
                        firstRow.getCell(10).value = {
                            text: 'Foto Hakim',
                            hyperlink: fotoUrl
                        };
                        firstRow.getCell(10).style = hyperlinkStyle;
                    } else {
                        firstRow.getCell(10).value = 'Tidak Ada Foto';
                        firstRow.getCell(10).style = centerStyle;
                    }
                }

                currentRow += barisData.length;

                // Tambahkan baris kosong sebagai pemisah antar hakim
                if (index < drpList.length - 1) {
                    const emptyRow = worksheet.getRow(currentRow);
                    for (let col = 1; col <= 10; col++) {
                        emptyRow.getCell(col).value = '';
                        emptyRow.getCell(col).style = dataStyle;
                    }
                    emptyRow.height = 5;
                    currentRow++;
                }
            }

            // Freeze panes - header baris 1 dan 2 akan tetap terlihat
            worksheet.views = [
                {
                    state: 'frozen',
                    xSplit: 0,
                    ySplit: 2,
                    activeCell: 'A3'
                }
            ];

            // Sembunyikan loading
            await loadingAlert.close();

            // Simpan file
            const buffer = await workbook.xlsx.writeBuffer();
            const blob = new Blob([buffer], {
                type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
            });

            const fileName = `DRP_Hakim_Ad_Hoc_Perikanan_${new Date().toISOString().slice(0, 10)}_${exportType === 'with_images' ? 'dengan_gambar' : 'dengan_hyperlink'}.xlsx`;
            saveAs(blob, fileName);

            showAlert('success', 'Berhasil', `File Excel berhasil diexport dengan ${exportType === 'with_images' ? 'gambar' : 'hyperlink'}!`);

        } catch (error) {
            console.error('Error exporting Excel:', error);
            showAlert('error', 'Error', 'Gagal mengexport data: ' + error.message);
        }
    }

    $(document).ready(function () {
        console.log('Document ready, menginisialisasi komponen usulan...');

        // Inisialisasi komponen
        initSelect2();
        initDatepicker();
        loadDropdownData();
        initDRPPagination();

        // Inisialisasi DataTables
        table = $('#tabel_usulan_perikanan').DataTable({
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
                url: "<?php echo site_url('admin/adhoc/perikanan/get_usulan'); ?>",
                type: "GET",
                dataSrc: "",
                error: function (xhr, error, thrown) {
                    console.error('Error loading data:', error);
                    showAlert('error', 'Error', 'Gagal memuat data dari server');
                }
            },
            columnDefs: [
                { orderable: false, targets: [0, 1, 10] } // Kolom No, Checkbox, dan Aksi tidak bisa diurutkan
            ],
            columnControl: ['order'],
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
                                        // Jangan Export HTML tags di kolom status dan keterangan usulan
                                        var div = document.createElement("div");
                                        div.innerHTML = data;
                                        data = div.textContent || div.innerText || "";

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
                    data: "asal_pengadilan",
                    width: '150px',
                    render: function (data, type, row) {
                        return data || '-';
                    }
                },
                {
                    data: "pengadilan_usulan",
                    width: '150px'
                },
                {
                    data: "nomor_surat",
                    width: '120px'
                },
                {
                    data: "tanggal_usulan",
                    render: function (data) {
                        return formatTanggal(data);
                    },
                    width: '100px'
                },
                {
                    data: "tanggal_surat",
                    render: function (data) {
                        return formatTanggal(data);
                    },
                    width: '100px'
                },
                {
                    data: "keterangan_usulan",
                    render: function (data, type, row) {
                        if (!data) return '-';
                        // Potong teks jika terlalu panjang dan tambahkan tooltip
                        if (data.length > 100) {
                            return '<span title="' + data + '">' + data.substring(0, 100) + '...</span>';
                        }
                        return data;
                    },
                    width: '200px',
                    className: 'text-wrap-cell'
                },
                {
                    data: "_status_",
                    render: function (data) {
                        return formatStatus(data);
                    },
                    className: 'text-center',
                    width: '100px'
                },
                {
                    data: "tanggal_diproses",
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
                console.log('DataTables usulan initialized successfully');
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

        // Event handler untuk tombol tambah usulan
        $('#btn-tambah-usulan').on('click', function () {
            $('#formTambahUsulan')[0].reset();
            $('.select2-pegawai, .select2-pengadilan, .select2-status').val('').trigger('change');
            $('.datepicker').val('');
            $('#modalTambahUsulan').modal('show');
        });

        // Submit form tambah usulan
        $('#formTambahUsulan').on('submit', function (e) {
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                url: "<?php echo site_url('admin/adhoc/perikanan/tambah_usulan'); ?>",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                dataType: "json",
                success: function (response) {
                    if (response.status === 'success') {
                        $('#modalTambahUsulan').modal('hide');
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
                url: "<?php echo site_url('admin/adhoc/perikanan/get_usulan_by_id/'); ?>" + id,
                type: "GET",
                dataType: "json",
                success: function (response) {
                    if (response && !response.error) {
                        // Isi data ke modal detail
                        var sumberFoto = response.sumber_foto;
                        if (sumberFoto == "sikep") {
                            var fotoUrl = response.foto_pegawai
                                ? "https://sikep.mahkamahagung.go.id/uploads/foto_pegawai/" + response.foto_pegawai
                                : 'https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png?20150327203541';
                        } else {
                            var fotoUrl = response.foto_pegawai
                                ? "<?php echo base_url('uploads/foto_hakim/'); ?>" + response.foto_pegawai
                                : 'https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png?20150327203541';
                        }

                        $('#detail_foto_pegawai').attr('src', fotoUrl);
                        $('#detail_nama_pegawai').text(response.nama_pegawai || '-');
                        $('#detail_asal_pengadilan').text(response.asal_pengadilan || '-');
                        $('#detail_pengadilan_usulan').text(response.pengadilan_usulan || '-');
                        $('#detail_nomor_surat').text(response.nomor_surat || '-');
                        $('#detail_tanggal_surat').text(formatTanggal(response.tanggal_surat));
                        $('#detail_tanggal_usulan').text(formatTanggal(response.tanggal_usulan));
                        $('#detail_status').html(formatStatus(response._status_));
                        $('#detail_tanggal_diproses').text(formatTanggal(response.tanggal_diproses));
                        $('#detail_keterangan_status').text(response.keterangan_status || '-');
                        $('#detail_keterangan_usulan').text(response.keterangan_usulan || '-');

                        // Tampilkan berkas jika ada
                        var berkasDiv = $('#detail-berkas');
                        berkasDiv.empty();

                        if (response.berkas) {
                            var berkasUrl = "<?php echo base_url('uploads/usulan_perikanan/'); ?>" + response.berkas;
                            berkasDiv.html(`
                        <a href="${berkasUrl}" target="_blank" class="btn btn-primary mb-2">
                            <i class="fas fa-download mr-2"></i>Unduh Berkas
                        </a>
                        <p class="text-muted">${response.berkas}</p>
                    `);
                        } else {
                            berkasDiv.html(`
                        <i class="fas fa-file fa-3x text-muted mb-2"></i>
                        <p class="text-muted">Tidak ada berkas</p>
                    `);
                        }

                        $('#modalDetailUsulan').modal('show');
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
                url: "<?php echo site_url('admin/adhoc/perikanan/get_usulan_by_id/'); ?>" + id,
                type: "GET",
                dataType: "json",
                success: function (response) {
                    if (response && !response.error) {
                        // Isi data ke modal edit
                        $('#edit_id_usulan').val(response.id);
                        $('#edit_id_pegawai').val(response.id_pegawai).trigger('change');
                        $('#edit_id_pengadilan_usulan').val(response.id_pengadilan_usulan).trigger('change');
                        $('#edit_tanggal_usulan').val(response.tanggal_usulan);
                        $('#edit_nomor_surat').val(response.nomor_surat);
                        $('#edit_tanggal_surat').val(response.tanggal_surat);
                        $('#edit_status').val(response._status_).trigger('change');
                        $('#edit_keterangan_usulan').val(response.keterangan_usulan);
                        $('#edit_keterangan_status').val(response.keterangan_status);
                        $('#edit_tanggal_diproses').val(response.tanggal_diproses);

                        // Tampilkan info berkas saat ini
                        var currentBerkas = $('#current-berkas');
                        currentBerkas.empty();

                        if (response.berkas) {
                            $('#edit_current_berkas').val(response.berkas);
                            var berkasUrl = "<?php echo base_url('uploads/usulan_perikanan/'); ?>" + response.berkas;
                            currentBerkas.html(`
                        <div class="alert alert-info">
                            <i class="fas fa-file mr-2"></i>
                            <strong>Berkas saat ini:</strong> 
                            <a href="${berkasUrl}" target="_blank" style="color:white !important">${response.berkas}</a>
                            <br><small class="text-muted" style="color:black !important">Kosongkan jika tidak ingin mengubah berkas</small>
                        </div>
                    `);
                        } else {
                            $('#edit_current_berkas').val('');
                            currentBerkas.html(`
                        <div class="alert alert-warning">
                            <i class="fas fa-exclamation-triangle mr-2"></i>
                            Tidak ada berkas yang diunggah
                        </div>
                    `);
                        }

                        $('#modalEditUsulan').modal('show');
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

        // Submit form edit usulan
        $('#formEditUsulan').on('submit', function (e) {
            e.preventDefault();

            // Konfirmasi sebelum mengupdate
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: 'Data Usulan akan diupdate. Lanjutkan?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Update!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    var formData = new FormData(this);
                    $.ajax({
                        url: "<?php echo site_url('admin/adhoc/perikanan/update_usulan'); ?>",
                        type: "POST",
                        data: formData,
                        processData: false,
                        contentType: false,
                        dataType: "json",
                        success: function (response) {
                            if (response.status === 'success') {
                                $('#modalEditUsulan').modal('hide');
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

            showConfirm('Konfirmasi Hapus', 'Apakah Anda yakin ingin menghapus data usulan ini?', 'Ya, Hapus!', 'Batal')
                .then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "<?php echo site_url('admin/adhoc/perikanan/hapus_usulan/'); ?>" + id,
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

        // Event handler untuk tombol cetak DRP
        $('#print-drp').on('click', function () {
            var selectedUsulanIds = [];
            $('.row-checkbox:checked').each(function () {
                var row = $(this).closest('tr');
                var rowData = table.row(row).data();
                if (rowData && rowData.id) {
                    selectedUsulanIds.push(rowData.id);
                }
            });

            if (selectedUsulanIds.length === 0) {
                showAlert('warning', 'Tidak ada data', 'Silakan pilih baris data terlebih dahulu!');
                return;
            }

            $('#modalDRP').modal('show');

            // Beri sedikit delay untuk memastikan modal sudah terbuka sepenuhnya
            setTimeout(function () {
                renderDRPTableWithPagination(selectedUsulanIds);
            }, 500);
        });

        // Event handler untuk tombol export Excel
        $('#exportExcelDRP').on('click', function () {
            exportDRPToExcel();
        });

        // Event handler untuk tombol print
        $('#printDRP').on('click', function () {
            window.print();
        });

        // Hancurkan DataTables saat modal ditutup
        $('#modalDRP').on('hidden.bs.modal', function () {
            if ($.fn.DataTable.isDataTable('#tabelDRP')) {
                $('#tabelDRP').DataTable().destroy();
            }
        });

        // Inisialisasi select2 setiap kali modal tambah dibuka
        $('#modalTambahUsulan').on('shown.bs.modal', function () {
            initSelect2Tambah();
        });

        // Inisialisasi select2 setiap kali modal edit dibuka
        $('#modalEditUsulan').on('shown.bs.modal', function () {
            initSelect2Edit();
        });

        console.log('Semua event handler berhasil diinisialisasi');
    });
</script>