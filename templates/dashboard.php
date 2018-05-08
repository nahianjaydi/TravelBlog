<?php include "includes/header.php"; ?>
  
    <main role="main">
      <div class="container">
        <h1 class="post-h4">Welcome <small><?php echo $userName; ?></small></h2>
        <hr>
        <br>
        <p>
          <a class="btn btn-dark" href="create_post.php" role="button">Add New Post</a>
        </p>
        <br>
        <br>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <h4>All your posts</h4>
            <hr>
            <br>
            <table class="table no-border table_text">
              <tbody>
              <?php foreach($postByUser as $post): ?>
                <tr>
                  <td><h6><a href="blog_post.php?id=<?php echo $post->id; ?>" class="text-dark"><?php echo $post->title; ?></a></h6></td>
                  <td><h6><?php echo date('d-m-Y', strtotime($post->date));?></h6></td>
                  <td>
                    <form style="display:inline;" method="post" action="dashboard.php">
                      <input type="hidden" name = "del_id" value="<?php echo $post->id; ?>">
                      <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                    </form>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <div class="col-md-5">
            <h4>Your personal information</h4>
            <hr>
            <br>
            <form method="post" action="dashboard.php">
              <div class="form-group row">
                <label for="name" class="col-sm-4 col-form-label">Name</label>
                <div class="col-sm-8">
                  <input type="text" readonly class="form-control-plaintext" id="name" name="name" value="<?php echo $userName; ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                  <input type="text" readonly class="form-control-plaintext" id="email" name="email" value="<?php echo $userEmail; ?>">
                </div>
              </div>
              <div class="form-group row">
                <label for="password" class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
              </div>
              <div class="form-group row">
                <label for="confirm_password" class="col-sm-4 col-form-label">Confirm password</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password">
                </div>
              </div>
              <div class="form-group text-center">
                <button type="submit" name="update_pass" class="btn btn-success">Change Password</button>
              </div>
            </form>
          </div>
        </div>
      </div> <!-- /container -->
    </main>

<?php include "includes/footer.php"; ?>


