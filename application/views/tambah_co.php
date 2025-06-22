<!DOCTYPE html>
<html lang="">
<head>
<title>tambah barang</title>
<style>
    .data-siswa {
      display: none;
    }
  </style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="<?=base_url() ?>assets/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="<?=base_url() ?>assets/layout/styles/costume.css" rel="stylesheet" type="text/css" >
<link href="<?=base_url() ?>assets/layout/styles/design.css" rel="stylesheet" type="text/css" >
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://select2.github.io/select2-bootstrap-theme/css/select2-bootstrap.css">
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
          <li><a href="<?= base_url('Landing_page/co_view')?>"><b>Input Barang CO</b></a></li>
          <li><a href="<?= base_url('Landing_page/co_stok_view')?>">Tambah Stok CO</a></li>
          <li><a href="<?= base_url('Landing_page/co_keluar_view')?>">Barang CO keluar</a></li>
          <li><a href="<?= base_url('Landing_page/co_user_view')?>">Tambah user CO</a></li>
          
        </ul>
      </nav>
      
    </div>
    <div class="content three_quarter"> 
        <form action="<?php echo base_url().'landing_page/proses_tambah_co'; ?>" method="post">
			    <input type="hidden" name="id_barang" id="id_barang" value="" />
			
      <!-- <div class="mt-4 col-md-5">
      <select class="custom-select form-control" name="kode_barang" required>
                <option value="" disabled selected>Nama Barang</option>
                <?php foreach ($ipb as $row) : ?>
                  <option  class="form-control select2" onchange="show_siswa(this.value)" value="<?php echo $row['kode_barang'] ?>">  <?php echo $row['nama_barang'] ?> </option>
                <?php endforeach; ?>
              </select>
            </div> -->
            <div class="mt-4 col-md-5">
				<input class="form-control form-control-name" name="kode_barang" id="kode_barang" placeholder="Kode Barang" type="text" value="" required>
			</div>   
      <div class="mt-4 col-md-5">
				<input class="form-control form-control-name" name="nama_barang" id="nama_barang" placeholder="Nama Barang" type="text" value="" required>
			</div>    
     
			<!-- <div class="mt-4 col-md-5">
          <label>Tanggal Pembuatan BOM :</label>
			    <input class="form-control form-control-name" name="tanggal" id="tanggal" placeholder="tanggal" type="date" required>
			</div> -->
      
      <div class="mt-4 col-md-5">
			    <input class="form-control form-control-name" name="stok_order" id="stok_order" placeholder="Stok Order" type="text" required>
			</div>
									
			<div class="plan-action mt-4 col-md-5">
				<button class="btn btn-info" type="submit" value="proses_tambah_co" >Tambah Data</button>
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
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<script>
  
  $(document).ready(function() {
      // Format Select2 pada id nisn
      $("#nama_material").select2({
        allowClear: true,
        theme: "bootstrap",
        placeholder: "Cari NISN",
      });

      show_nisn(); // Memanggil fungsi untuk menampilkan NISN
    });

    // fungsi untuk menampilkan NISN
    function show_nisn() {
      $.ajax({
        url: "<?php echo base_url('landing_page/get_nisn'); ?>",
        type: "GET",
        dataType: "JSON",
        success: function(x) {
          if (x.status == true) {
            $('#nama_material').html('<option value=""></option>');
            $.each(x.data, function(k, v) {
              $('#nama_material').append(`<option value="${v.nisn}">${v.nisn}</option>`);
            });
          }
        }
      });
    }

    // fungsi untuk menampilkan data siswa berdasarkan NISN
    function show_siswa(x) {
      $.ajax({
        url: "<?php echo base_url('landing_page/get_siswa'); ?>",
        type: "GET",
        dataType: "JSON",
        data: {
          nisn: x
        },
        success: function(x) {
          if (x.status == true) {
            $('.data-siswa').show()
            $('#kode_material').val(x.data.kode_material);
          }
        }
      });
    }
        </script>
</body>
</html>