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

                        <!-- Tabel Data Hakim Perikanan -->
                        <div class="card-body">
                            <!-- Form pencarian spesifik kolom -->
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <select id="search-column" class="form-control select2-search">
                                        <option value="2">Nama Lengkap</option>
                                        <option value="3">NIP/NRP</option>
                                        <option value="4">Foto</option>
                                        <option value="5">Jabatan</option>
                                        <option value="6">Satker</option>
                                        <option value="7">TMT Mutas</option>
                                        <option value="8">No Kepres</option>
                                        <option value="9">Tanggal No Kepres</option>
                                        <option value="10">SK Dirjen/KMA</option>
                                        <option value="11">Tanggal SK Dirjen/KMA</option>
                                        <option value="12">Tanggal Pelantikan</option>
                                        <option value="13">Tanggal Perpanjangan [prediksi]</option>
                                        <option value="14">TMT Perpanjangan</option>
                                        <option value="15">SK Perpanjangan</option>
                                        <option value="16">Tanggal SK Perpanjangan</option>
                                        <option value="17">Masa Jabatan</option>
                                        <option value="18">Habis Masa Jabatan</option>
                                        <option value="19">Status Jabatan</option>
                                        <option value="20">Sisa Jabatan</option>
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
                                    <button type="button" class="btn btn-success" id="btn-tambah-hakim">
                                        <i class="fas fa-plus"></i> Tambah Hakim
                                    </button>
                                </div>
                            </div>

                            <!-- Tabel data -->
                            <table id="tabel_hakim_perikanan"
                                class="table table-hover table-bordered table-striped display nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="select-all">
                                                <label for="select-all" class="custom-control-label"></label>
                                            </div>
                                        </th>
                                        <th>Nama Lengkap</th>
                                        <th>NIP/NRP</th>
                                        <th>Foto</th>
                                        <th>Jabatan</th>
                                        <th>Satker</th>
                                        <th>TMT Mutasi</th>
                                        <th>No Kepres</th>
                                        <th>Tanggal No Kepres</th>
                                        <th>SK Dirjen/KMA</th>
                                        <th>Tanggal SK Dirjen/KMA</th>
                                        <th>Tanggal Pelantikan</th>
                                        <th>Tanggal Perpanjangan <small
                                                style="font-style: italic; font-weight: bold;">prediksi</small>
                                        </th>
                                        <th>TMT Perpanjangan</th>
                                        <th>SK Perpanjangan</th>
                                        <th>Tanggal SK Perpanjangan</th>
                                        <th>Masa Jabatan</th>
                                        <th>Habis Masa Jabatan</th>
                                        <th>Status Jabatan</th>
                                        <th>Sisa Jabatan</th>
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
                            <button type="button" class="btn btn-primary" id="show-selected">Tampilkan Data
                                Terpilih</button>
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

<!-- Modal untuk preview gambar -->
<div class="modal fade" id="fotoModal" tabindex="-1" aria-labelledby="fotoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img id="modal-img" src="" alt="Foto Hakim" class="img-fluid" style="max-height:70vh;">
            </div>
        </div>
    </div>
</div>

