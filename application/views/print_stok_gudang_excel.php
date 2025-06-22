<html>
    <head>

    <title>STPIPB</title>
    
<link href="<?=base_url() ?>assets/layout/styles/costume.css" rel="stylesheet" type="text/css" >

    </head>
    <body>

    

    <a href="<?= base_url('Landing_page/produksi_stok_view')?>">
    <script>
    window.print();
    <?php
    $file="Tambah Stok Gudang.xls";
    $test="<table><tr><td>Cell 1</td><td>Cell 2</td></tr></table>";
    header('Content-type: application/excel');
    header("Content-Disposition: attachment; filename=$file");
    echo $test;

    ?>
    
    </script>
    <!-- <button onClick="window.print();">Print</button> -->
    </a>
    <table align="center" class="table table-striped" border="1">

      <div class="plan-action mt-4 pb-1">
        <br><br>
      <h3 align=center style="color:grey;">tambah stok gudang</h3>
      <!-- <img src="assets/images/demo/backgrounds/ipb.png" style="width : 100px;" ></img>
      <img src="assets/images/demo/backgrounds/logoipb.png" style="width : 150px;" ></img> -->
      <tr>
      <th valign="top">
                  Kode Produk
               </th>
               <th valign="top">
                 Nama Produk
               </th>
               <th valign="top">
                  Tanggal
               </th>
               <th valign="top">
                  Barang Masuk
                </th>
               <th valign="top">
                  Stok Barang
               </th>
               
               </thead>
               
           
                <?php
              foreach ($ipb as $row) : ?>
              
              <tr>
                  <td><?= $row->kode_barang ?></td>
                  <td><?= $row->nama_barang ?></td>
                  <td><?= $row->tanggal ?></td>
                  <td><?= $row->brg_msk ?></td>
                  <td><?= $row->jumlah ?></td>
                
          <?php endforeach; 
          ?>
      </table>

    </body>
    </html>
      