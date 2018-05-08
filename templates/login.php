<?php include "includes/header.php"; ?>
 
    <main role="main">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-5">
            <h2 class="text-center">Log in</h2>
            <hr>
            <div>
              <?php if($errorMsg): ?>
                <?php foreach ($errorMsg as $error): ?>
                  <p class="alert alert-danger"><?php echo $error; ?></p>
                <?php endforeach;?>
              <?php endif ?>
            </div>
            <form class="form-margin" method="post" action="login.php">
              <div class="form-group">
                <label for="email">Email :</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
              </div>
              <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox"> Remember me
                </label>
              </div>
              <div class="form-group text-center">
                <button type="submit" name="login" class="btn btn-primary">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div> <!-- /container -->
    </main>

<?php include "includes/footer.php"; ?>