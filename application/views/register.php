<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>assets/layout/styles/register2.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>assets/layout/styles/costume.css">
  <!-- 
    <img src="<?=base_url() ?>assets/images/ipb2.png" width="100px" style="margin-top: -30px; margin-left: 30px;">
  <img src="<?=base_url() ?>assets/images/STP_IPB.png" width="300px" style="margin-top: -30px; margin-left: -35px;">
  -->
</head>
<body>	
<div class="login-box">
  <h2>Register</h2>
  <form action="<?php echo base_url().'landing_page/proses_tambah_akun'; ?>" method="post">
    <div class="user-box">
      <input type="text" name="nama" required="">
      <label>Nama</label>
    </div>
    <div class="user-box">
        <input type="text" name="username" required="">
        <label>Username</label>
      </div>
    <div class="user-box">
      <input type="password"  id="myInput" name="password" required="">
      <label>Password</label>
      
    </div>
    <input type="checkbox" onclick="myFunction()"> <label style="color:white;">Show Password</label>
                        <script>
                        function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
                        </script><br><br>

        <select class="form-control select2bs4" name="level" style="  background-color: transparent !important; color: #fff;;">
            <option selected style="color: black;">Level</option>
            <option value="administrator" style="color: black;">Administrator</option>
            <option value="user" style="color: black;">User</option>
          </select>
    
     
          <button class="btn btn-info" type="submit" value="proses_tambah_akun" style="background-color: transparent !important; color:#fff;">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </button>
  </form>
</div>

</select>
</form>
</body>
</html>