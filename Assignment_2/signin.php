<!--  adding header-->
<?php
    require './content/header.php';
   ?>
    <section class="signin-masthead">
      <div>
        <h3>CONFIDENTIAL INFORMATION, YOU HAVE TO SIGN UP FIRST.</h3>
      </div>
    </section>
    <main class ="main-signin text-center">
      <section class="col-sm-12 col-md-6 col-lg-6 mx-auto">
          <div>
          <h3>Sign in below</h3>
            <form method="post" action="./content/validate.php">
            <p><input class="form-control" name="username" type="text" placeholder="Username" required></p>
            <p><input class="form-control" name="password" type="password" placeholder="Password" required></p>
                <p>Register <a href="index.php">here!!!</a></p>
            <input class="btn btn-primary" type="submit" value="Login">
          </form>
          </div>
      </section>
    </main>
<!--Adding footer-->

  <?php
    require './content/footer.php';
  ?>
