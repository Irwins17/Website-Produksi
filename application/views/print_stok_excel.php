<html>
    <head>

    <title>STPIPB</title>
    
<link href="<?=base_url() ?>assets/layout/styles/costume.css" rel="stylesheet" type="text/css" >

    </head>
    <body>

    

    <a href="<?= base_url('Landing_page/stokBarang')?>">
    <script>
    window.print();
    <?php
    $file="STP Produksi.xls";
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
      <h3 align=center style="color:grey;">LAPORAN PRODUKSI</h3>
      <!-- <img src="assets/images/demo/backgrounds/ipb.png" style="width : 100px;" ></img>
      <img src="assets/images/demo/backgrounds/logoipb.png" style="width : 150px;" ></img> -->
      </div>
              
              <tr>
                  <td><b><b>Kode Material</td>
                  <td><b><b>Nama Material</td>
                  <td><b><b>kategori</td>
                  <td><b><b>Jumlah</td>
                  <td><b><b>total</td>
              </tr>
              
              <?php
              foreach ($ipb as $row) : ?>
              <tr>
                  <td><?php echo $row['kode_material'] ?></td>
                  <td><?php echo $row['nama_material'] ?></td>
                  <td><?php echo $row['kategori'] ?></td>
                  <td><?php echo $row['jumlah'] ?></td>
                  <td><?php echo $row['total'] ?></td>
                
              </tr>
          <?php endforeach; 
          ?>
      </table>

    </body>
    </html>
      