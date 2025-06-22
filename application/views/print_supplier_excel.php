<html>
    <head>

    <title>STPIPB</title>
    
<link href="<?=base_url() ?>assets/layout/styles/costume.css" rel="stylesheet" type="text/css" >

    </head>
    <body>

    

    <a href="<?= base_url('Landing_page/suplier_view')?>">
    <script>
    window.print();
    <?php
    $file="Barang Dari Supplier.xls";
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
      <h3 align=center style="color:grey;">Barang Dari Supplier</h3>
      <!-- <img src="assets/images/demo/backgrounds/ipb.png" style="width : 100px;" ></img>
      <img src="assets/images/demo/backgrounds/logoipb.png" style="width : 150px;" ></img> -->
      <tr>
               <th valign="top">
                  Nama Suplier
               </th>
               <th valign="top">
                  Kode Barang
               </th>
               <th valign="top">
                  Nama Barang
               </th>
               <th valign="top">
                  Terima/Tolak </th>
               <th valign="top">
                  Tanggal
               </th>
               <th valign="top">
                  Barang Masuk
               </th>
               <th valign="top">
                  Stok
               </th>
               
           
               <?php
              foreach ($ipb as $row) : ?>
              <tr>
                  <td><?= $row->nama_suplier ?></td>
                  <td><?= $row->kode_material ?></td>
                  <td><?= $row->nama_material ?></td>
                  <td valign="top"> <div class="packing"></div> </td> 
                  <td><?= $row->tanggal ?></td>
                  <td><?= $row->barang_masuk ?></td>
                  <td><?= $row->total ?></td> 
                
          <?php endforeach; 
          ?>
                      
      </table>

    </body>
    </html>
      