<!-- Modal tambah hakim -->
<div class="modal fade" id="modalTambahHakim" tabindex="-1" aria-labelledby="modalTambahHakimLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form id="formTambahHakim" enctype="multipart/form-data">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="modalTambahHakimLabel">
                        <i class="fas fa-fish mr-2" style="color: #FFD700;"></i>Tambah Hakim Baru
                    </h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Tutup">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="max-height: 70vh; overflow-y: auto;">
                    <p style="font-style: italic;">*Isi data sesuai dengan data hakim yang sebenarnya</p>
                    <br>
                    <br>
                    <!-- Baris 1: Data Pribadi -->
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-user mr-1" style="color: #3498db;"></i>Nama Lengkap *</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-id-card mr-1" style="color: #e74c3c;"></i>NIP/NRP</label>
                            <input type="text" name="nip_nrp" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-address-card mr-1" style="color: #9b59b6;"></i>NIK</label>
                            <input type="text" name="nik" class="form-control">
                        </div>
                    </div>

                    <!-- Baris 2: Data Kelahiran -->
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-map-marker-alt mr-1" style="color: #e67e22;"></i>Tempat
                                Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-calendar-alt mr-1" style="color: #2ecc71;"></i>Tanggal Lahir</label>
                            <input type="text" name="tanggal_lahir" class="form-control datepicker">
                        </div>
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-venus-mars mr-1" style="color: #e84393;"></i>Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control select2-modal" id="selectJenisKelamin">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <!-- Baris 3: Data Pendidikan & Jabatan -->
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-graduation-cap mr-1" style="color: #f39c12;"></i>Pendidikan
                                Terakhir</label>
                            <input type="text" name="pendidikan_terakhir" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-briefcase mr-1" style="color: #34495e;"></i>Jabatan</label>
                            <input type="text" name="jabatan" class="form-control" value="Hakim Ad Hoc Perikanan"
                                disabled>
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-calendar-check mr-1" style="color: #27ae60;"></i>TMT
                                Golongan</label>
                            <input type="text" name="tmt_gol" class="form-control datepicker">
                        </div>
                        <div class="form-group col-md-3">
                            <label>
                                <i class="fas fa-layer-group mr-1" style="color: #8e44ad;"></i>Golongan
                            </label>
                            <select name="golongan" class="form-control select2-modal" id="selectGolongan">
                                <option value="87">- - Tanpa Golongan </option>
                                <option value="IV/e">IV/e - Pembina Utama </option>
                                <option value="IV/d">IV/d - Pembina Utama Madya </option>
                                <option value="IV/c">IV/c - Pembina Utama Muda </option>
                                <option value="IV/b">IV/b - Pembina Tingkat I </option>
                                <option value="IV/a">IV/a - Pembina </option>
                                <option value="III/d">III/d - Penata Tingkat I </option>
                                <option value="III/c">III/c - Penata </option>
                                <option value="III/b">III/b - Penata Muda Tingkat I </option>
                                <option value="III/a">III/a - Penata Muda </option>
                                <option value="II/d">II/d - Pengatur Tingkat I </option>
                                <option value="II/c">II/c - Pengatur </option>
                                <option value="II/b">II/b - Pengatur Muda Tingkat I </option>
                                <option value="II/a">II/a - Pengatur Muda </option>
                                <option value="I/d">I/d - Juru Tingkat I </option>
                                <option value="I/c">I/c - Juru </option>
                                <option value="I/b">I/b - Juru Muda Tingkat I </option>
                                <option value="I/a">I/a - Juru Muda </option>
                                <option value="Marsdya">Marsdya - Marsekal Madya TNI Angkatan Udara</option>
                                <option value="Marsekal">Marsekal - Marsekal TNI Angkatan Udara</option>
                                <option value="Marsekal Besar">Marsekal Besar - Marsekal Besar TNI Angkatan Udara
                                </option>
                                <option value="Laksamana Besar">Laksamana Besar - Laksamana Besar TNI Angkatan Laut
                                </option>
                                <option value="Laksamana">Laksamana - Laksamana TNI Angkatan Laut</option>
                                <option value="Laksdya">Laksdya - Laksamana Madya TNI Angkatan Laut</option>
                                <option value="Letjen">Letjen - Letnan Jenderal TNI Angkatan Darat</option>
                                <option value="Jend.">Jend. - Jenderal TNI Angkatan Darat</option>
                                <option value="Jenderal Besar">Jenderal Besar - Jenderal Besar TNI Angkatan Darat
                                </option>
                                <option value="Marsda">Marsda - Marsekal Muda TNI Angkatan Udara</option>
                                <option value="Mayjen">Mayjen - Mayor Jenderal TNI Angkatan Darat</option>
                                <option value="Laksda">Laksda - Laksamana Muda TNI Angkatan Laut</option>
                                <option value="Marsma">Marsma - Marsekal Pertama TNI Angkatan Udara</option>
                                <option value="Brigjen">Brigjen - Brigadir Jenderal TNI Angkatan Darat</option>
                                <option value="Laksma">Laksma - Laksamana Pertama TNI Angkatan Laut</option>
                                <option value="Kol. Laut">Kol. - Kolonel TNI Angkatan Laut</option>
                                <option value="Kol. Udara">Kol. - Kolonel TNI Angkatan Udara</option>
                                <option value="Kol. Darat">Kol. - Kolonel TNI Angkatan Darat</option>
                                <option value="Letkol Laut">Letkol - Letnan Kolonel TNI Angkatan Laut</option>
                                <option value="Mayor Laut">Mayor Laut - Mayor Laut TNI Angkatan Laut</option>
                                <option value="Letkol Darat">Letkol - Letnan Kolonel TNI Angkatan Darat</option>
                                <option value="May. Darat">May. - Mayor TNI Angkatan Darat</option>
                                <option value="May. Udara">May. - Mayor TNI Angkatan Udara</option>
                                <option value="Letkol Udara">Letkol - Letnan Kolonel TNI Angkatan Udara</option>
                                <option value="Kapt. Laut">Kapt. - Kapten TNI Angkatan Laut</option>
                                <option value="Kapt. Udara">Kapt. - Kapten TNI Angkatan Udara</option>
                                <option value="Kapt. Darat">Kapt. - Kapten TNI Angkatan Darat</option>
                                <option value="Lettu Darat">Lettu - Letnan Satu TNI Angkatan Darat</option>
                                <option value="Lettu Udara">Lettu - Letnan Satu TNI Angkatan Udara</option>
                                <option value="Lettu Laut">Lettu - Letnan Satu TNI Angkatan Laut</option>
                                <option value="Letda Laut">Letda - Letnan Dua TNI Angkatan Laut</option>
                                <option value="Letda Darat">Letda - Letnan Dua TNI Angkatan Darat</option>
                                <option value="Letda Udara">Letda - Letnan Dua TNI Angkatan Udara</option>
                                <option value="Pelda Udara">Pelda - Pembantu Letnan Dua TNI Angkatan Udara</option>
                                <option value="Pelda Darat">Pelda - Pembantu Letnan Dua TNI Angkatan Darat</option>
                                <option value="Peltu Darat">Peltu - Pembantu Letnan Satu TNI Angkatan Darat</option>
                                <option value="Serma Darat">Serma - Sersan Mayor TNI Angkatan Darat</option>
                                <option value="Peltu Udara">Peltu - Pembantu Letnan Satu TNI Angkatan Udara</option>
                                <option value="Serma Udara">Serma - Sersan Mayor TNI Angkatan Udara</option>
                                <option value="Pelda Laut">Pelda - Pembantu Letnan Dua TNI Angkatan Laut</option>
                                <option value="Peltu Laut">Peltu - Pembantu Letnan Satu TNI Angkatan Laut</option>
                                <option value="Serma Laut">Serma - Sersan Mayor TNI Angkatan Laut</option>
                                <option value="Serka Udara">Serka - Sersan Kepala TNI Angkatan Udara</option>
                                <option value="Serka Darat">Serka - Sersan Kepala TNI Angkatan Darat</option>
                                <option value="Serka Laut">Serka - Sersan Kepala TNI Angkatan Laut</option>
                                <option value="Sertu Laut">Sertu - Sersan Satu TNI Angkatan Laut</option>
                                <option value="Sertu Udara">Sertu - Sersan Satu TNI Angkatan Udara</option>
                                <option value="Sertu Darat">Sertu - Sersan Satu TNI Angkatan Darat</option>
                                <option value="Serda Udara">Serda - Sersan Dua TNI Angkatan Udara</option>
                                <option value="Serda Laut">Serda - Sersan Dua TNI Angkatan Laut</option>
                                <option value="Serda Darat">Serda - Sersan Dua TNI Angkatan Darat</option>
                                <option value="Kopda Udara">Kopda - Kopral Dua TNI Angkatan Udara</option>
                                <option value="Koptu Udara">Koptu - Kopral Satu TNI Angkatan Udara</option>
                                <option value="Kopka Udara">Kopka - Kopral Kepala TNI Angkatan Udara</option>
                                <option value="Kopda Laut">Kopda - Kopral Dua TNI Angkatan Laut</option>
                                <option value="Kopda Darat">Kopda - Kopral Dua TNI Angkatan Darat</option>
                                <option value="Koptu Darat">Koptu - Kopral Satu TNI Angkatan Darat</option>
                                <option value="Kopka Laut">Kopka - Kopral Kepala TNI Angkatan Laut</option>
                                <option value="Koptu Laut">Koptu - Kopral Satu TNI Angkatan Laut</option>
                                <option value="Kopka Darat">Kopka - Kopral Kepala TNI Angkatan Darat</option>
                                <option value="Praka Darat">Praka - Prajurit Kepala TNI Angkatan Darat</option>
                                <option value="Praka Udara">Praka - Prajurit Kepala TNI Angkatan Udara</option>
                                <option value="Kelasi Kepala">Kelasi Kepala - Kelasi Kepala TNI Angkatan Laut</option>
                                <option value="Kelasi Satu">Kelasi Satu - Kelasi Satu TNI Angkatan Laut</option>
                                <option value="Pratu Udara">Pratu - Prajurit Satu TNI Angkatan Udara</option>
                                <option value="Pratu Darat">Pratu - Prajurit Satu TNI Angkatan Darat</option>
                                <option value="Prada Udara">Prada - Prajurit Dua TNI Angkatan Udara</option>
                                <option value="Prada Darat">Prada - Prajurit Dua TNI Angkatan Darat</option>
                                <option value="Kelasi Dua">Kelasi Dua - Kelasi Dua TNI Angkatan Laut</option>
                                <option value="Jenderal Pol">Jenderal Pol - Jenderal Polisi Polri</option>
                                <option value="Komjen Pol">Komjen Pol - Komisaris Jenderal Polisi Polri</option>
                                <option value="Irjen Pol">Irjen Pol - Inspektur Jenderal Polisi Polri</option>
                                <option value="Brigjen Pol">Brigjen Pol - Brigadir Jenderal Polisi Polri</option>
                                <option value="Kombes Pol">Kombes Pol - Komisaris Besar Polisi Polri</option>
                                <option value="AKBP">AKBP - Ajun Komisaris Besar Polisi Polri</option>
                                <option value="Kompol">Kompol - Komisaris Polisi Polri</option>
                                <option value="AKP">AKP - Ajun Komisaris Polisi Polri</option>
                                <option value="Iptu">Iptu - Inspektur Polisi Satu Polri</option>
                                <option value="Ipda">Ipda - Inspektur Polisi Dua Polri</option>
                                <option value="Aiptu">Aiptu - Ajun Komisaris Polisi Satu Polri</option>
                                <option value="Aipda">Aipda - Ajun Komisaris Polisi Dua Polri</option>
                                <option value="Bripka">Bripka - Brigadir Polisi Kepala Polri</option>
                                <option value="Brigpol">Brigpol - Brigadir Polisi Polri</option>
                                <option value="Briptu">Briptu - Brigadir Polisi Satu Polri</option>
                                <option value="Bripda">Bripda - Brigadir Polisi Dua Polri</option>
                                <option value="Abripda">Abripda - Ajun Brigadir Polisi Dua Polri</option>
                                <option value="Abriptu">Abriptu - Ajun Brigadir Polisi Satu Polri</option>
                                <option value="Abrippol">Abrippol - Ajun Brigadir Polisi Polri</option>
                                <option value="Bharaka">Bharaka - Bhayangkara Kepala Polri</option>
                                <option value="Bharatu">Bharatu - Bhayangkara Satu Polri</option>
                                <option value="Bharada">Bharada - Bhayangkara Dua Polri</option>
                                <option value="XVII">XVII - XVII </option>
                                <option value="XVI">XVI - XVI </option>
                                <option value="XV">XV - XV </option>
                                <option value="XIV">XIV - XIV </option>
                                <option value="XIII">XIII - XIII </option>
                                <option value="XII">XII - XII </option>
                                <option value="XI">XI - XI </option>
                                <option value="X">X - X </option>
                                <option value="IX">IX - IX </option>
                                <option value="VIII">VIII - VIII </option>
                                <option value="VII">VII - VII </option>
                                <option value="VI">VI - VI </option>
                                <option value="V">V - V </option>
                                <option value="IV">IV - IV </option>
                                <option value="III">III - III </option>
                                <option value="II">II - II </option>
                                <option value="I">I - I </option>
                            </select>
                        </div>
                    </div>

                    <!-- Baris 4: Data Mutasi -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-exchange-alt mr-1" style="color: #d35400;"></i>TMT Mutasi</label>
                            <input type="text" name="tmt_mutasi" class="form-control datepicker">
                        </div>
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-balance-scale mr-1" style="color: #c0392b;"></i>Pengadilan *</label>
                            <select name="id_pengadilan" class="form-control select2-modal" id="selectPengadilan"
                                required>
                                <option value="">Pilih Pengadilan</option>
                            </select>
                        </div>
                    </div>

                    <!-- Baris 5: Foto & Organisasi -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-camera mr-1" style="color: #7f8c8d;"></i>Foto</label>
                            <input type="file" name="foto" id="inputFoto" class="form-control" accept="image/*">
                            <img id="previewFoto" src="" alt="Preview Foto"
                                style="max-width:100px;max-height:120px;display:none;margin-top:8px;">
                        </div>
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-building mr-1" style="color: #16a085;"></i>Asal Organisasi</label>
                            <input type="text" name="asal_organisasi" class="form-control">
                        </div>
                    </div>

                    <!-- Baris 6: Data SK -->
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-file-contract mr-1" style="color: #2980b9;"></i>Kepres</label>
                            <input type="text" name="kepres" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-calendar-day mr-1" style="color: #e74c3c;"></i>Tanggal
                                Kepres</label>
                            <input type="text" name="tgl_kepres" class="form-control datepicker">
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-file-signature mr-1" style="color: #27ae60;"></i>SK Dirjen</label>
                            <input type="text" name="sk_dirjen" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-calendar-week mr-1" style="color: #f39c12;"></i>Tanggal SK
                                Dirjen</label>
                            <input type="text" name="tgl_sk_dirjen" class="form-control datepicker">
                        </div>
                    </div>

                    <!-- Baris 7: Masa Jabatan -->
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-clock mr-1" style="color: #2c3e50;"></i>Masa Jabatan</label>
                            <select name="masa_jabatan" id="selectMasaJabatan" class="form-control">
                                <option value="">Pilih Masa Jabatan</option>
                                <option value="1">1 Kali</option>
                                <option value="2">2 Kali</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-sync-alt mr-1" style="color: #3498db;"></i>Status
                                Perpanjangan</label>
                            <input type="text" name="status_perpanjangan" class="form-control" disabled>
                        </div>
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-hourglass-end mr-1" style="color: #e67e22;"></i>Tanggal
                                Habis</label>
                            <input type="text" name="tanggal_habis" class="form-control datepicker" disabled>
                        </div>
                    </div>

                    <!-- Baris 8: Data TMT -->
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-calendar mr-1" style="color: #9b59b6;"></i>Tanggal
                                Pelantikan</label>
                            <input type="text" name="tgl_pelantikan" class="form-control datepicker">
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-calendar mr-1" style="color: #1abc9c;"></i>TMT HK</label>
                            <input type="text" name="tmt_hk" class="form-control datepicker">
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-user-tie mr-1" style="color: #c0392b;"></i>TMT Jabatan</label>
                            <input type="text" name="tmt_jabatan" class="form-control datepicker">
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-calendar mr-1" style="color: #9b59b6;"></i>TMT PN</label>
                            <input type="text" name="tmt_pn" class="form-control datepicker">
                        </div>
                    </div>

                    <!-- Baris 9: Data SK Perpanjangan -->
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-file-alt mr-1" style="color: #34495e;"></i>Tanggal
                                Perpanjangan <small
                                    style="font-style: italic; font-weight: bold;">prediksi</small></label>
                            <input type="text" name="tgl_perpanjangan_pred" class="form-control datepicker" disabled>
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-file-alt mr-1" style="color: #34495e;"></i>TMT
                                Perpanjangan</label>
                            <input type="text" name="tgl_perpanjangan" class="form-control datepicker">
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-file-alt mr-1" style="color: #34495e;"></i>SK Perpanjangan</label>
                            <input type="text" name="sk_perpanjangan" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-calendar mr-1" style="color: #d35400;"></i>Tanggal SK
                                Perpanjangan</label>
                            <input type="text" name="tgl_sk_perpanjangan" class="form-control datepicker">
                        </div>
                    </div>

                    <!-- Baris 10: Data Tambahan -->
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-image mr-1" style="color: #7f8c8d;"></i>Sumber Foto</label>
                            <input type="text" name="sumber_foto" class="form-control" disabled value="Lokal">
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

