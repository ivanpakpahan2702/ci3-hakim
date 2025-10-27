<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['admin'] = 'AdminController/index';

// mapping spesifik dan fallback untuk controller AdhocPerikanan
$route['admin/adhoc/perikanan'] = 'Admin/AdhocPerikanan/data_hakim';
$route['admin/adhoc/perikanan/get_data'] = 'Admin/AdhocPerikanan/get_data';
$route['admin/adhoc/perikanan/get_pengadilan'] = 'Admin/AdhocPerikanan/get_pengadilan';
$route['admin/adhoc/perikanan/tambah_hakim'] = 'Admin/AdhocPerikanan/tambah_hakim';
$route['admin/adhoc/perikanan/get_data_by_id/(:num)'] = 'Admin/AdhocPerikanan/get_data_by_id/$1';
$route['admin/adhoc/perikanan/update_hakim'] = 'Admin/AdhocPerikanan/update_hakim';
$route['admin/adhoc/perikanan/hapus_hakim'] = 'Admin/AdhocPerikanan/hapus_hakim';
// Route untuk fitur usulan
$route['admin/adhoc/perikanan/data_usulan'] = 'Admin/UsulanPerikanan/data_usulan';
$route['admin/adhoc/perikanan/simpan_usulan'] = 'Admin/AdhocPerikanan/simpan_usulan';
$route['admin/adhoc/perikanan/get_usulan'] = 'Admin/UsulanPerikanan/get_usulan';
$route['admin/adhoc/perikanan/get_usulan_by_id/(:num)'] = 'Admin/UsulanPerikanan/get_usulan_by_id/$1';
$route['admin/adhoc/perikanan/tambah_usulan'] = 'Admin/UsulanPerikanan/tambah_usulan';
$route['admin/adhoc/perikanan/update_usulan'] = 'Admin/UsulanPerikanan/update_usulan';
$route['admin/adhoc/perikanan/hapus_usulan'] = 'Admin/AdhocPerikanan/hapus_usulan';
$route['admin/adhoc/perikanan/get_pengadilan_list'] = 'Admin/UsulanPerikanan/get_pengadilan_list';
// Routes untuk usulan perikanan
$route['admin/adhoc/perikanan/data_usulan'] = 'Admin/UsulanPerikanan/data_usulan';
$route['admin/adhoc/perikanan/get_usulan'] = 'Admin/UsulanPerikanan/get_usulan';
$route['admin/adhoc/perikanan/tambah_usulan'] = 'Admin/UsulanPerikanan/tambah_usulan';
$route['admin/adhoc/perikanan/update_usulan'] = 'Admin/UsulanPerikanan/update_usulan';
$route['admin/adhoc/perikanan/hapus_usulan/(:num)'] = 'Admin/UsulanPerikanan/hapus_usulan/$1';
$route['admin/adhoc/perikanan/get_pengadilan_list'] = 'Admin/UsulanPerikanan/get_pengadilan_list';
$route['admin/adhoc/perikanan/get_hakim_list'] = 'Admin/UsulanPerikanan/get_hakim_list';
$route['admin/usulanperikanan/get_drp_by_usulan_ids'] = 'Admin/UsulanPerikanan/get_drp_by_usulan_ids';
// Route untuk fitur mutasi
$route['admin/adhoc/perikanan/mutasi_hakim'] = 'Admin/AdhocPerikanan/mutasi_hakim';
$route['admin/adhoc/perikanan/get_mutasi_by_hakim/(:num)'] = 'Admin/AdhocPerikanan/get_mutasi_by_hakim/$1';
// Routes untuk usulan mutasi
$route['admin/adhoc/data-mutasi'] = 'Admin/MutasiPerikanan/data_mutasi';
$route['admin/adhoc/perikanan/get_drp_by_hakim_ids'] = 'Admin/UsulanPerikanan/get_drp_by_hakim_ids';
$route['admin/adhoc/perikanan/get_drp_by_ids'] = 'Admin/UsulanPerikanan/get_drp_by_ids';
$route['admin/adhoc/perikanan/get_image_proxy/(:any)'] = 'Admin/UsulanPerikanan/get_image_proxy/$1';
// Routes untuk mutasi perikanan
$route['admin/adhoc/data-mutasi'] = 'Admin/MutasiPerikanan/data_mutasi';
$route['admin/adhoc/data-mutasi/get_mutasi'] = 'Admin/MutasiPerikanan/get_mutasi';
$route['admin/adhoc/data-mutasi/get_mutasi_by_id/(:num)'] = 'Admin/MutasiPerikanan/get_mutasi_by_id/$1';
$route['admin/adhoc/data-mutasi/tambah_mutasi'] = 'Admin/MutasiPerikanan/tambah_mutasi';
$route['admin/adhoc/data-mutasi/update_mutasi'] = 'Admin/MutasiPerikanan/update_mutasi';
$route['admin/adhoc/data-mutasi/hapus_mutasi/(:num)'] = 'Admin/MutasiPerikanan/hapus_mutasi/$1';
$route['admin/adhoc/data-mutasi/get_pengadilan_list'] = 'Admin/MutasiPerikanan/get_pengadilan_list';
$route['admin/adhoc/data-mutasi/get_hakim_list'] = 'Admin/MutasiPerikanan/get_hakim_list';
$route['admin/adhoc/data-mutasi/get_hakim_by_id/(:num)'] = 'Admin/MutasiPerikanan/get_hakim_by_id/$1';
// mapping spesifik dan fallback untuk controller PengadilanPerikanan
$route['admin/adhoc/perikanan/data_pengadilan'] = 'Admin/PengadilanPerikanan/data_pengadilan';
$route['admin/adhoc/perikanan/get_data_pengadilan'] = 'Admin/PengadilanPerikanan/get_data_pengadilan';
$route['admin/adhoc/perikanan/tambah_pengadilan'] = 'Admin/PengadilanPerikanan/tambah_pengadilan';
$route['admin/adhoc/perikanan/get_pengadilan_by_id/(:num)'] = 'Admin/PengadilanPerikanan/get_pengadilan_by_id/$1';
$route['admin/adhoc/perikanan/update_pengadilan'] = 'Admin/PengadilanPerikanan/update_pengadilan';
$route['admin/adhoc/perikanan/hapus_pengadilan'] = 'Admin/PengadilanPerikanan/hapus_pengadilan';
$route['admin/adhoc/perikanan/get_hakim_by_pengadilan/(:num)'] = 'Admin/PengadilanPerikanan/get_hakim_by_pengadilan/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
