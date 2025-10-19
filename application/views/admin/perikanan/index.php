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
                                <!-- Tombol collapse dan dropdown -->
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

                        <!-- Tabel Data Hakim Perikanan -->
                        <div class="card-body">
                            <table id="tabel_hakim_perikanan" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <!-- Checkbox untuk pilih semua baris -->
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="select-all">
                                                <label for="select-all" class="custom-control-label"></label>
                                            </div>
                                        </th>
                                        <th>Nama</th>
                                        <th>NIP/NRP</th>
                                        <th>NIK</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Pendidikan Terakhir</th>
                                        <th>Jabatan</th>
                                        <th>Pengadilan</th>
                                        <th>Kelas</th>
                                        <th>Wilayah</th>
                                        <!-- Tambahkan kolom lain jika diperlukan -->
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                        <!-- Footer card: tombol dan info jumlah terpilih -->
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary" id="show-selected">Show Selected Data</button>
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

<script>
    $(document).ready(function () {
        // Inisialisasi DataTables dengan pengaturan bahasa Indonesia dan AJAX
        var table = $('#tabel_hakim_perikanan').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/2.3.4/i18n/id.json'
            },
            processing: true,
            serverSide: false,
            columnControl: ['order'],
            ordering: {
                indicators: false,
                handler: false
            },
            responsive: true,
            scrollX: true,
            ajax: {
                url: "<?php echo site_url('admin/adhoc/perikanan/get_data'); ?>",
                type: "GET",
                dataSrc: ""
            },
            columns: [
                {
                    data: null,
                    orderable: false,
                    searchable: false,
                    render: function (data, type, row, meta) {
                        // Checkbox untuk setiap baris
                        return `<div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input row-checkbox" id="cb${row.id}">
                            <label class="custom-control-label" for="cb${row.id}"></label>
                        </div>`;
                    }
                },
                { data: "nama" },
                { data: "nip_nrp" },
                { data: "nik" },
                { data: "tempat_lahir" },
                { data: "tanggal_lahir" },
                { data: "jenis_kelamin" },
                { data: "pendidikan_terakhir" },
                { data: "jabatan" },
                { data: "nama_pengadilan" },
                { data: "kelas" },
                { data: "wilayah" }
                // Tambahkan kolom lain jika diperlukan
            ],
            order: [[1, 'asc']],
            pageLength: 10,
            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Semua"]]
        });

        // Fungsi untuk update jumlah baris terpilih
        function updateSelectedCount() {
            var selectedCount = $('.row-checkbox:checked').length;
            $('#selected-count').text(selectedCount + ' rows selected');
        }

        // Checkbox "Pilih Semua"
        $('#select-all').on('click', function () {
            var isChecked = $(this).prop('checked');
            $('.row-checkbox').prop('checked', isChecked);
            updateSelectedCount();
        });

        // Checkbox per baris
        $(document).on('change', '.row-checkbox', function () {
            // Update status "Pilih Semua" jika semua baris terpilih
            var allChecked = $('.row-checkbox:checked').length === $('.row-checkbox').length;
            $('#select-all').prop('checked', allChecked);
            updateSelectedCount();
        });

        // Tombol tampilkan data terpilih
        $('#show-selected').on('click', function () {
            var selectedData = [];
            $('.row-checkbox:checked').each(function () {
                var row = $(this).closest('tr');
                var rowData = table.row(row).data();
                selectedData.push(rowData);
            });

            if (selectedData.length === 0) {
                alert('Tidak ada baris yang dipilih!');
            } else {
                alert(selectedData.length + ' baris dipilih. Lihat detail di konsol.');
                console.log("Data terpilih:", selectedData);
            }
        });

        // Update jumlah terpilih saat pertama kali load
        updateSelectedCount();
    });
</script>

<?php $this->load->view('./partials/bottom'); ?>