<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Landing_page';
//landing_page = nama pemanggilan
$route['landing_page'] = 'Landing_page'; //landing_page = controller
$route['landing_page/buttons'] = 'Landing_page/buttons'; //landing_page = controller, buttons = function
$route['landing_page/tambah_data'] = 'Landing_page/buttons'; 
$route['landing_page/tambah_barang'] = 'Landing_page/tambah_barang'; 
$route['landing_page/insert_data'] = 'Landing_page/insert_data'; 
$route['landing_page/proses_hapus_barang/(:any)'] = 'Landing_page/proses_hapus_barang/$1'; 
$route['landing_page/edit_barang/(:any)'] = 'Landing_page/edit_barang/$1'; 


$route['tambah-stok'] = 'Landing_page/proses_tambah_stok_barang';
$rout['stok_data'] = 'Landing_page/stok-barang';
$route['landing_page/stok_material'] = 'Landing_page/stok_material';
$route['landing_page/B_data_barang'] = 'Landing_page/B_data_barang';
$route['landing_page/tambah_StokBarang'] = 'Landing_page/tambah_stok_barang'; 
$route['landing_page/kurang_StokBarang'] = 'Landing_page/kurang_stok_barang'; 
$route['kurang-stok'] = 'Landing_page/proses_kurang_stok_barang';
$route['landing_page/stok_kurang_material'] = 'Landing_page/stok_kurang_material';

$route['print_stok'] = 'Landing_page/print';
$route['print_stok_excel'] = 'Landing_page/print_excel';

$route['bom_tambah_barang'] = 'Landing_page/bom_tambah_barang';
$route['bom_view'] = 'Landing_page/bom_view';
$route['proses_hapus_bom/(:any)'] = 'Landing_page/proses_hapus_bom/$1'; 
$route['edit_bom/(:any)'] = 'Landing_page/edit_bom/$1'; 
$route['print_bom_pdf'] = 'Landing_page/print_bom_pdf';
$route['print_bom_excel'] = 'Landing_page/print_bom_excel';

$route['suplier_tambah_barang'] = 'Landing_page/suplier_tambah_barang';
$route['suplier_view'] = 'Landing_page/suplier_view';
$route['proses_hapus_suplier/(:any)'] = 'Landing_page/proses_hapus_suplier/$1'; 
$route['edit_suplier/(:any)'] = 'Landing_page/edit_suplier/$1'; 
$route['print_suplier_pdf'] = 'Landing_page/print_suplier_pdf';
$route['print_suplier_excel'] = 'Landing_page/print_suplier_excel';
$route['print_user_pdf'] = 'Landing_page/print_user_pdf';
$route['print_user_excel'] = 'Landing_page/print_user_excel';

$route['suplier_user_view'] = 'Landing_page/suplier_user_view';
$route['tambah_suplier_user_view'] = 'Landing_page/tambah_suplier_user_view';
$route['proses_hapus_suplier_user/(:any)'] = 'Landing_page/proses_hapus_suplier_user/$1'; 
$route['edit_suplier_user/(:any)'] = 'Landing_page/edit_suplier_user/$1'; 

$route['produksi_view'] = 'Landing_page/produksi_view';
$route['tambah_produksi'] = 'Landing_page/tambah_produksi';
$route['proses_hapus_produksi/(:any)'] = 'Landing_page/proses_hapus_produksi/$1'; 
$route['edit_produksi/(:any)'] = 'Landing_page/edit_produksi/$1'; 

$route['produksi_stok_view'] = 'Landing_page/produksi_stok_view';
$route['tambah_stok_produksi'] = 'Landing_page/tambah_stok_produksi';
$route['proses_hapus_stok_produksi/(:any)'] = 'Landing_page/proses_hapus_stok_produksi/$1'; 
$route['edit_stok_produksi/(:any)'] = 'Landing_page/edit_stok_produksi/$1'; 
$route['print_gudang_pdf'] = 'Landing_page/print_gudang_pdf';
$route['print_stok_gudang_pdf'] = 'Landing_page/print_stok_gudang_pdf';
$route['print_gudang_excel'] = 'Landing_page/print_gudang_excel';
$route['print_stok_gudang_excel'] = 'Landing_page/print_stok_gudang_excel';

$route['produksi_sortir_view'] = 'Landing_page/produksi_sortir_view';
$route['tambah_sortir_produksi'] = 'Landing_page/tambah_sortir_produksi';
$route['proses_hapus_sortir_produksi/(:any)'] = 'Landing_page/proses_hapus_sortir_produksi/$1'; 
$route['edit_sortir_produksi/(:any)'] = 'Landing_page/edit_sortir_produksi/$1'; 
$route['print_sortir_pdf'] = 'Landing_page/print_sortir_pdf';
$route['print_sortir_excel'] = 'Landing_page/print_sortir_excel';

$route['co_view'] = 'Landing_page/co_view';
$route['tambah_co'] = 'Landing_page/tambah_co';
$route['proses_hapus_co/(:any)'] = 'Landing_page/proses_hapus_co/$1'; 
$route['edit_co/(:any)'] = 'Landing_page/edit_co/$1'; 
$route['print_InputBarangCo_pdf'] = 'Landing_page/print_InputBarangCo_pdf';
$route['print_InputBarangCo_excel'] = 'Landing_page/print_InputBarangCo_excel';
$route['print_TambahStokCo_pdf'] = 'Landing_page/print_TambahStokCo_pdf';
$route['print_TambahStokCo_excel'] = 'Landing_page/print_TambahStokCo_excel';
$route['print_co_keluar_pdf'] = 'Landing_page/print_co_keluar_pdf';
$route['print_co_keluar_excel'] = 'Landing_page/print_co_keluar_excel';
$route['print_co_user_pdf'] = 'Landing_page/print_co_user_pdf';
$route['print_co_user_excel'] = 'Landing_page/print_co_user_excel';

$route['co_stok_view'] = 'Landing_page/co_stok_view';
$route['tambah_stok_co'] = 'Landing_page/tambah_stok_co';
$route['proses_hapus_stok_co/(:any)'] = 'Landing_page/proses_hapus_stok_co/$1'; 

$route['co_keluar_view'] = 'Landing_page/co_keluar_view';
$route['tambah_co_keluar'] = 'Landing_page/tambah_co_keluar';
$route['proses_hapus_co_keluar/(:any)'] = 'Landing_page/proses_hapus_co_keluar/$1'; 
$route['edit_co_keluar/(:any)'] = 'Landing_page/edit_co_keluar/$1';

$route['co_user_view'] = 'Landing_page/co_user_view';
$route['tambah_co_user'] = 'Landing_page/tambah_co_user';
$route['proses_hapus_co_user/(:any)'] = 'Landing_page/proses_hapus_co_user/$1'; 
$route['edit_co_user/(:any)'] = 'Landing_page/edit_co_user/$1';


$route['akun_view'] = 'Landing_page/akun_view';
$route['register'] = 'Landing_page/register';
$route['proses_hapus_akun/(:any)'] = 'Landing_page/proses_hapus_akun/$1'; 

$route['login'] = 'Welcome/login_frontend';
$route['login_backend'] = 'Welcome/login_backend';
$route['logout'] = 'Welcome/logout';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
