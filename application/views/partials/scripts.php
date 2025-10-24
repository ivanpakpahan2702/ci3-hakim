<!-- jQuery (local) -->
<script src="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/jquery/jquery.min.js'); ?>"></script>

<!-- Bootstrap (local) -->
<script src="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- DataTables core + Bootstrap5 integration (CDN) -->
<script src="https://cdn.datatables.net/2.3.4/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.3.4/js/dataTables.bootstrap5.min.js"></script>

<!-- DataTables extensions (CDN) -->
<script src="https://cdn.datatables.net/searchpanes/2.3.5/js/dataTables.searchPanes.min.js"></script>
<script src="https://cdn.datatables.net/searchpanes/2.3.5/js/searchPanes.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/select/3.1.3/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/select/3.1.3/js/select.bootstrap5.min.js"></script>

<!-- Buttons extension + dependencies (CDN) -->
<script src="https://cdn.datatables.net/buttons/3.2.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.2.5/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/3.2.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.2.5/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.2.5/js/buttons.colVis.min.js"></script>

<!-- ColReorder (CDN) -->
<script src="https://cdn.datatables.net/colreorder/2.1.2/js/dataTables.colReorder.js"></script>
<script src="https://cdn.datatables.net/colreorder/2.1.2/js/colReOrder.bootstrap5.js"></script>

<!-- Select Datatables JS (CDN) -->
<script src="https://cdn.datatables.net/select/3.1.3/js/select.bootstrap5.js"></script>

<!-- Optional: ColumnControl if needed (CDN) -->
<script src="https://cdn.datatables.net/columncontrol/1.1.1/js/dataTables.columnControl.js"></script>
<script src="https://cdn.datatables.net/columncontrol/1.1.1/js/columnControl.bootstrap5.js"></script>

<!-- Fixed Coloum Datatables JS (CDN) -->
<script src="https://cdn.datatables.net/fixedcolumns/5.0.5/js/dataTables.fixedColumns.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/5.0.5/js/fixedColumns.bootstrap5.js"></script>

<!-- overlayScrollbars (local) -->
<script
    src="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>

<!-- PAGE PLUGINS: Mapael / ChartJS (local) -->
<script src="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/jquery-mousewheel/jquery.mousewheel.js'); ?>"></script>
<script src="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/raphael/raphael.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/jquery-mapael/jquery.mapael.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/jquery-mapael/maps/usa_states.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/chart.js/Chart.min.js'); ?>"></script>

<!-- SweetAlert2 -->
<script src="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/AdminLTE-3.2.0/dist/js/adminlte.min.js'); ?>"></script>
<!-- AdminLTE demo / page scripts -->
<script src="<?php echo base_url('assets/AdminLTE-3.2.0/dist/js/demo.js'); ?>"></script>
<script src="<?php echo base_url('assets/AdminLTE-3.2.0/dist/js/pages/dashboard2.js'); ?>"></script>

<!-- Load CSS SweetAlert2 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- Load CSS Select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@1.5.2/dist/select2-bootstrap4.min.css">

<!-- Load JavaScript SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

<!-- Load JavaScript Select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Load DateRangePicker -->
<link href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/min/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<!-- Excel JS -->
<script src="https://cdn.jsdelivr.net/npm/xlsx@0.18.5/dist/xlsx.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.core.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/exceljs/4.3.0/exceljs.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>

<script>
    // Fungsi untuk format tanggal (yang sudah ada, ditambahkan pengecekan)
    function formatTanggal(data) {
        if (!data || data === '0000-00-00') return '';
        try {
            var date = new Date(data);
            if (isNaN(date.getTime())) return '';
            var day = date.getDate().toString().padStart(2, '0');
            var month = (date.getMonth() + 1).toString().padStart(2, '0');
            var year = date.getFullYear();
            return day + '-' + month + '-' + year;
        } catch (e) {
            return '';
        }
    }
</script>

<script>
    // Jika href alerJSNyanCat diklik
    document.getElementById('alerJSNyanCat').addEventListener('click', function () {
        Swal.fire({
            title: "Tentang Aplikasi",
            html: `Aplikasi Manajemen Hakim AdHoc Perikanan \n <br> Dibuat oleh Ganis Badilum \n <br> Versi 1.0.0 \n <br> Hak Cipta 2025`,
            width: 600,
            padding: "3em",
            color: "#716add",
            background: "#fff url(https://sweetalert2.github.io/images/trees.png)",
            backdrop: `
    rgba(0,0,123,0.4)
    url("/images/nyan-cat.gif")
    left top
    no-repeat
  `
        });
    });
</script>

<!-- Custom JS -->
<script src="<?php echo base_url('assets/js/hakim_perikanan.js'); ?>"></script>