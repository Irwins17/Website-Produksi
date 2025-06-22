<html>
<head>
  <meta charset="utf-8">
  <title>Login STPIPB</title>
  <link href="assets/layout/styles/login.css" rel="stylesheet" type="text/css" >
</head>

<body>
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
          <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
            <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
            </div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
            <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
            <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
            <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
            <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
            <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
            <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
            <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
          </div>
          <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
            <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
          </div>
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
             <!-- <img class="logo-stp" src="assets/images/bulet.png">
              <img class="logo-gambar" src="assets/images/logostp.png"> -->
              
             
              
                  <form class="user needs-validation" action="<?= site_url('login_backend') ?>" method="POST">

                    <div class="text-center">
                      <h3 align=center >Sign in</h3>
                    </div>

                          

                    <hr>
                    <div class="field padding-bottom--24">
                    <?php if ($this->session->flashdata('alert')) : ?>
                                <div class="alert <?= $this->session->flashdata('alert-class') ?> alert-dismissible text-white fade show" role="alert">
                                    <?= $this->session->flashdata('alert-message') ?>
                                   
                                </div>
                            <?php endif; ?>
                      <br>
                      <input type="text" class="<?php  if(form_error('username')){echo 'is-invalid';} ?>" id="username" placeholder="Username" name="username" value="<?= set_value('username')?>">
                    </div>
                    
                    <div class="field padding-bottom--24">
                      <input type="password" class="<?php if(form_error('password')){echo 'is-invalid';} ?>" id="password" placeholder="Password" name="password" value="<?= set_value('password')?>">
                    </div>
                    <input type="checkbox" onclick="myFunction()"> Show Password
                        <script>
                        function myFunction() {
                          var x = document.getElementById("password");
                          if (x.type === "password") {
                            x.type = "text";
                          } else {
                            x.type = "password";
                          }
                        }
                        </script><br><br>
                    <hr>  
                    <div class="field padding-bottom--24">
                    <input type="submit" >
                    </div>
                    <hr>
                  </form>

            </div>
          </div>
          <div class="footer-link padding-top--24">
            <span><a href=""></a></span>
            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
              <span><a href="#"></a></span>
              <span><a href="#"></a></span>
              <span><a href="#"></a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>