<!-- Modal edit hakim -->
<div class="modal fade" id="modalEditHakim" tabindex="-1" aria-labelledby="modalEditHakimLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form id="formEditHakim" enctype="multipart/form-data">
                <div class="modal-header bg-warning text-dark">
                    <h5 class="modal-title" id="modalEditHakimLabel">
                        <i class="fas fa-pen mr-2"></i>Edit Data Hakim
                    </h5>
                    <button type="button" class="close text-dark" data-dismiss="modal" aria-label="Tutup">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="max-height: 70vh; overflow-y: auto;">
                    <p style="font-style: italic;">*Perbarui data sesuai dengan data hakim yang sebenarnya</p>
                    <br>
                    <br>
                    <input type="hidden" name="id" id="edit_id">

                    <!-- Baris 1: Data Pribadi -->
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-user mr-1" style="color: #3498db;"></i>Nama Lengkap *</label>
                            <input type="text" name="nama" id="edit_nama" class="form-control" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-id-card mr-1" style="color: #e74c3c;"></i>NIP/NRP</label>
                            <input type="text" name="nip_nrp" id="edit_nip_nrp" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-address-card mr-1" style="color: #9b59b6;"></i>NIK</label>
                            <input type="text" name="nik" id="edit_nik" class="form-control">
                        </div>
                    </div>

                    <!-- Baris 2: Data Kelahiran -->
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-map-marker-alt mr-1" style="color: #e67e22;"></i>Tempat
                                Lahir</label>
                            <input type="text" name="tempat_lahir" id="edit_tempat_lahir" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-calendar-alt mr-1" style="color: #2ecc71;"></i>Tanggal Lahir</label>
                            <input type="text" name="tanggal_lahir" id="edit_tanggal_lahir"
                                class="form-control datepicker">
                        </div>
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-venus-mars mr-1" style="color: #e84393;"></i>Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="edit_jenis_kelamin" class="form-control select2-modal">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <!-- Baris 3: Data Pendidikan & Jabatan -->
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-graduation-cap mr-1" style="color: #f39c12;"></i>Pendidikan
                                Terakhir</label>
                            <input type="text" name="pendidikan_terakhir" id="edit_pendidikan_terakhir"
                                class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-briefcase mr-1" style="color: #34495e;"></i>Jabatan</label>
                            <input type="text" name="jabatan" id="edit_jabatan" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-calendar-check mr-1" style="color: #27ae60;"></i>TMT
                                Golongan</label>
                            <input type="text" name="tmt_gol" id="edit_tmt_gol" class="form-control datepicker">
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-layer-group mr-1" style="color: #8e44ad;"></i>Golongan</label>
                            <select name="golongan" class="form-control select2-modal" id="selecteditGolongan">
                                <option value="87">- - Tanpa Golongan </option>
                                <option value="IV/e">IV/e - Pembina Utama </option>
                                <option value="IV/d">IV/d - Pembina Utama Madya </option>
                                <option value="IV/c">IV/c - Pembina Utama Muda </option>
                                <option value="IV/b">IV/b - Pembina Tingkat I </option>
                                <option value="IV/a">IV/a - Pembina </option>
                                <option value="III/d">III/d - Penata Tingkat I </option>
                                <option value="III/c">III/c - Penata </option>
                                <option value="III/b">III/b - Penata Muda Tingkat I </option>
                                <option value="III/a">III/a - Penata Muda </option>
                                <option value="II/d">II/d - Pengatur Tingkat I </option>
                                <option value="II/c">II/c - Pengatur </option>
                                <option value="II/b">II/b - Pengatur Muda Tingkat I </option>
                                <option value="II/a">II/a - Pengatur Muda </option>
                                <option value="I/d">I/d - Juru Tingkat I </option>
                                <option value="I/c">I/c - Juru </option>
                                <option value="I/b">I/b - Juru Muda Tingkat I </option>
                                <option value="I/a">I/a - Juru Muda </option>
                                <option value="Marsdya">Marsdya - Marsekal Madya TNI Angkatan Udara</option>
                                <option value="Marsekal">Marsekal - Marsekal TNI Angkatan Udara</option>
                                <option value="Marsekal Besar">Marsekal Besar - Marsekal Besar TNI Angkatan Udara
                                </option>
                                <option value="Laksamana Besar">Laksamana Besar - Laksamana Besar TNI Angkatan Laut
                                </option>
                                <option value="Laksamana">Laksamana - Laksamana TNI Angkatan Laut</option>
                                <option value="Laksdya">Laksdya - Laksamana Madya TNI Angkatan Laut</option>
                                <option value="Letjen">Letjen - Letnan Jenderal TNI Angkatan Darat</option>
                                <option value="Jend.">Jend. - Jenderal TNI Angkatan Darat</option>
                                <option value="Jenderal Besar">Jenderal Besar - Jenderal Besar TNI Angkatan Darat
                                </option>
                                <option value="Marsda">Marsda - Marsekal Muda TNI Angkatan Udara</option>
                                <option value="Mayjen">Mayjen - Mayor Jenderal TNI Angkatan Darat</option>
                                <option value="Laksda">Laksda - Laksamana Muda TNI Angkatan Laut</option>
                                <option value="Marsma">Marsma - Marsekal Pertama TNI Angkatan Udara</option>
                                <option value="Brigjen">Brigjen - Brigadir Jenderal TNI Angkatan Darat</option>
                                <option value="Laksma">Laksma - Laksamana Pertama TNI Angkatan Laut</option>
                                <option value="Kol. Laut">Kol. - Kolonel TNI Angkatan Laut</option>
                                <option value="Kol. Udara">Kol. - Kolonel TNI Angkatan Udara</option>
                                <option value="Kol. Darat">Kol. - Kolonel TNI Angkatan Darat</option>
                                <option value="Letkol Laut">Letkol - Letnan Kolonel TNI Angkatan Laut</option>
                                <option value="Mayor Laut">Mayor Laut - Mayor Laut TNI Angkatan Laut</option>
                                <option value="Letkol Darat">Letkol - Letnan Kolonel TNI Angkatan Darat</option>
                                <option value="May. Darat">May. - Mayor TNI Angkatan Darat</option>
                                <option value="May. Udara">May. - Mayor TNI Angkatan Udara</option>
                                <option value="Letkol Udara">Letkol - Letnan Kolonel TNI Angkatan Udara</option>
                                <option value="Kapt. Laut">Kapt. - Kapten TNI Angkatan Laut</option>
                                <option value="Kapt. Udara">Kapt. - Kapten TNI Angkatan Udara</option>
                                <option value="Kapt. Darat">Kapt. - Kapten TNI Angkatan Darat</option>
                                <option value="Lettu Darat">Lettu - Letnan Satu TNI Angkatan Darat</option>
                                <option value="Lettu Udara">Lettu - Letnan Satu TNI Angkatan Udara</option>
                                <option value="Lettu Laut">Lettu - Letnan Satu TNI Angkatan Laut</option>
                                <option value="Letda Laut">Letda - Letnan Dua TNI Angkatan Laut</option>
                                <option value="Letda Darat">Letda - Letnan Dua TNI Angkatan Darat</option>
                                <option value="Letda Udara">Letda - Letnan Dua TNI Angkatan Udara</option>
                                <option value="Pelda Udara">Pelda - Pembantu Letnan Dua TNI Angkatan Udara</option>
                                <option value="Pelda Darat">Pelda - Pembantu Letnan Dua TNI Angkatan Darat</option>
                                <option value="Peltu Darat">Peltu - Pembantu Letnan Satu TNI Angkatan Darat</option>
                                <option value="Serma Darat">Serma - Sersan Mayor TNI Angkatan Darat</option>
                                <option value="Peltu Udara">Peltu - Pembantu Letnan Satu TNI Angkatan Udara</option>
                                <option value="Serma Udara">Serma - Sersan Mayor TNI Angkatan Udara</option>
                                <option value="Pelda Laut">Pelda - Pembantu Letnan Dua TNI Angkatan Laut</option>
                                <option value="Peltu Laut">Peltu - Pembantu Letnan Satu TNI Angkatan Laut</option>
                                <option value="Serma Laut">Serma - Sersan Mayor TNI Angkatan Laut</option>
                                <option value="Serka Udara">Serka - Sersan Kepala TNI Angkatan Udara</option>
                                <option value="Serka Darat">Serka - Sersan Kepala TNI Angkatan Darat</option>
                                <option value="Serka Laut">Serka - Sersan Kepala TNI Angkatan Laut</option>
                                <option value="Sertu Laut">Sertu - Sersan Satu TNI Angkatan Laut</option>
                                <option value="Sertu Udara">Sertu - Sersan Satu TNI Angkatan Udara</option>
                                <option value="Sertu Darat">Sertu - Sersan Satu TNI Angkatan Darat</option>
                                <option value="Serda Udara">Serda - Sersan Dua TNI Angkatan Udara</option>
                                <option value="Serda Laut">Serda - Sersan Dua TNI Angkatan Laut</option>
                                <option value="Serda Darat">Serda - Sersan Dua TNI Angkatan Darat</option>
                                <option value="Kopda Udara">Kopda - Kopral Dua TNI Angkatan Udara</option>
                                <option value="Koptu Udara">Koptu - Kopral Satu TNI Angkatan Udara</option>
                                <option value="Kopka Udara">Kopka - Kopral Kepala TNI Angkatan Udara</option>
                                <option value="Kopda Laut">Kopda - Kopral Dua TNI Angkatan Laut</option>
                                <option value="Kopda Darat">Kopda - Kopral Dua TNI Angkatan Darat</option>
                                <option value="Koptu Darat">Koptu - Kopral Satu TNI Angkatan Darat</option>
                                <option value="Kopka Laut">Kopka - Kopral Kepala TNI Angkatan Laut</option>
                                <option value="Koptu Laut">Koptu - Kopral Satu TNI Angkatan Laut</option>
                                <option value="Kopka Darat">Kopka - Kopral Kepala TNI Angkatan Darat</option>
                                <option value="Praka Darat">Praka - Prajurit Kepala TNI Angkatan Darat</option>
                                <option value="Praka Udara">Praka - Prajurit Kepala TNI Angkatan Udara</option>
                                <option value="Kelasi Kepala">Kelasi Kepala - Kelasi Kepala TNI Angkatan Laut</option>
                                <option value="Kelasi Satu">Kelasi Satu - Kelasi Satu TNI Angkatan Laut</option>
                                <option value="Pratu Udara">Pratu - Prajurit Satu TNI Angkatan Udara</option>
                                <option value="Pratu Darat">Pratu - Prajurit Satu TNI Angkatan Darat</option>
                                <option value="Prada Udara">Prada - Prajurit Dua TNI Angkatan Udara</option>
                                <option value="Prada Darat">Prada - Prajurit Dua TNI Angkatan Darat</option>
                                <option value="Kelasi Dua">Kelasi Dua - Kelasi Dua TNI Angkatan Laut</option>
                                <option value="Jenderal Pol">Jenderal Pol - Jenderal Polisi Polri</option>
                                <option value="Komjen Pol">Komjen Pol - Komisaris Jenderal Polisi Polri</option>
                                <option value="Irjen Pol">Irjen Pol - Inspektur Jenderal Polisi Polri</option>
                                <option value="Brigjen Pol">Brigjen Pol - Brigadir Jenderal Polisi Polri</option>
                                <option value="Kombes Pol">Kombes Pol - Komisaris Besar Polisi Polri</option>
                                <option value="AKBP">AKBP - Ajun Komisaris Besar Polisi Polri</option>
                                <option value="Kompol">Kompol - Komisaris Polisi Polri</option>
                                <option value="AKP">AKP - Ajun Komisaris Polisi Polri</option>
                                <option value="Iptu">Iptu - Inspektur Polisi Satu Polri</option>
                                <option value="Ipda">Ipda - Inspektur Polisi Dua Polri</option>
                                <option value="Aiptu">Aiptu - Ajun Komisaris Polisi Satu Polri</option>
                                <option value="Aipda">Aipda - Ajun Komisaris Polisi Dua Polri</option>
                                <option value="Bripka">Bripka - Brigadir Polisi Kepala Polri</option>
                                <option value="Brigpol">Brigpol - Brigadir Polisi Polri</option>
                                <option value="Briptu">Briptu - Brigadir Polisi Satu Polri</option>
                                <option value="Bripda">Bripda - Brigadir Polisi Dua Polri</option>
                                <option value="Abripda">Abripda - Ajun Brigadir Polisi Dua Polri</option>
                                <option value="Abriptu">Abriptu - Ajun Brigadir Polisi Satu Polri</option>
                                <option value="Abrippol">Abrippol - Ajun Brigadir Polisi Polri</option>
                                <option value="Bharaka">Bharaka - Bhayangkara Kepala Polri</option>
                                <option value="Bharatu">Bharatu - Bhayangkara Satu Polri</option>
                                <option value="Bharada">Bharada - Bhayangkara Dua Polri</option>
                                <option value="XVII">XVII - XVII </option>
                                <option value="XVI">XVI - XVI </option>
                                <option value="XV">XV - XV </option>
                                <option value="XIV">XIV - XIV </option>
                                <option value="XIII">XIII - XIII </option>
                                <option value="XII">XII - XII </option>
                                <option value="XI">XI - XI </option>
                                <option value="X">X - X </option>
                                <option value="IX">IX - IX </option>
                                <option value="VIII">VIII - VIII </option>
                                <option value="VII">VII - VII </option>
                                <option value="VI">VI - VI </option>
                                <option value="V">V - V </option>
                                <option value="IV">IV - IV </option>
                                <option value="III">III - III </option>
                                <option value="II">II - II </option>
                                <option value="I">I - I </option>
                            </select>
                        </div>
                    </div>

                    <!-- Baris 4: Data Mutasi -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-exchange-alt mr-1" style="color: #d35400;"></i>TMT Mutasi</label>
                            <input type="text" name="tmt_mutasi" id="edit_tmt_mutasi" class="form-control datepicker">
                        </div>
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-balance-scale mr-1" style="color: #c0392b;"></i>Pengadilan *</label>
                            <select name="id_pengadilan" id="edit_selectPengadilan" class="form-control select2-modal"
                                required>
                                <option value="">Pilih Pengadilan</option>
                            </select>
                        </div>
                    </div>

                    <!-- Baris 5: Foto & Organisasi -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-camera mr-1" style="color: #7f8c8d;"></i>Foto</label>
                            <input type="file" name="foto" id="edit_inputFoto" class="form-control" accept="image/*">
                            <img id="edit_previewFoto" src="" alt="Preview Foto"
                                style="max-width:100px;max-height:120px;display:none;margin-top:8px;">
                        </div>
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-building mr-1" style="color: #16a085;"></i>Asal Organisasi</label>
                            <input type="text" name="asal_organisasi" id="edit_asal_organisasi" class="form-control">
                        </div>
                    </div>

                    <!-- Baris 6: Data SK -->
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-file-contract mr-1" style="color: #2980b9;"></i>Kepres</label>
                            <input type="text" name="kepres" id="edit_kepres" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-calendar-day mr-1" style="color: #e74c3c;"></i>Tanggal
                                Kepres</label>
                            <input type="text" name="tgl_kepres" id="edit_tgl_kepres" class="form-control datepicker">
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-file-signature mr-1" style="color: #27ae60;"></i>SK Dirjen</label>
                            <input type="text" name="sk_dirjen" id="edit_sk_dirjen" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-calendar-week mr-1" style="color: #f39c12;"></i>Tanggal SK
                                Dirjen</label>
                            <input type="text" name="tgl_sk_dirjen" id="edit_tgl_sk_dirjen"
                                class="form-control datepicker">
                        </div>
                    </div>

                    <!-- Baris 7: Masa Jabatan -->
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-clock mr-1" style="color: #2c3e50;"></i>Masa Jabatan</label>
                            <select name="masa_jabatan" id="edit_masa_jabatan" class="form-control">
                                <option value="">Pilih Masa Jabatan</option>
                                <option value="1">1 Kali</option>
                                <option value="2">2 Kali</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-sync-alt mr-1" style="color: #3498db;"></i>Status
                                Perpanjangan</label>
                            <input type="text" name="status_perpanjangan" id="edit_status_perpanjangan"
                                class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-hourglass-end mr-1" style="color: #e67e22;"></i>Tanggal
                                Habis</label>
                            <input type="text" name="tanggal_habis" id="edit_tanggal_habis"
                                class="form-control datepicker">
                        </div>
                    </div>

                    <!-- Baris 8: Data TMT -->
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-calendar mr-1" style="color: #9b59b6;"></i>Tanggal
                                Pelantikan</label>
                            <input type="text" name="tgl_pelantikan" id="edit_tgl_pelantikan"
                                class="form-control datepicker">
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-calendar mr-1" style="color: #1abc9c;"></i>TMT HK</label>
                            <input type="text" name="tmt_hk" id="edit_tmt_hk" class="form-control datepicker">
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-user-tie mr-1" style="color: #c0392b;"></i>TMT Jabatan</label>
                            <input type="text" name="tmt_jabatan" id="edit_tmt_jabatan" class="form-control datepicker">
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-calendar mr-1" style="color: #9b59b6;"></i>TMT PN</label>
                            <input type="text" name="tmt_pn" id="edit_tmt_pn" class="form-control datepicker">
                        </div>
                    </div>

                    <!-- Baris 9: Data SK Perpanjangan -->
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-file-alt mr-1" style="color: #34495e;"></i>Tanggal
                                Perpanjangan <small style="font-style: italic;">prediksi</small></label>
                            <input type="text" name="tgl_perpanjangan_pred" id="edit_tgl_perpanjangan_pred"
                                class="form-control datepicker" disabled>
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-file-alt mr-1" style="color: #34495e;"></i>TMT
                                Perpanjangan</label>
                            <input type="text" name="tgl_perpanjangan" id="edit_tgl_perpanjangan"
                                class="form-control datepicker">
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-file-alt mr-1" style="color: #34495e;"></i>SK Perpanjangan</label>
                            <input type="text" name="sk_perpanjangan" id="edit_sk_perpanjangan" class="form-control">
                        </div>
                        <div class="form-group col-md-3">
                            <label><i class="fas fa-calendar mr-1" style="color: #d35400;"></i>Tanggal SK
                                Perpanjangan</label>
                            <input type="text" name="tgl_sk_perpanjangan" id="edit_tgl_sk_perpanjangan"
                                class="form-control datepicker">
                        </div>
                    </div>

                    <!-- Baris 10: Data Tambahan -->
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label><i class="fas fa-image mr-1" style="color: #7f8c8d;"></i>Sumber Foto</label>
                            <input disabled type="text" name="sumber_foto" id="edit_sumber_foto" class="form-control">
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

