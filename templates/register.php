<?php include "includes/header.php"; ?>

    <main role="main">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-5">
            <h2 class="text-center">Registration Form</h2>
            <hr>
            <div>
              <?php if($errorMsg): ?>
                <?php foreach ($errorMsg as $error): ?>
                  <p class="alert alert-danger"><?php echo $error; ?></p>
                <?php endforeach;?>
              <?php else: ?>
                <?php foreach ($successMsg as $success): ?>
                  <p class="alert alert-success"><?php echo $success; ?></p>
                <?php endforeach;?>
              <?php endif ?>
            </div>
            <form action="register.php" method="POST" class="form-margin">
              <div class="form-group">
                <label for="name">Name :</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
              </div>
              <div class="form-group">
                <label for="email">Email :</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
              </div>
              <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="confirm_password">Confirm Password :</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password">
              </div>
              <div class="form-group text-center">
                <button type="submit" name="register" class="btn btn-primary">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div> <!-- /container -->
    </main>

<?php include "includes/footer.php"; ?>