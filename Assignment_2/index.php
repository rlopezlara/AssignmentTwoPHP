<!--adding header-->
  <?php require('./content/header.php');
  ?>

<!--index contents-->
  <main>
    <section class="masthead">
      <div>
        <h1>Join to our community</h1>
      </div>
    </section>
    <section class="form-row row">
      <div id="main-1"  class="col-sm-12 col-md-6 col-lg-6">
        <h3>CREATE AN ACCOUNT.</h3>
        <form method="post" action="save-admin.php">
        	<p><input class="form-control" name="first_name" type="text" placeholder="First Name" required></p>
        	<p><input class="form-control" name="last_name" type="text" placeholder="Last Name" required ></p>
        	<p><input class="form-control" name="age" type="number" placeholder="Your Age" required ></p>
          <p><input class="form-control" name="email" type="email" placeholder="Email" required ></p>
          <p><input class="form-control" name="username" type="text" placeholder="Username" required ></p>
          <p><input class="form-control" name="password" type="password" placeholder="Password" required ></p>
        	<p><input class="form-control" name="confirm" type="password" placeholder="Confirm Password" required></p>
          <input class="btn btn-light" type="submit" name="submit" value="Register">
        </form>
      </div>
    </section>
<!--Special button setting -->
      <section class="contact-CTA">
          <h3>IF YOU ARE MEMBER, SIGN IN HERE!</h3>
          <button id="modalBtn">SIGN IN</button>

          <div id="ContactModal" class="modal">

              <div class="modal-content">
                  <span class="close">&times;</span>
                  <form method="post" action="./content/validate.php">
                      <h4>ENTER YOUR INFORMATION</h4>
                      <div>
                          <input type="text" name="username" placeholder="Username" required>
                      </div>
                      <div>
                          <input type="password" name="password" placeholder="Password" required>
                      </div>
                      <div>
                          <input type="submit" value="Submit" name="Login">
                      </div>
                  </form>
              </div>
          </div>
      </section>
      <script>
//     Button effect
          var modal = document.getElementById("ContactModal");
        
          var btn = document.getElementById("modalBtn");
         
          var span = document.getElementsByClassName("close")[0];
          
          btn.onclick = function() {
              modal.style.display = "block";
          }
         
          span.onclick = function() {
              modal.style.display = "none";
          }
       
          window.onclick = function(event) {
              if (event.target == modal) {
                  modal.style.display = "none";
              }
          }
      </script>
  </main>
<!--adding footer-->
<?php require('./content/footer.php'); ?>