<!-- Modal Usulan -->
<div class="modal fade" id="modalUsulan" tabindex="-1" aria-labelledby="modalUsulanLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form id="formUsulan" enctype="multipart/form-data">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="modalUsulanLabel">
                        <i class="fas fa-lightbulb mr-2"></i>Buat Usulan Hakim
                    </h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Tutup">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="max-height: 60vh; overflow-y: auto;">
                    <input type="hidden" name="id_pegawai" id="usulan_id_pegawai">

                    <!-- Info Hakim -->
                    <div class="alert alert-info">
                        <h6><i class="fas fa-info-circle"></i> Informasi Hakim</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Nama:</strong> <span id="usulan_nama_hakim">-</span>
                            </div>
                            <div class="col-md-6">
                                <strong>NIP/NRP:</strong> <span id="usulan_nip_hakim">-</span>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <strong>Pengadilan Saat Ini:</strong> <span id="usulan_pengadilan_sekarang">-</span>
                            </div>
                            <div class="col-md-6">
                                <strong>Jabatan:</strong> <span id="usulan_jabatan">-</span>
                            </div>
                        </div>
                    </div>

                    <!-- Form Usulan -->
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label><i class="fas fa-balance-scale mr-1" style="color: #c0392b;"></i>Pengadilan Usulan
                                *</label>
                            <select name="id_pengadilan_usulan" id="selectPengadilanUsulan"
                                class="form-control select2-modal" required>
                                <option value="">Pilih Pengadilan Usulan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-file-alt mr-1" style="color: #2980b9;"></i>Nomor Surat *</label>
                            <input type="text" name="nomor_surat" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-calendar-day mr-1" style="color: #e74c3c;"></i>Tanggal Surat
                                *</label>
                            <input type="text" name="tanggal_surat" class="form-control datepicker" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label><i class="fas fa-file-upload mr-1" style="color: #27ae60;"></i>Berkas Usulan</label>
                            <input type="file" name="berkas" id="inputBerkas" class="form-control"
                                accept=".pdf,.doc,.docx,.jpg,.jpeg,.png">
                            <small class="form-text text-muted">Format: PDF, DOC, DOCX, JPG, PNG (Maks. 5MB)</small>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label><i class="fas fa-sticky-note mr-1" style="color: #f39c12;"></i>Keterangan
                                Usulan</label>
                            <textarea name="keterangan_usulan" class="form-control" rows="3"
                                placeholder="Tambahkan keterangan Usulan jika diperlukan..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-paper-plane mr-1"></i>Kirim Usulan
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <i class="fas fa-times mr-1"></i>Batal
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Mutasi -->
<div class="modal fade" id="modalMutasi" tabindex="-1" aria-labelledby="modalMutasiLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <form id="formMutasi">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title" id="modalMutasiLabel">
                        <i class="fas fa-exchange-alt mr-2"></i>Mutasi Hakim
                    </h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Tutup">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="max-height: 60vh; overflow-y: auto;">
                    <input type="hidden" name="id_pegawai" id="mutasi_id_pegawai">

                    <!-- Info Hakim -->
                    <div class="alert alert-info">
                        <h6><i class="fas fa-info-circle"></i> Informasi Hakim</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <strong>Nama:</strong> <span id="mutasi_nama_hakim">-</span>
                            </div>
                            <div class="col-md-6">
                                <strong>NIP/NRP:</strong> <span id="mutasi_nip_hakim">-</span>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <strong>Pengadilan Saat Ini:</strong> <span id="mutasi_pengadilan_sekarang">-</span>
                            </div>
                            <div class="col-md-6">
                                <strong>Jabatan:</strong> <span id="mutasi_jabatan">-</span>
                            </div>
                        </div>
                    </div>

                    <!-- Form Mutasi -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-calendar-alt mr-1" style="color: #e74c3c;"></i>Periode Mutasi
                                *</label>
                            <input type="text" name="periode" class="form-control" required
                                placeholder="Contoh: TPM 2024 Semester 1">
                        </div>
                        <div class="form-group col-md-6">
                            <label><i class="fas fa-calendar-day mr-1" style="color: #3498db;"></i>Tanggal TPM *</label>
                            <input type="text" name="tanggal_tpm" class="form-control datepicker" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label><i class="fas fa-balance-scale mr-1" style="color: #27ae60;"></i>Pengadilan Tujuan
                                *</label>
                            <select name="id_pengadilan_hasil_tpm" id="selectPengadilanTujuan"
                                class="form-control select2-modal" required>
                                <option value="">Pilih Pengadilan Tujuan</option>
                            </select>
                        </div>
                    </div>

                    <!-- Riwayat Mutasi -->
                    <div class="mt-4">
                        <h6><i class="fas fa-history mr-1"></i> Riwayat Mutasi</h6>
                        <div id="riwayat-mutasi" class="table-responsive">
                            <table class="table table-sm table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Periode</th>
                                        <th>Tanggal TPM</th>
                                        <th>Dari</th>
                                        <th>Ke</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody-riwayat-mutasi">
                                    <!-- Data riwayat akan diisi via AJAX -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">
                        <i class="fas fa-exchange-alt mr-1"></i>Proses Mutasi
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <i class="fas fa-times mr-1"></i>Batal
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $this->load->view('./partials/bottom'); ?>

