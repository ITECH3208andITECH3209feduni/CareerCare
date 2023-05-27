<?php include("includes/header.php") ?>

<style>
  li a:hover {
    background-color: lightgray;


  }
</style>

<div class="container-fluid py-5" style="background-color: #7dc246;">
  <div class="card col-4 offset-4 p-5" style="background-color: white;">

    <div id="frmRegistration">


      <form class="text-center custom-form" method="POST" action="login_code.php">

        <h1>LOGIN</h1>
        <div class="mt-5">


          <div class="form-input">
            <span>
              <i class="fa-solid fa-envelope"></i>
            </span>
            <input type="email" name="email" required id="email" placeholder="Email ">
          </div>

          <div class="form-input">
            <span>
              <i class="fa-solid fa-lock"></i>
            </span>
            <input type="password" name="password" required id="pwd" placeholder="Password">
          </div>


          <div class="form-group">
            <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
          </div>
          <div class="d-flex justify-content-between mt-5">
            <a href="reset_password.php?role=user">Forgot Password?</a>
            <a href="user_signup.php">Don't have an account?</a>
          </div>
        </div>
      </form>

    </div>
  </div>

</div>
</div>


<style type="text/css">
  .ho:hover {
    background-color: lightgray;
  }
</style>


<?php include("includes/footer.php") ?>