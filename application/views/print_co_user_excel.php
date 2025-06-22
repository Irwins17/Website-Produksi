<html>
    <head>

    <title>STPIPB</title>
    
<link href="<?=base_url() ?>assets/layout/styles/costume.css" rel="stylesheet" type="text/css" >

    </head>
    <body>

    

    <a href="<?= base_url('Landing_page/print_co_keluar_excel')?>">
    <script>
    window.print();
    <?php
    $file="CO USER.xls";
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
      <h3 align=center style="color:grey;">CO USER</h3>
      <!-- <img src="assets/images/demo/backgrounds/ipb.png" style="width : 100px;" ></img>
      <img src="assets/images/demo/backgrounds/logoipb.png" style="width : 150px;" ></img> -->
      <tr>
                  <td><b><b>Nama Customer</td>
                  <td><b><b>alamat Customer</td>
                  <td><b><b>Nomer Telpon</td>

                </tr> 
              </thead>
              
              <?php
              foreach ($ipb as $row) : ?>
              <tr>
                  <td><?php echo $row['nama_co'] ?></td>
                  <td><?php echo $row['alamat'] ?></td>
                  <td>0<?php echo $row['no_telp'] ?></td>
                
          <?php endforeach; 
          ?>
      </table>

    </body>
    </html>
      