<style>
    /* Custom styling untuk modal yang scrollable */
    .modal-dialog-scrollable .modal-body {
        padding: 15px;
    }

    /* Styling untuk ikon yang berwarna */
    .form-group label i {
        width: 16px;
        text-align: center;
    }

    /* Hover effect untuk form groups */
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
</style>

<script>
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

    // Fungsi untuk inisialisasi Select2 pada modal
    function initSelect2Modal() {
        try {
            $('#selectJenisKelamin').select2({
                theme: 'bootstrap4',
                width: '100%',
                placeholder: 'Pilih jenis kelamin',
                dropdownParent: $('#modalTambahHakim'),
                minimumResultsForSearch: 0
            });

            $('#selectGolongan').select2({
                theme: 'bootstrap4',
                width: '100%',
                placeholder: 'Pilih jenis Golongan',
                dropdownParent: $('#modalTambahHakim'),
                minimumResultsForSearch: 0
            });

            $('#selectMasaJabatan').select2({
                theme: 'bootstrap4',
                width: '100%',
                placeholder: 'Pilih Masa Jabatan',
                dropdownParent: $('#modalTambahHakim'),
                minimumResultsForSearch: 0
            });

            $('#selectPengadilan').select2({
                theme: 'bootstrap4',
                width: '100%',
                placeholder: 'Pilih pengadilan',
                dropdownParent: $('#modalTambahHakim'),
                minimumResultsForSearch: 0
            });

            console.log('Select2 modal berhasil diinisialisasi');
        } catch (error) {
            console.warn('Select2 modal tidak tersedia:', error);
        }
    }

    // Fungsi untuk inisialisasi Select2 pada modal usulan
    function initSelect2Usulan() {
        try {
            $('#selectPengadilanUsulan').select2({
                theme: 'bootstrap4',
                width: '100%',
                placeholder: 'Pilih pengadilan usulan',
                dropdownParent: $('#modalUsulan'),
                minimumResultsForSearch: 0
            });
            console.log('Select2 usulan berhasil diinisialisasi');
        } catch (error) {
            console.warn('Select2 usulan tidak tersedia:', error);
        }
    }

    // Event handler untuk tombol usulan
    $(document).on('click', '.btn-usulan', function () {
        var id = $(this).data('id');

        // Ambil data hakim by id
        $.getJSON("<?php echo site_url('admin/adhoc/perikanan/get_data_by_id/'); ?>" + id, function (data) {
            // Isi informasi hakim
            $('#usulan_id_pegawai').val(data.id);
            $('#usulan_nama_hakim').text(data.nama || '-');
            $('#usulan_nip_hakim').text(data.nip_nrp || '-');
            $('#usulan_pengadilan_sekarang').text(data.nama_pengadilan || '-');
            $('#usulan_jabatan').text(data.jabatan || '-');

            // Isi select pengadilan usulan
            $.getJSON("<?php echo site_url('admin/adhoc/perikanan/get_pengadilan'); ?>", function (pengadilan) {
                var options = '<option value="">Pilih Pengadilan Usulan</option>';
                $.each(pengadilan, function (i, v) {
                    // Exclude pengadilan saat ini dari pilihan
                    if (v.id != data.id_pengadilan) {
                        options += `<option value="${v.id}">${v.nama_pengadilan}</option>`;
                    }
                });
                $('#selectPengadilanUsulan').html(options);

                $('#modalUsulan').modal('show');

                setTimeout(function () {
                    initSelect2Usulan();
                    initDatepicker(); // Pastikan datepicker berfungsi di modal usulan
                }, 100);
            });
        }).fail(function () {
            showAlert('error', 'Kesalahan', 'Gagal memuat data hakim. Silakan coba lagi.');
        });
    });

    // Event handler untuk modal usulan shown
    $('#modalUsulan').on('shown.bs.modal', function () {
        console.log('Modal usulan ditampilkan, menginisialisasi Select2...');
        initSelect2Usulan();
    });

    // Fungsi untuk inisialisasi Select2 pada modal mutasi
    function initSelect2Mutasi() {
        try {
            $('#selectPengadilanTujuan').select2({
                theme: 'bootstrap4',
                width: '100%',
                placeholder: 'Pilih pengadilan tujuan',
                dropdownParent: $('#modalMutasi'),
                minimumResultsForSearch: 0
            });
            console.log('Select2 mutasi berhasil diinisialisasi');
        } catch (error) {
            console.warn('Select2 mutasi tidak tersedia:', error);
        }
    }

    // Event handler untuk tombol mutasi
    $(document).on('click', '.btn-mutasi', function () {
        var id = $(this).data('id');

        // Ambil data hakim by id
        $.getJSON("<?php echo site_url('admin/adhoc/perikanan/get_data_by_id/'); ?>" + id, function (data) {
            // Isi informasi hakim
            $('#mutasi_id_pegawai').val(data.id);
            $('#mutasi_nama_hakim').text(data.nama || '-');
            $('#mutasi_nip_hakim').text(data.nip_nrp || '-');
            $('#mutasi_pengadilan_sekarang').text(data.nama_pengadilan || '-');
            $('#mutasi_jabatan').text(data.jabatan || '-');

            // Isi select pengadilan tujuan (exclude pengadilan saat ini)
            $.getJSON("<?php echo site_url('admin/adhoc/perikanan/get_pengadilan'); ?>", function (pengadilan) {
                var options = '<option value="">Pilih Pengadilan Tujuan</option>';
                $.each(pengadilan, function (i, v) {
                    // Exclude pengadilan saat ini dari pilihan
                    if (v.id != data.id_pengadilan) {
                        options += `<option value="${v.id}">${v.nama_pengadilan}</option>`;
                    }
                });
                $('#selectPengadilanTujuan').html(options);

                // Load riwayat mutasi
                loadRiwayatMutasi(data.id);

                $('#modalMutasi').modal('show');

                setTimeout(function () {
                    initSelect2Mutasi();
                    initDatepicker(); // Pastikan datepicker berfungsi di modal mutasi
                }, 100);
            });
        }).fail(function () {
            showAlert('error', 'Kesalahan', 'Gagal memuat data hakim. Silakan coba lagi.');
        });
    });

    // Fungsi untuk memuat riwayat mutasi
    function loadRiwayatMutasi(idHakim) {
        $.getJSON("<?php echo site_url('admin/adhoc/perikanan/get_mutasi_by_hakim/'); ?>" + idHakim, function (data) {
            var tbody = $('#tbody-riwayat-mutasi');
            tbody.empty();

            if (data.length === 0) {
                tbody.append('<tr><td colspan="4" class="text-center">Tidak ada riwayat mutasi</td></tr>');
            } else {
                $.each(data, function (i, mutasi) {
                    var row = `<tr>
                    <td>${mutasi.periode || '-'}</td>
                    <td>${formatTanggal(mutasi.tanggal_tpm)}</td>
                    <td>${mutasi.pengadilan_asal || '-'}</td>
                    <td>${mutasi.pengadilan_tujuan || '-'}</td>
                </tr>`;
                    tbody.append(row);
                });
            }
        }).fail(function () {
            $('#tbody-riwayat-mutasi').html('<tr><td colspan="4" class="text-center text-danger">Gagal memuat riwayat mutasi</td></tr>');
        });
    }

    // Event handler untuk modal mutasi shown
    $('#modalMutasi').on('shown.bs.modal', function () {
        console.log('Modal mutasi ditampilkan, menginisialisasi Select2...');
        initSelect2Mutasi();
    });

    // Fungsi untuk inisialisasi Select2 pada halaman utama
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

    // Fungsi untuk inisialisasi Datepicker
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

    // Fungsi untuk validasi masa jabatan dan perhitungan otomatis
    function initMasaJabatanValidation() {
        // Untuk modal tambah
        $('#selectMasaJabatan').on('change', function () {
            validateMasaJabatan('tambah');
            calculateStatusJabatan('tambah');
        });

        $('input[name="tgl_perpanjangan"]').on('change apply.daterangepicker', function () {
            validateMasaJabatan('tambah');
            calculateStatusJabatan('tambah');
        });

        $('input[name="tgl_pelantikan"]').on('change apply.daterangepicker', function () {
            validateMasaJabatan('tambah');
            calculateStatusJabatan('tambah');
        });

        // Untuk modal edit
        $('#edit_masa_jabatan').on('change', function () {
            validateMasaJabatan('edit');
            calculateStatusJabatan('edit');
        });

        $('#edit_tgl_perpanjangan').on('change apply.daterangepicker', function () {
            validateMasaJabatan('edit');
            calculateStatusJabatan('edit');
        });

        $('#edit_tgl_pelantikan').on('change apply.daterangepicker', function () {
            validateMasaJabatan('tambah');
            calculateStatusJabatan('edit');
        });
    }

    // Fungsi validasi masa jabatan
    function validateMasaJabatan(mode) {
        var masaJabatan, tglPerpanjangan, tglPelantikan;

        if (mode === 'tambah') {
            masaJabatan = $('#selectMasaJabatan').val();
            tglPerpanjangan = $('input[name="tgl_perpanjangan"]').val();
            tglPelantikan = $('input[name="tgl_pelantikan"]').val();

        } else {
            masaJabatan = $('#edit_masa_jabatan').val();
            tglPerpanjangan = $('#edit_tgl_perpanjangan').val();
            tglPelantikan = $('#edit_tgl_pelantikan').val();
        }

        // Validasi: masa_jabatan = 2 hanya bisa dipilih jika tgl_perpanjangan ada isinya
        if (masaJabatan === "2" && !tglPerpanjangan) {
            showAlert('info', 'info', 'Masa Jabatan 2 kali hanya dapat dipilih ketika TMT Perpanjangan sudah diisi');

            if (mode === 'tambah') {
                $('#selectMasaJabatan').val("").trigger('change');
            } else {
                $('#edit_masa_jabatan').val("").trigger('change');
            }
            return false;
        } else if (masaJabatan === "1" && !tglPelantikan) {
            showAlert('info', 'info', 'Masa Jabatan 1 kali hanya dapat dipilih ketika Tanggal Pelantikan sudah diisi');
            if (mode === 'tambah') {
                $('#selectMasaJabatan').val("").trigger('change');
            } else {
                $('#edit_masa_jabatan').val("").trigger('change');
            }
            return false;
        } else if (masaJabatan === "2" && !tglPelantikan) {
            showAlert('info', 'info', 'Tanggal Pelantikan harus diisi terlebih dahulu sebelum memilih Masa Jabatan 2 kali');
            if (mode === 'tambah') {
                $('#selectMasaJabatan').val("").trigger('change');
            } else {
                $('#edit_masa_jabatan').val("").trigger('change');
            }
            return false;
        } else if (masaJabatan === "1" && tglPerpanjangan) {
            showAlert('info', 'info', 'Jika sudah perpanjangan, masa jabatan harus diubah ke 2 kali');
            if (mode === 'tambah') {
                $('#selectMasaJabatan').val("").trigger('change');
            } else {
                $('#edit_masa_jabatan').val("").trigger('change');
            }
            return false;
        }
        else {
            // do nothing

        }

        return true;
    }

    // Fungsi untuk menghitung status jabatan dan tanggal habis
    function calculateStatusJabatan(mode) {
        var masaJabatan, tglPelantikan, tglPerpanjangan;
        var statusField, tanggalHabisField;

        if (mode === 'tambah') {
            masaJabatan = $('#selectMasaJabatan').val();
            tglPelantikan = $('input[name="tgl_pelantikan"]').val();
            tglPerpanjangan = $('input[name="tgl_perpanjangan"]').val();
            statusField = $('input[name="status_perpanjangan"]');
            tanggalHabisField = $('input[name="tanggal_habis"]');
        } else {
            masaJabatan = $('#edit_masa_jabatan').val();
            tglPelantikan = $('#edit_tgl_pelantikan').val();
            tglPerpanjangan = $('#edit_tgl_perpanjangan').val();
            statusField = $('#edit_status_perpanjangan');
            tanggalHabisField = $('#edit_tanggal_habis');
        }

        var statusJabatan = '';
        var tanggalHabis = '';

        if (masaJabatan === "1") {
            // Masa jabatan 1 kali: 5 tahun dari tanggal pelantikan
            if (tglPelantikan) {
                var tglHabis = addYears(tglPelantikan, 5);
                tanggalHabis = tglHabis;
                statusJabatan = "Masa Jabatan 1 Kali - Berakhir: " + formatTanggalDisplay(tglHabis);
            }
        } else if (masaJabatan === "2") {
            // Masa jabatan 2 kali: 5 tahun dari tanggal perpanjangan
            if (tglPerpanjangan) {
                var tglHabis = addYears(tglPerpanjangan, 5);
                tanggalHabis = tglHabis;
                statusJabatan = "Masa Jabatan 2 Kali - Berakhir: " + formatTanggalDisplay(tglHabis);
            }
        }

        statusField.val(statusJabatan);
        tanggalHabisField.val(tanggalHabis);
    }

    // Fungsi untuk menambah tahun ke tanggal
    function addYears(dateString, years) {
        var date = new Date(dateString);
        date.setFullYear(date.getFullYear() + years);
        return date.toISOString().split('T')[0]; // Format YYYY-MM-DD
    }

    // Fungsi untuk format tanggal tampilan
    function formatTanggalDisplay(dateString) {
        if (!dateString) return '';
        var date = new Date(dateString);
        var day = date.getDate().toString().padStart(2, '0');
        var month = (date.getMonth() + 1).toString().padStart(2, '0');
        var year = date.getFullYear();
        return day + '-' + month + '-' + year;
    }


    $(document).ready(function () {
        console.log('Document ready, menginisialisasi komponen...');

        // Inisialisasi komponen utama
        initSelect2Main();
        initDatepicker();
        initMasaJabatanValidation();

        // Inisialisasi DataTables
        var table = $('#tabel_hakim_perikanan').DataTable({
            language: {
                url: 'https://cdn.datatables.net/plug-ins/2.3.4/i18n/id.json'
            },
            columnControl: ['order', 'searchDropdown'],
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
                                        // Format khusus untuk kolom NIP
                                        if (column === 3) {
                                            return "'" + data;
                                        }
                                        // Jangan export kolom checkbox dan aksi
                                        if (column === 1 || column === 21) {
                                            return '';
                                        }
                                        // Untuk kolom foto, ambil link gambar
                                        if (column === 4) {
                                            var imgSrc = $(data).attr('data-src') || $(node).find('img').attr('data-src') || $(node).attr('data-src');
                                            return imgSrc ? '=HYPERLINK("' + imgSrc + '", "Klik untuk lihat Foto")' : 'Tidak ada foto';
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
                                columns: ':visible:not(:eq(1)):not(:eq(21))', // Exclude checkbox dan aksi columns
                                format: {
                                    body: function (data, row, column, node) {
                                        // Format khusus untuk kolom NIP
                                        if (column === 3) {
                                            return "'" + data;
                                        }
                                        // Jangan export kolom checkbox dan aksi
                                        if (column === 1 || column === 21) {
                                            return '';
                                        }
                                        // Untuk kolom foto, ambil nama file saja
                                        if (column === 4) {
                                            var imgSrc = $(data).attr('data-src');
                                            return imgSrc ? 'Foto tersedia' : 'Tidak ada foto';
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
            fixedColumns: {
                leftColumns: 1,
                rightColumns: 1
            },
            fixedHeader: true,
            scrollY: "500px",
            ajax: {
                url: "<?php echo site_url('admin/adhoc/perikanan/get_data'); ?>",
                type: "GET",
                dataSrc: ""
            },
            columns: [
                {
                    data: null,
                    render: function (data, type, row, meta) {
                        return meta.row + 1; // Nomor urut
                    },
                    orderable: true,
                    className: 'text-center'
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
                    className: 'text-center'
                },
                { data: "nama" },
                { data: "nip_nrp" },
                {
                    data: "foto",
                    render: function (data, type, row) {
                        let src = "";
                        if (!data) {
                            src = "https://placehold.co/600x400?text=Tidak+Bergambar";
                        } else if (row.sumber_foto === 'sikep') {
                            src = "https://sikep.mahkamahagung.go.id/uploads/foto_pegawai/" + data;
                        } else {
                            src = "<?php echo base_url('uploads/foto_hakim/'); ?>" + data;
                        }
                        return `<img src="${src}" alt="Foto ${row.nama}" width="50" height="60" class="img-popup" data-src="${src}" style="cursor:pointer;">`;
                    }
                },
                { data: "jabatan" },
                { data: "nama_pengadilan" },
                {
                    data: "tmt_mutasi",
                    render: function (data, type, row) {
                        return formatTanggal(data);
                    }
                },
                { data: "kepres" },
                {
                    data: "tgl_kepres",
                    render: function (data, type, row) {
                        return formatTanggal(data);
                    }
                },
                { data: "sk_dirjen" },
                {
                    data: "tgl_sk_dirjen",
                    render: function (data, type, row) {
                        return formatTanggal(data);
                    }
                },
                {
                    data: "tgl_pelantikan",
                    render: function (data, type, row) {
                        return formatTanggal(data);
                    }
                },
                {
                    data: "tgl_perpanjangan_pred",
                    render: function (data, type, row) {
                        return formatTanggal(data);
                    }
                },
                {
                    data: "tgl_perpanjangan",
                    render: function (data, type, row) {
                        return formatTanggal(data);
                    }
                },
                { data: "sk_perpanjangan" },
                {
                    data: "tgl_sk_perpanjangan",
                    render: function (data, type, row) {
                        return formatTanggal(data);
                    }
                },

                {
                    data: "masa_jabatan",
                    render: function (data, type, row) {
                        if (data == 1) {
                            return data + ' Kali';
                        } else if (data == 2) {
                            return data + ' Kali';
                        } else {
                            return '-';
                        }
                    }
                },
                {
                    data: "tanggal_habis",
                    render: function (data, type, row) {
                        return formatTanggal(data);
                    }
                },
                { data: "status_perpanjangan" },
                {
                    data: null,
                    render: function (data, type, row) {
                        // hitung selisih tanggal habis dengan tanggal hari ini
                        if (!row.tanggal_habis || row.tanggal_habis === '0000-00-00') {
                            return '-';
                        }
                        var today = new Date();
                        var habisDate = new Date(row.tanggal_habis);
                        var timeDiff = habisDate - today;
                        var dayDiff = Math.ceil(timeDiff / (1000 * 3600 * 24));
                        // Formatnya Tahun Bulan Hari Jam
                        if (dayDiff < 0) {
                            return 'Sudah Habis';
                        } else {
                            var years = Math.floor(dayDiff / 365);
                            var months = Math.floor((dayDiff % 365) / 30);
                            var days = (dayDiff % 365) % 30;
                            months = months.toString();
                            days = days.toString();
                            if (years.length == 1) {
                                years = '0' + years;
                            }
                            if (months.length == 1) {
                                months = '0' + months;
                            }
                            if (days.length == 1) {
                                days = '0' + days;
                            }
                            return years + ' Tahun ' + months + ' Bulan ' + days + ' Hari';
                        }
                    }
                },
                {
                    data: null,
                    orderable: false,
                    searchable: false,
                    render: function (data, type, row) {
                        return `
        <button class="m-1 btn btn-sm btn-warning btn-edit" data-id="${row.id}" title="Edit Data">
            <i class="fas fa-pen"></i>
        </button>
        <button class="mr-1 mt-1 mb-1 btn btn-sm btn-success btn-usulan" data-id="${row.id}" title="Usulan Mutasi">
            <i class="fas fa-lightbulb"></i>
        </button>
        <button class="mr-1 mt-1 mb-1 btn btn-sm btn-secondary btn-mutasi" data-id="${row.id}" title="Proses Mutasi">
            <i class="fas fa-exchange-alt"></i>
        </button>
        <button class="mr-1 mt-1 mb-1 btn btn-sm btn-danger btn-delete" data-id="${row.id}" title="Hapus Data">
            <i class="fas fa-trash"></i>
        </button>
    `;
                    },
                    className: 'text-center'
                }
            ],
            // ORDER DEFAULT: Kolom No (index 0) sebagai orderable pertama
            order: [[0, 'asc']],
            pageLength: 10,
            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Semua"]]
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
                selectedData.push(rowData);
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
            table.ajax.reload(null, false);
            $('#search-info').text('');
            table.columns().search('');
            $('#search-value').val('');
            showAlert('success', 'Data Diperbarui', 'Data berhasil dimuat ulang!');
        });

        // Event handler untuk preview gambar
        $(document).on('click', '.img-popup', function () {
            var src = $(this).attr('data-src');
            $('#modal-img').attr('src', src);
            $('#fotoModal').modal('show');
        });

        // Event handler untuk pencarian spesifik kolom
        $('#btn-search-column').on('click', function () {
            var colIdx = $('#search-column').val();
            var keyword = $('#search-value').val();
            table.columns().search('');
            table.column(colIdx).search(keyword).draw();
            setTimeout(function () {
                var resultCount = table.rows({ filter: 'applied' }).count();
                $('#search-info').text('Ditemukan ' + resultCount + ' data');

                if (resultCount === 0 && keyword) {
                    showAlert('info', 'Pencarian', 'Tidak ada data yang sesuai dengan kata kunci "' + keyword + '"');
                }
            }, 300);
        });

        // Reset info pencarian saat input berubah
        $('#search-value').on('input', function () {
            $('#search-info').text('');
        });

        // Event handler untuk tombol tambah hakim
        $('#btn-tambah-hakim').on('click', function () {
            $('#formTambahHakim')[0].reset();
            $('#previewFoto').hide();
            $('.datepicker').val('');
            $('input[name="status_perpanjangan"]').val('');
            $('input[name="tanggal_habis"]').val('');

            $.getJSON("<?php echo site_url('admin/adhoc/perikanan/get_pengadilan'); ?>", function (data) {
                var options = '<option value="">Pilih Pengadilan</option>';
                $.each(data, function (i, v) {
                    options += `<option value="${v.id}">${v.nama_pengadilan}</option>`;
                });
                $('#selectPengadilan').html(options);

                $('#modalTambahHakim').modal('show');

                setTimeout(function () {
                    initSelect2Modal();
                }, 100);

            }).fail(function () {
                console.error('Gagal memuat data pengadilan');
                showAlert('error', 'Kesalahan', 'Gagal memuat data pengadilan. Silakan coba lagi.');
                $('#modalTambahHakim').modal('show');

                setTimeout(function () {
                    initSelect2Modal();
                }, 100);
            });
        });

        // Event handler untuk modal shown
        $('#modalTambahHakim').on('shown.bs.modal', function () {
            console.log('Modal ditampilkan, menginisialisasi Select2...');
            initSelect2Modal();
        });

        // Event handler untuk preview foto sebelum upload
        $('#inputFoto').on('change', function () {
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#previewFoto').attr('src', e.target.result).show();
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                $('#previewFoto').hide();
            }
        });

        // Event handler untuk submit form tambah hakim
        $('#formTambahHakim').on('submit', function (e) {
            e.preventDefault();

            // Validasi masa jabatan sebelum submit
            var masaJabatan = $('#selectMasaJabatan').val();
            if (!masaJabatan) {
                showAlert('warning', 'Validasi', 'Masa Jabatan wajib dipilih!');
                $('#selectMasaJabatan').focus();
                e.preventDefault();
                return false;
            }

            var formData = new FormData(this);

            var submitBtn = $(this).find('button[type="submit"]');
            var originalText = submitBtn.html();
            submitBtn.html('<i class="fas fa-spinner fa-spin"></i> Menyimpan...').prop('disabled', true);

            $.ajax({
                url: "<?php echo site_url('admin/adhoc/perikanan/tambah_hakim'); ?>",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function (res) {
                    submitBtn.html(originalText).prop('disabled', false);

                    try {
                        var json = typeof res === 'string' ? JSON.parse(res) : res;
                        if (json.success) {
                            $('#modalTambahHakim').modal('hide');
                            table.ajax.reload(null, false);
                            showAlert('success', 'Berhasil!', 'Data hakim berhasil ditambahkan!');
                        } else if (json.error) {
                            showAlert('error', 'Gagal!', 'Gagal menambah data hakim: ' + json.error);
                        }
                    } catch (e) {
                        console.error('Error parsing response:', e, res);
                        showAlert('error', 'Kesalahan Server!', 'Terjadi kesalahan pada server!');
                    }
                },
                error: function (xhr, status, error) {
                    submitBtn.html(originalText).prop('disabled', false);
                    console.error('AJAX Error:', status, error);
                    showAlert('error', 'Kesalahan!', 'Gagal menambah data hakim! Error: ' + error);
                }
            });
        });

        // Event handler untuk tombol detail
        $(document).on('click', '.btn-detail', function () {
            var id = $(this).data('id');
            showAlert('info', 'Detail Data',
                'Detail data dengan ID: ' + id + ' - Fitur detail belum diimplementasikan');
        });

        // Event handler untuk tombol edit
        $(document).on('click', '.btn-edit', function () {
            var id = $(this).data('id');
            // Ambil data hakim by id
            $.getJSON("<?php echo site_url('admin/adhoc/perikanan/get_data_by_id/'); ?>" + id, function (data) {
                // Isi field modal edit
                $('#edit_id').val(data.id);
                $('#edit_nama').val(data.nama);
                $('#edit_nip_nrp').val(data.nip_nrp);
                $('#edit_nik').val(data.nik);
                $('#edit_tempat_lahir').val(data.tempat_lahir);
                $('#edit_tanggal_lahir').val(data.tanggal_lahir);
                $('#edit_jenis_kelamin').val(data.jenis_kelamin).trigger('change');
                $('#selecteditGolongan').val(data.golongan).trigger('change');
                $('#edit_masa_jabatan').val(data.masa_jabatan).trigger('change');
                $('#edit_pendidikan_terakhir').val(data.pendidikan_terakhir);
                $('#edit_jabatan').val(data.jabatan);
                $('#edit_tmt_gol').val(data.tmt_gol);
                $('#edit_golongan').val(data.golongan);
                $('#edit_tmt_mutasi').val(data.tmt_mutasi);
                $('#edit_asal_organisasi').val(data.asal_organisasi);
                $('#edit_kepres').val(data.kepres);
                $('#edit_tgl_kepres').val(data.tgl_kepres);
                $('#edit_sk_dirjen').val(data.sk_dirjen);
                $('#edit_tgl_sk_dirjen').val(data.tgl_sk_dirjen);
                $('#edit_masa_jabatan').val(data.masa_jabatan);
                $('#edit_status_perpanjangan').val(data.status_perpanjangan);
                $('#edit_tanggal_habis').val(data.tanggal_habis);
                $('#edit_tgl_pelantikan').val(data.tgl_pelantikan);
                $('#edit_tmt_pn').val(data.tmt_pn);
                $('#edit_tmt_hk').val(data.tmt_hk);
                $('#edit_tgl_perpanjangan_pred').val(data.tgl_perpanjangan_pred);
                $('#edit_tgl_perpanjangan').val(data.tgl_perpanjangan);
                $('#edit_sk_perpanjangan').val(data.sk_perpanjangan);
                $('#edit_tgl_sk_perpanjangan').val(data.tgl_sk_perpanjangan);
                $('#edit_sumber_foto').val(data.sumber_foto);
                $('#edit_tmt_jabatan').val(data.tmt_jabatan);

                // Isi select pengadilan
                $.getJSON("<?php echo site_url('admin/adhoc/perikanan/get_pengadilan'); ?>", function (pengadilan) {
                    var options = '<option value="">Pilih Pengadilan</option>';
                    $.each(pengadilan, function (i, v) {
                        options += `<option value="${v.id}" ${v.id == data.id_pengadilan ? 'selected' : ''}>${v.nama_pengadilan}</option>`;
                    });
                    $('#edit_selectPengadilan').html(options);
                });

                // Preview foto lama
                if (data.foto) {
                    // Cek apakhan sumber foto sikep atau upload lokal
                    if (data.sumber_foto === 'sikep') {
                        $('#edit_previewFoto').attr('src', "https://sikep.mahkamahagung.go.id/uploads/foto_pegawai/" + data.foto).show();
                    } else
                        $('#edit_previewFoto').attr('src', "<?php echo base_url('uploads/foto_hakim/'); ?>" + data.foto).show();
                } else {
                    $('#edit_previewFoto').hide();
                }

                $('#modalEditHakim').modal('show');
                setTimeout(function () {
                    $('#edit_selectPengadilan').select2({
                        theme: 'bootstrap4',
                        width: '100%',
                        dropdownParent: $('#modalEditHakim')
                    });
                }, 100);

                $('#edit_jenis_kelamin').select2({
                    theme: 'bootstrap4',
                    width: '100%',
                    placeholder: 'Pilih jenis kelamin',
                    dropdownParent: $('#modalEditHakim'),
                    minimumResultsForSearch: 0
                });

                $('#selecteditGolongan').select2({
                    theme: 'bootstrap4',
                    width: '100%',
                    placeholder: 'Pilih jenis golongan',
                    dropdownParent: $('#modalEditHakim'),
                    minimumResultsForSearch: 0
                });
                $('#edit_masa_jabatan').select2({
                    theme: 'bootstrap4',
                    width: '100%',
                    placeholder: 'Pilih Masa Jabatan',
                    dropdownParent: $('#modalEditHakim'),
                    minimumResultsForSearch: 0
                });

                // Hitung status jabatan setelah data diisi
                setTimeout(function () {
                    calculateStatusJabatan('edit');
                }, 500);
            });
        });

        // Preview foto baru sebelum upload
        $('#edit_inputFoto').on('change', function () {
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#edit_previewFoto').attr('src', e.target.result).show();
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                $('#edit_previewFoto').hide();
            }
        });

        // Submit form edit hakim
        $('#formEditHakim').on('submit', function (e) {
            e.preventDefault();

            // Validasi masa jabatan sebelum submit
            var masaJabatan = $('#edit_masa_jabatan').val();
            if (!masaJabatan) {
                showAlert('warning', 'Validasi', 'Masa Jabatan wajib dipilih!');
                $('#edit_masa_jabatan').focus();
                e.preventDefault();
                return false;
            }

            // Tampilkan SweetAlert untuk konfirmasi
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: 'Data hakim akan diupdate. Lanjutkan?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Update!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika dikonfirmasi, lanjutkan dengan proses submit
                    var formData = new FormData(this);
                    var submitBtn = $(this).find('button[type="submit"]');
                    var originalText = submitBtn.html();
                    submitBtn.html('<i class="fas fa-spinner fa-spin"></i> Menyimpan...').prop('disabled', true);

                    $.ajax({
                        url: "<?php echo site_url('admin/adhoc/perikanan/update_hakim'); ?>",
                        type: "POST",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function (res) {
                            submitBtn.html(originalText).prop('disabled', false);
                            try {
                                var json = typeof res === 'string' ? JSON.parse(res) : res;
                                if (json.success) {
                                    $('#modalEditHakim').modal('hide');
                                    table.ajax.reload(null, false);
                                    showAlert('success', 'Berhasil!', 'Data hakim berhasil diupdate!');
                                } else if (json.error) {
                                    showAlert('error', 'Gagal!', 'Gagal update data hakim: ' + json.error);
                                }
                            } catch (e) {
                                showAlert('error', 'Kesalahan Server!', 'Terjadi kesalahan pada server!');
                            }
                        },
                        error: function (xhr, status, error) {
                            submitBtn.html(originalText).prop('disabled', false);
                            showAlert('error', 'Kesalahan!', 'Gagal update data hakim! Error: ' + error);
                        }
                    });
                }
                // Jika dibatalkan, tidak ada tindakan tambahan
            });
        });

        // Event handler untuk tombol hapus
        $(document).on('click', '.btn-delete', function () {
            var id = $(this).data('id');
            showConfirm('Konfirmasi Hapus', 'Yakin ingin menghapus data hakim ini?', 'Ya, Hapus', 'Batal')
                .then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "<?php echo site_url('admin/adhoc/perikanan/hapus_hakim'); ?>",
                            type: "POST",
                            data: { id: id },
                            dataType: "json",
                            success: function (res) {
                                if (res.success) {
                                    table.ajax.reload(null, false);
                                    showAlert('success', 'Berhasil!', 'Data hakim berhasil dihapus!');
                                } else if (res.error) {
                                    showAlert('error', 'Gagal!', 'Gagal menghapus data hakim: ' + res.error);
                                }
                            },
                            error: function (xhr, status, error) {
                                showAlert('error', 'Kesalahan!', 'Gagal menghapus data hakim! Error: ' + error);
                            }
                        });
                    }
                });
        });

        // Event handler untuk submit form usulan
        $('#formUsulan').on('submit', function (e) {
            e.preventDefault();

            var formData = new FormData(this);

            var submitBtn = $(this).find('button[type="submit"]');
            var originalText = submitBtn.html();
            submitBtn.html('<i class="fas fa-spinner fa-spin"></i> Mengirim...').prop('disabled', true);

            $.ajax({
                url: "<?php echo site_url('admin/adhoc/perikanan/simpan_usulan'); ?>",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function (res) {
                    submitBtn.html(originalText).prop('disabled', false);

                    try {
                        var json = typeof res === 'string' ? JSON.parse(res) : res;
                        if (json.success) {
                            $('#modalUsulan').modal('hide');
                            $('#formUsulan')[0].reset();
                            showAlert('success', 'Berhasil!', 'Usulan berhasil dikirim!');
                        } else if (json.error) {
                            showAlert('error', 'Gagal!', 'Gagal mengirim usulan: ' + json.error);
                        }
                    } catch (e) {
                        console.error('Error parsing response:', e, res);
                        showAlert('error', 'Kesalahan Server!', 'Terjadi kesalahan pada server!');
                    }
                },
                error: function (xhr, status, error) {
                    submitBtn.html(originalText).prop('disabled', false);
                    console.error('AJAX Error:', status, error);
                    showAlert('error', 'Kesalahan!', 'Gagal mengirim usulan! Error: ' + error);
                }
            });
        });

        // Event handler untuk submit form mutasi
        $('#formMutasi').on('submit', function (e) {
            e.preventDefault();

            showConfirm('Konfirmasi Mutasi',
                'Apakah Anda yakin ingin memutasikan hakim ini? Jumlah hakim di pengadilan asal akan berkurang dan di pengadilan tujuan akan bertambah.',
                'Ya, Proses Mutasi', 'Batal')
                .then((result) => {
                    if (result.isConfirmed) {
                        var formData = $(this).serialize();

                        var submitBtn = $(this).find('button[type="submit"]');
                        var originalText = submitBtn.html();
                        submitBtn.html('<i class="fas fa-spinner fa-spin"></i> Memproses...').prop('disabled', true);

                        $.ajax({
                            url: "<?php echo site_url('admin/adhoc/perikanan/mutasi_hakim'); ?>",
                            type: "POST",
                            data: formData,
                            dataType: "json",
                            success: function (res) {
                                submitBtn.html(originalText).prop('disabled', false);

                                if (res.success) {
                                    $('#modalMutasi').modal('hide');
                                    $('#formMutasi')[0].reset();

                                    // Reload tabel utama
                                    table.ajax.reload(null, false);

                                    showAlert('success', 'Berhasil!', 'Mutasi hakim berhasil diproses!');
                                } else if (res.error) {
                                    showAlert('error', 'Gagal!', 'Gagal memproses mutasi: ' + res.error);
                                }
                            },
                            error: function (xhr, status, error) {
                                submitBtn.html(originalText).prop('disabled', false);
                                console.error('AJAX Error:', status, error);
                                showAlert('error', 'Kesalahan!', 'Gagal memproses mutasi! Error: ' + error);
                            }
                        });
                    }
                });
        });

        // Inisialisasi jumlah terpilih saat pertama kali load
        updateSelectedCount();

        console.log('Aplikasi berhasil diinisialisasi');

        // Ketika tanggal pelantikan berubah, hitung 5 tahun ke depan untuk tgl_perpanjangan_pred
        $('input[name="tgl_pelantikan"]').on('change', function () {
            var tglPelantikan = $(this).val();
            if (tglPelantikan) {
                // Format input: YYYY-MM-DD
                var parts = tglPelantikan.split('-');
                if (parts.length === 3) {
                    var tahun = parseInt(parts[0], 10) + 5;
                    var bulan = parts[1].padStart(2, '0');
                    var hari = parts[2].padStart(2, '0');
                    var tglPerpanjanganPred = tahun + '-' + bulan + '-' + hari;
                    $('input[name="tgl_perpanjangan_pred"]').val(tglPerpanjanganPred);
                }
            } else {
                $('input[name="tgl_perpanjangan_pred"]').val('');
            }
        });

        // Otomatis isi tgl_perpanjangan_pred saat pilih tgl_pelantikan via datepicker
        $('input[name="tgl_pelantikan"]').on('apply.daterangepicker', function (ev, picker) {
            var tglPelantikan = picker.startDate.format('YYYY-MM-DD');
            if (tglPelantikan) {
                var parts = tglPelantikan.split('-');
                if (parts.length === 3) {
                    var tahun = parseInt(parts[0], 10) + 5;
                    var bulan = parts[1].padStart(2, '0');
                    var hari = parts[2].padStart(2, '0');
                    var tglPerpanjanganPred = tahun + '-' + bulan + '-' + hari;
                    $('input[name="tgl_perpanjangan_pred"]').val(tglPerpanjanganPred);
                }
            } else {
                $('input[name="tgl_perpanjangan_pred"]').val('');
            }
        });
    });
</script>