<!-- <div class="row no-gutter"> no-gutter removes the spacing between coloumns -->
    <!-- <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image" style="background-image:url('<?php //echo URL; ?>public/images/fullcar-01_2x.jpg');"></div>
    <div class="col-md-8 col-lg-6">
        <div class="login d-flex align-items-center py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-8 mx-auto">
                        <h3 class="login-heading mb-4">Welcome!</h3> -->
                        <!-- <button class="btn btn-lg btn-block btn-login text-uppercase font-weight-bold mb-2 btn-google"
                            type="submit">
                            <i class="fab fa-google m-1"></i>
                            Google Sign-up</button>
                        <br>
                        <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2 btn-facebook"
                            type="submit">
                            <i class="fab fa-facebook-f p-1"></i>
                            Facebook Sign-up
                        </button> -->
                        <!-- <div class="social-line text-center">
                            <a href="#" class="btn btn-neutral btn-facebook btn-just-icon">
                                <i class="fa fa-facebook-sqaure"></i>
                            </a>
                            <a href="#" class="btn btn-neutral btn-google btn-just-icon">
                                <i class="fa fa-google-plust"></i>
                            </a>
                        </div>
                        <p class="lead text-center">Or</p>
                        <form method="POST" action="register/register_standard">
                            
                            <div class="form-label-group">
                                <input type="text" name="inputFname" id="inputFname" class="form-control" placeholder="Forename" required autofocus>
                                <label for="inputFname">First Name</label>
                            </div>
                            
                            <div class="form-label-group">
                                <input type="text" name="inputLname" id="inputLname" class="form-control" placeholder="Last Name" required autofocus>
                                <label for="inputLname">Last Name</label>
                            </div>

                            <div class="form-label-group">
                                <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email Address" required autofocus>
                                <label for="inputEmail">Email Address</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password" required>
                                <label for="inputPassword">Password</label>
                            </div>

                            <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2"
                                type="submit">
                                Sign-up
                            </button>
                        </form>
                    </div>
                </div>
            </div> -->
        <!-- </div>
    </div>
</div> -->


<div class="page-header" style="background-image: url('<?php echo URL; ?>public/images/maxresdefault.jpg');">
    <div class="filter"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 ml-auto mr-auto">
          <div class="card card-register">
            <h3 class="title mx-auto">Welcome</h3>
            <div class="social-line text-center">
              <a href="<?php echo URL; ?>register/register_facebook" class="btn btn-neutral btn-facebook btn-just-icon">
                <i class="fa fa-facebook-square"></i>
              </a>
              <a href="<?php echo URL; ?>register/register_google" class="btn btn-neutral btn-google btn-just-icon">
                <i class="fa fa-google-plus"></i>
              </a>
              <a href="<?php echo URL; ?>register/register_google" class="btn btn-neutral btn-twitter btn-just-icon">
                <i class="fa fa-twitter"></i>
              </a>
            </div>
            <form class="register-form" method="post" action="register/register_standard">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="Email">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Password">
              <button class="btn btn-danger btn-block btn-round">Register</button>
            </form>
            <div class="forgot">
              <a href="#" class="btn btn-link btn-danger">Forgot password?</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>