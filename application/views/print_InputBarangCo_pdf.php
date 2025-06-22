<!DOCTYPE html>
<html>
    <head>
        <title>print</title>
        <link rel="stylesheet" type="text/css" href="print.css">
        <link href="<?=base_url() ?>assets/layout/styles/print.css" rel="stylesheet" type="text/css" media="all">
    </head>

    <a href="<?= base_url('Landing_page/print_co_pdf')?>">
</a>
   <script>
    window.print();
    </script>

<div style="" class="invoice-parent">
     <div class="logo-container">
          <div class="float-left"><img width="115" height="86" style="margin-left: -135px;"   src="assets/images/bulet.png"></div>
          <div class="float-left"><img width="115" height="190" style="margin-left: -30px; margin-top: -55px;" src="assets/images/logostp.png"></div>
          <div style="
          margin-top: -70px; 
          margin-right: -130px;" 
          class="float-right"><h1></h1></div>
         </div>
         <br clear="all" style="margin: 60px;">
         <div class="left-address">
          <div style="margin-left:30px">
          Gedung Teaching Industry, STP IPB<br>
        <br>
        Jl. Taman Kencana No. 3, Babakan , Bogor Tengah, Bogor - 16128<br>           
          </div>
         </div>

         <div class="right-address">

          <div class="float-right" style="padding-right :200px;">
          <br>
           <p> <p style="margin-top:-18px; margin-left: 360px;"> </p>No Form <P style="margin-top:-20px; margin-left: 100px;"> :</P> </p>
            <p> Revisi <P style="margin-top:-33px; margin-left: 100px;"><P style="margin-top:-20px; margin-left: 100px;">:</P></p>
          </div>
         </div>

         <br clear="all">
         <div id="bill_type">Input Barang CO </div>
        <hr>
        <div id="tin_cst_dll">
         <span style="margin-top: -16px; margin-left: -150px;" id="id-center">Alamat :</span>
        </div>
         <span style="margin-top: -16px;" class="float-left" id="id-left">Terima Dari :</span>

         <span style="margin-top: -16px; margin-right:150px;" class="float-right" id="id-right">Telp :</span>
        <hr>
         <table width="100%" border="1" cellspacing="0" cellpadding="0" class="invoice-related">
            <tbody><tr>
               <td valign="top">
                <p>No.STTB <P style="margin-top:-33px; margin-left: 100px;"> :</P> </p>
                 <p>No.PO <P style="margin-top:-33px; margin-left: 100px;"> :</P> </p>
                 <p>Tanggal  <P style="margin-top:-33px; margin-left: 100px;"> :</P> </p>
                 <p>No. S.J Supplier <P style="margin-top:-33px; margin-left: 100px;"> :</P> </p>
                 <p>No.Pol <P style="margin-top:-33px; margin-left: 100px;"> :</P> </p>
                 <p>Pengemudi <P style="margin-top:-33px; margin-left: 100px;"> :</P> </p>
                 
            </tr>
            
         </tbody></table>
         <p style="margin-bottom:-25px;">Barang-Barang Yang Sudah Kami Terima Sebagai Berikut :</p>
         <div id="replacement_period" style="visibility: hidden;">Product Replacement for the period 01-03-2014 to 31-03-2014</div>
         <table width="100%" border="1" align="left" cellspacing="0" cellpadding="0" class="invoice-related" style="margin-bottom: 50px;">
         <tbody><tr>
                  <td><b><b>Kode Produk</td>
                  <td><b><b>Nama Produk</td>
                  <td><b><b>Stok Barang</td>

                </tr> 
              </thead>
              
              <?php
              foreach ($ipb as $row) : ?>
              <tr>
                  <td><?php echo $row['kode_barang'] ?></td>
                  <td><?php echo $row['nama_barang'] ?></td>
                  <td><?php echo $row['stok_order'] ?></td>
                
          <?php endforeach; 
          ?>
      </table>

            <table width="100%" border="1" cellspacing="0" cellpadding="0" class="invoice-related">
               
                  <tr>
                     <th valign="top"><br>
                        <strong id="to_name">Pengirim</strong><br><br><br>
                        <div id="to_name">...............</div><br> 
                     </th>
                     <th valign="top"><br>
                        <strong id="to_name">Diperiksa</strong><br><br><br>
                        <div id="to_name">...............</div><br>
                     </th>
                     <th valign="top"><br>
                        <strong id="to_name">Diterima</strong><br><br><br>
                        <div id="to_name">...............</div><br>
                     </th>
                  </tr>
               </tbody> 
         </tbody></table>
         

         <br clear="all">

        <br clear="all">

         <div id="aura-signature">
          Yang Terlampir Dibawah Ini,<br><br><br>
            <br>
            <b>______________________</b>
         </div>

      </div>
</body>
</html>