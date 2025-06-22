<!DOCTYPE html>
<html lang="">
<head>
<title>Ambil Material</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="<?=base_url() ?>assets/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="<?=base_url() ?>assets/layout/styles/design.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" >

</head>
<body id="top">

<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_left"> 
    
      <ul class="nospace">
        <li><i class="fas fa-phone rgtspace-5"></i> +62 251 8572002</li>
        <li><i class="far fa-envelope rgtspace-5"></i> stp@apps.ipb.ac.id</li>
      </ul>
      
    </div>
    <div class="fl_right"> 
      
      <ul class="nospace">
        <li><a href="index.html"><i class="fas fa-home"></i></a></li>
        <li><a href="#" title="Help Centre"><i class="far fa-life-ring"></i></a></li>
        <li><a href="<?= base_url('logout') ?>" title="Logout"><i class="fas fa-sign-in-alt"></i></a></li>
        <li><a href="#" title="Sign Up"><i class="fas fa-edit"></i></a></li>
        <li id="searchform">
          <div>
            <form action="#" method="post">
              <fieldset>
                <legend>Quick Search:</legend>
                <input type="text" placeholder="Enter search term&hellip;">
                <button type="submit"><i class="fas fa-search"></i></button>
              </fieldset>
            </form>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="wrapper row1">
  <header id="header" class="hoc clear">
  <!-- <img class="gambar-stp" src="<?=base_url();?>assets/images/logostp.png" style="width : 150px; heigth:50px;" ></img> -->
    <div id="logo" class="fl_left"> 
    </div>
    <nav id="mainav" class="fl_right"> 
      <ul class="clear">
        <li class="drop"><a href="<?=base_url('landing_page')?>">Home</a></li>
        <li><a class="active" href="#">Master Data</a>
          <ul>
            <li><a href="<?= base_url('Landing_page/stokBarang')?>">Input Material Master</a></li>
            <li><a href="#">Input Nama Pengambilan</a></li>
            <li><a href="#">Input Customer dan Supplier</a></li>
            <li><a href="#">Input No Pajak, No Rekening & Kel Barang </a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">BOM</a>
          <ul>
            <li><a href="<?= base_url('Landing_page/bom_view')?>">Input BOM</a></li>
            <li><a href="#">Input Produksi Order</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Penerimaan</a>
          <ul>
            <li><a href="<?= base_url('Landing_page/suplier_view')?>">Input Barabg Masuk Dari Supplier/Customer</a></li>
            <li><a href="#">Input Barang Masuk Sesuai PO</a></li>
            <li><a href="#">Input Barang Masuk Intrenal</a></li>
            <li><a href="#">Input Retur</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Pengeluaran</a>
          <ul>
            <li><a href="<?= base_url('Landing_page/co_view')?>">Input Barang Keluar Sesuai CO</a></li>
            <li><a href="#">Input Barang Keluar Internal</a></li>
            <li><a href="#">Input Barang Keluar Rijek Gudang</a></li>
            <li><a href="#">Input Barang Keluar Sesuai Permintaan Pemindahan Barang ( PBB )</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Gudang/Produksi</a>
          <ul>
            <li><a href="<?= base_url('Landing_page/produksi_view')?>">Input Hasil Produksi</a></li>
            <li><a href="#">Input Reject Produksi</a></li>
            <li><a href="#">Input Sample Laboratorium</a></li>
            <li><a href="#">Input Permintaan Keluar Pemindahan Barang ( PBB )</a></li>
            <li><a href="#">Input Pindah Bahan Baku dan Jadi</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Setting</a>
          <ul>
            <li><a href="<?= base_url('logout') ?>">LOG OUT</a></li>
            <li><a href="<?= base_url('akun_view') ?>">Kelola User</a></li>
          </ul>
        </li>
        
        <!-- <img class="gambar-header" src="<?= base_url();?>assets/images/demo/backgrounds/ipb.png" ></img> -->
        
      </ul>
      
    </nav>
  </header>
</div>
<div class="wrapper bgded overlay gradient" style="background-image:url('<?=base_url()?>assets/images/demo/backgrounds/stp3.jpg');">
  <div id="breadcrumb" class="hoc clear"> 
    <h6 class="heading">Input Material Master</h6>
    <ul>
      <!-- <li><a href="#">Home</a></li>
      <li><a href="#">Lorem</a></li>
      <li><a href="#">Ipsum</a></li>
      <li><a href="#">Dolor</a></li> -->
    </ul>
  </div>
