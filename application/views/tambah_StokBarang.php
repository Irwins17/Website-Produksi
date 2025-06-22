<form class="needs-validation" novalidate action="<?= site_url('tambah-stok') ?>" onsubmit="" method="post">
  <div class="modal fade" id="tambah-stok">
    <div class="modal-dialog modal-md">
      <div class="modal-content">

        <div class="modal-header">
          <h4 class="mt-2 ml-1 py-0 text">Tambah Stok Barang</h4>
          <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-md-7">
              <select class="custom-select form-control" name="id_barang" required>
                <option value="" disabled selected>Nama Barang</option>
                <?php foreach ($data_stok as $row) : ?>
                  <option value="<?php echo $row['id_barang'] ?>"><?php echo $row['nama_material'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            
            <div class="form-group col-md-5">
              <input type="number" class="form-control" name="jumlah" placeholder="Jumlah Barang" min="0" required>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="reset" class="btn btn-danger btn-icon-split">
            <span class="icon text-white-50">
              <i class="fas fa-times"></i>
            </span>
            <span class="text">Bersihkan</span>
          </button>

          <button type="submit" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
              <i class="fas fa-check"></i>
            </span>
            <span class="text">Submit</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</form>

<script type="text/javascript">
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
</script>