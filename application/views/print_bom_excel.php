<html>
    <head>

    <title>STPIPB</title>
    
<link href="<?=base_url() ?>assets/layout/styles/costume.css" rel="stylesheet" type="text/css" >

    </head>
    <body>

    

    <a href="<?= base_url('Landing_page/bom_view')?>">
    <script>
    window.print();
    <?php
    $file="Input BOM.xls";
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
      <h3 align=center style="color:grey;">Input BOM</h3>
      <!-- <img src="assets/images/demo/backgrounds/ipb.png" style="width : 100px;" ></img>
      <img src="assets/images/demo/backgrounds/logoipb.png" style="width : 150px;" ></img> -->
      </div>
              
      </div>
              
              <tr>
              <th valign="top">
                  Jenis Bom
               </th>
               <th valign="top">
                 No Dokumen
               </th>
               <th valign="top">
                  Tanggal
               </th>
               <th valign="top">
                  Kode Barang</th>
               <th valign="top">
                  Nama Barang
               </th>
               <th valign="top">
                  Jumlah Barang
               </th>
               <th valign="top">
                  Brg ada
               </th>
               

                </tr>
              
              <?php
              foreach ($ipb as $row) : ?>
              <tr>
                  <td><?= $row->jenis_bom ?></td>
                  <td><?= $row->no_dokumen ?></td>
                  <td><?= $row->tanggal ?></td>
                  <td><?= $row->kode_material ?></td>
                  <td><?= $row->nama_material ?></td>
                  <td><?= $row->ambil_barang ?></td>
                  <td><?= $row->total ?></td>
                
          <?php endforeach; 
          ?>
      </table>

    </body>
    </html>
      