<!DOCTYPE html>
<html lang="">
<head>
<title>STPIPB</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="assets/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="assets/layout/styles/design.css" rel="stylesheet" type="text/css" media="all">
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
  <!-- <img class="gambar-stp" src="assets/images/logostp.png" style="width : 150px; heigth:50px;" ></img> -->
    <div id="logo" class="fl_left"> 
    </div>
    <nav id="mainav" class="fl_right"> 
      <ul class="clear">
        <li class="active"><a href="<?=base_url('landing_page')?>">Home</a></li>
        <li><a class="drop" href="#">Master Data</a>
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
            <li><a href="<?= base_url('Landing_page/suplier_view')?>">Input Barang Masuk Dari Supplier/Customer</a></li>
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
        
        <!-- <img class="gambar-header" src="assets/images/demo/backgrounds/ipb.png" ></img> -->
        
      </ul>
      
    </nav>
  </header>
</div>

<div class="wrapper bgded overlay gradient"
 style="background-image:url('assets/images/demo/backgrounds/gedung.jpeg');">
  <div id="pageintro" class="hoc clear"> 
    
    <article>
      <h3 class="heading">STP IPB</h3>
      <p>Science Tekno Park</p>
      <p>Gedung STP IPB University,
        Jl. Taman Kencana No. 3, Babakan, Bogor Tengah, Bogor – 16128</p>
      <footer>
      </footer>
    </article>
    
  </div>
</div>

<div class="wrapper row2">
  <section class="hoc container clear"> 
   
    <div class="sectiontitle">
      <h6 class="heading"></h6>
      <p></p>
    </div>
    <ul class="nospace group prices">
      <li class="one_third">
        <article><i class="fas fa-box red"></i>
          <h6 class="heading">Material</h6>
          <p>Proses ada dua tahapan berbeda antara produksi minuman berprasa dan mineral,
            dilakukan mesin secara otomatis jadi sudah dipastikan steril
          </p>
          <p><sup></sup><strong></strong><em></em></p>
          <footer><a class="btn" href="<?= base_url('Landing_page/stokBarang')?>">Details</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><i class="fas fa-dolly green"></i>
          <h6 class="heading">Produksi</h6>
          <p>Produk akan dikemas secara langsung setelah melewati proses produksi maka terjamin
            mutunya, untuk dikirim ke konsumen  </p>
          <p><sup></sup><strong></strong><em></em></p>
          <footer><a class="btn" href="<?= base_url('Landing_page/produksi_view')?>">Details</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article><i class="fas fa-user blue"></i>
          <h6 class="heading">Kelola User</h6>
          <p>
          sebagai pelanggan baru,user harus mengisi form yang telah disediakan sebagai 
           data login user name dan password untuk login.
          </p>
          <p><sup></sup><strong></strong><em></em></p>
          <footer><a class="btn" href="akun_view">Details</a></footer>
        </article>
      </li>
    </ul>
    
  </section>
</div>

<div class="wrapper coloured">
  <article class="hoc cta clear"> 
   
    <h6 class="three_quarter first"></h6>
    
  </article>
</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    
    <section id="introblocks">
      <div class="sectiontitle">
        <h6 class="heading"></h6>
        <p></p>
      </div>
      <ul class="nospace group">
        <li class="one_third first">
          <article><a href="#"><i class="fas fa-leaf"></i></a>
            <h6 class="heading">Tea</h6>
            <p>Tea is a beverage that contains caffeine, a drink made by brewing the dried leaves,  
            shoots, or petioles of the Camellia sinensis plant with hot water.</p>
            <footer><a class="btn" href="#">Read More</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class="fas fa-seedling"></i></a>
            <h6 class="heading">Ginger</h6>
            <p>Ginger is a medicinal plant in the form of quasi-trunked clump</p>
            <footer><a class="btn" href="#">Read More</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class="fas fa-lemon"></i></a>
            <h6 class="heading">Coffee</h6>
            <p>Coffee is a drink made from brewed coffee beans that have been roasted and ground into powder.
            </p>
            <footer><a class="btn" href="#">Read More</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class=" fas fa-wine-glass"></i></a>
            <h6 class="heading">AMDK</h6>
            <p>Packaged Drinking Water, which is called AMDK, is water that has been processed, 
            without food ingredients and food additives, packaged and safe to drink.</p>
            <footer><a class="btn" href="#">Read More</a></footer>
          </article>
        </li>
      </ul>
    </section>
   
    <div class="clear"></div>
  </main>
</div>



<div class="wrapper bgded overlay" style="background-image:url('assets/images/demo/backgrounds/space.jpeg');">
  <div class="hoc container testimonial clear"> 
  
    <article><!--<img src="assets/images/demo/backgrounds/ipb.png" alt="" style="width : 150px; height:150px;"> -->
    
      <p>
        LKST IPB melaksanakan tugas pengelolaan Kawasan Sains dan Teknologi (KST/Science and Techno 
        Park/STP) melalui pengelolaan dan komersialisasi inovasi, alih teknologi berbasis Kekayaan 
        Intelektual, pengembangan kreasi usaha/lapangan kerja dan pengembangan ekonomi dari hasil 
        hilirisasi serta pengelolaan proses inkubasi bisnis teknologi yang berkelanjutan dalam rangka 
        menumbuhkembangkan perusahaan pemula berbasis teknologi (PPBT).
      </p>
      <em></em></article>
    
  </div>
</div>

<div class="wrapper row3">
  <section id="cta" class="hoc container clear"> 
    
    <ul class="nospace clear">
      <li class="one_quarter first">
        <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> +62 251 8572002</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> stp@apps.ipb.ac.id</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Monday - Friday:</strong> 08.00am - 16.00pm</span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Come visit us:</strong> Directions to <a href="https://g.page/STP_IPB?share">our location</a></span></div>
      </li>
    </ul>
   
  </section>
</div>



<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    

    
  </div>
</div>

<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>

<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>