</div>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class="sidebar one_quarter first"> 
      <h6>STP IPB Lainya</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="<?= base_url('Landing_page/stokBarang')?>">Data Material</a></li>
          <li><a href="<?= base_url('Landing_page/stok_material')?>">Stok Material</a></li>
          <li><a href="<?= base_url('Landing_page/stok_material')?>"><b>Ambil Material</b></a></li>
            <!-- <ul>
              <li><a href="#">Navigation - Level 2</a></li>
              <li><a href="#">Navigation - Level 2</a></li>
            </ul>
          </li>
          <li><a href="#">Navigation - Level 1</a>
            <ul>
              <li><a href="#">Navigation - Level 2</a></li>
              <li><a href="#">Navigation - Level 2</a>
                <ul>
                  <li><a href="#">Navigation - Level 3</a></li>
                  <li><a href="#">Navigation - Level 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#">Navigation - Level 1</a></li> -->
        </ul>
      </nav>
      
    </div>
    <div class="plan-action mt-4 ">
    <button class="btn btn-info btn-icon-split" data-toggle="modal" data-target="#kurang-stok" style="margin-left:45px;">
               <span class="icon text-white-50">
                          <i class="fas fa-table"></i>
                            </span>
                            <span class="text">Ambil Stok Barang</span>
                        </button>
     <a class="btn btn-outline-danger 	fas fa-arrow-alt-circle-down" href="<?php echo base_url().'print_stok'; ?>" target="_blank"  style="margin-left: 520px; margin-top:0px;"> 
      PDF
     <a class="btn btn-outline-success 	fas fa-arrow-alt-circle-down" href="<?php echo base_url().'print_stok_excel'; ?>" target="_blank"  style="margin-left:-140px; margin-top:0px;"> 
     XLS</a>
    <div class="content three_quarter"> 
    <table id="example" class="table table-striped" border="1">
      <thead>

      <div class="plan-action mt-4 pb-1">

      </div>
              
              <tr>
                  <td><b><b>Kode Material</td>
                  <td><b><b>Nama Material</td>
                  <td><b><b>Jumlah</td>
                  <td><b><b>total</td>
                  <td align=center><b><b>Pilihan</td>
              </tr>
      </thead>        
              <?php
              foreach ($data_stok as $row) : ?>
              <tr>
                  <td><?php echo $row['kode_material'] ?></td>
                  <td><?php echo $row['nama_material'] ?></td>
                  <td><?php echo $row['jumlah'] ?></td>
                  <td><?php echo $row['total'] ?></td>
                  <td align=center>
                  <a class="btn btn-success fas fa-edit" href="<?= base_url()?>landing_page/edit_barang/<?= $row['id_barang']?>"> 
                    </a>      | |
                  <a class="btn btn-danger fab fa-bitbucket" href="<?= base_url()?>landing_page/proses_hapus_barang/<?= $row['id_barang']?>">
                    </a></td>
              </tr>
          <?php endforeach; 
          ?>
      </table>

    <div class="clear"></div>
  </main>
</div>


<div class="wrapper row3">
  <section id="cta" class="hoc container clear"> 
    <ul class="nospace clear">
      <li class="one_quarter first">
        <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong>0857-2630-7856</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong></span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Monday - Friday:</strong> 08.00am - 16.00pm</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Come visit us:</strong> Directions to <a href="https://g.page/STP_IPB?share">our location </a></span></div>
      </li>
    </ul>
  </section>
</div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left"><a href="#"></a></p>
    <p class="fl_right"><a target="_blank" href="" title="Free Website Templates"></a></p>
  </div>
</div>

<?php $this->load->view('kurang_StokBarang'); ?> 

<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<script src="<?=base_url() ?>assets/layout/scripts/jquery.min.js"></script>
<script src="<?=base_url() ?>assets/layout/scripts/jquery.backtotop.js"></script>
<script src="<?=base_url() ?>assets/layout/scripts/jquery.mobilemenu.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js
"></script>
<script>
$(document).ready(function () {
    $('#example').DataTable();
});
</script>
</body>
</html>