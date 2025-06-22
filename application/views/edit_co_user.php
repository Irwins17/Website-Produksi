<!DOCTYPE html>
<html lang="">
<head>
<title>Edit Stok Barang</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="<?=base_url() ?>assets/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="<?=base_url() ?>assets/layout/styles/costume.css" rel="stylesheet" type="text/css" >
<link href="<?=base_url() ?>assets/layout/styles/design.css" rel="stylesheet" type="text/css" >
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
            <li><a href="#">Input BOM</a></li>
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
    <h6 class="heading">Pengeluaran Barang CO</h6>
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
          <li><a href="<?= base_url('Landing_page/co_view')?>">Input Barang CO</a></li>
          <li><a href="<?= base_url('Landing_page/co_stok_view')?>">Tambah Stok CO</a></li>
          <li><a href="<?= base_url('Landing_page/co_keluar_view')?>">Barang CO keluar</a></li>
          <li><a href="<?= base_url('Landing_page/co_user_view')?>"><b>Tambah user CO</b></a></li> 
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
    <div class="content three_quarter"> 
         <form action="<?php echo base_url().'landing_page/proses_edit_co_user'; ?>" method="post">

										<input type="hidden" name="id_customer" id="id_customer" value="<?= $ipb->id_customer?>" />
										<div class="mt-4 col-md-5">
											<input class="form-control form-control-name" name="nama_co" id="nama_co" placeholder="Nama Customer"
												type="text" required value="<?= $ipb->nama_co?>">
										</div>
                    <div class="mt-4 col-md-5">
											<input class="form-control form-control-name" name="alamat" id="alamat" placeholder="Alamat Customer"
												type="text" required value="<?= $ipb->alamat?>">
										</div>
                    
                    <div class="mt-4 col-md-5">
											<input class="form-control form-control-name" name="no_telp" id="no_telp" placeholder="Nomer Customer"
												type="text" required value="<?= $ipb->no_telp?>">
										</div>
                   
									<div class="plan-action mt-4 pb-1 col-md-5">
										<button class="btn btn-info" type="submit" value="proses_edit_co_user" >Tambah</button>
									</div>
									</form>

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
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>