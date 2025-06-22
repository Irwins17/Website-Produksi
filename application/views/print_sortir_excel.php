<html>
    <head>

    <title>STPIPB</title>
    
<link href="<?=base_url() ?>assets/layout/styles/costume.css" rel="stylesheet" type="text/css" >

    </head>
    <body>

    

    <a href="<?= base_url('Landing_page/print_sortir_excel')?>">
    <script>
    window.print();
    <?php
    $file="Sortir produksi.xls";
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
      <h3 align=center style="color:grey;">Sortir Produksi</h3>
      <!-- <img src="assets/images/demo/backgrounds/ipb.png" style="width : 100px;" ></img>
      <img src="assets/images/demo/backgrounds/logoipb.png" style="width : 150px;" ></img> -->
      <tr>
                  <td><b><b>Kode Produk</td>
                  <td><b><b>Nama Produk</td>
                  <td><b><b>Tanggal</td>
                  <td><b><b>Produk Berhasil</td>
                  <td><b><b>Reject</td>
                  <td><b><b>Stok</td>

                </tr> 
              </thead>
              
              <?php
              foreach ($ipb as $row) : ?>
              <tr>
                  <td><?= $row->kode_barang ?></td>
                  <td><?= $row->nama_barang ?></td>
                  <td><?= $row->tanggal ?></td>
                  <td><?= $row->hasil ?></td>
                  <td><?= $row->reject ?></td>
                  <td><?= $row->jumlah ?></td>
                
          <?php endforeach; 
          ?>
      </table>

    </body>
    </html>
      