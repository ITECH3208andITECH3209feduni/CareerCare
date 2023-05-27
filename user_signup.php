<?php include("includes/header.php") ?>

<style>
  li a:hover {
    background-color: lightgray;


  }
</style>
<div class="container-fluid py-5" style="background-color: #7dc246;">
  <div class="card col-4 offset-4 p-5" style="background-color: white;">


    <div id="frmRegistration">



      <form class="text-center custom-form" action="registration_code.php" method="POST">

        <h1>NEW ACCOUNT?</h1>
        <div class="mt-5">

          <div class="form-input">
            <span>
              <i class="fa-solid fa-user"></i>
            </span>
            <input type="text" name="firstname" required id="firstname" placeholder="Firstname ">
          </div>

          <div class="form-input">
            <span>
              <i class="fa-solid fa-user"></i>
            </span>
            <input type="text" name="lastname" required id="lastname" placeholder="Lastname">
          </div>

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

          <div class="gender-tab">
            <h4>Gender:</h4>
            <label><input type="radio" name="gender" value="Male" required>Male</label>
            <label><input type="radio" name="gender" value="Female" required>Female</label=>
          </div>
        </div>


    </div>

    <div class="form-group">
      <button type="submit" name="create" class="btn btn-primary w-100">Submit</button>
    </div>
    </form>

    <a href="Login.php" class="text-center">Already have an account?</a>
  </div>
</div>

</div>

<style type="text/css">
  .ho:hover {
    background-color: lightgray;
  }
</style>

<?php include("includes/footer.php") ?>