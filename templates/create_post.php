<?php include "includes/header.php"; ?>

    <main role="main">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-7">
            <h2 class="text-center post-h4">Publish your story!</h2>
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
            <form action="create_post.php?processed=1" method="POST" class="form-margin" enctype="multipart/form-data">
              <div class="form-group">
                <label for="title">Post title :</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php echo isset($_POST['title']) ? $_POST['title'] : ''; ?>">
              </div>
              <div class="form-group">
                <label for="city">Traveled city :</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="City" value="<?php echo isset($_POST['city']) ? $_POST['city'] : ''; ?>">
              </div>
              <div class="form-group">
                <label for="story">Your Story:</label>
                <textarea class="form-control" rows="6" id="story" name="story">
                  <?php echo isset($_POST['story']) ? htmlentities($_POST['story']) : ''; ?>
                </textarea>
                <script>CKEDITOR.replace( 'story' );</script>
              </div>
              <div class="form-group">
                <label for="upload_pic">Upload pictures</label>
                <input type="file" class="form-control-file" id="upload_pic" name="upload_pic[]" accept="image/*" aria-describedby="fileHelp" multiple>
                <small id="fileHelp" class="form-text text-muted">Allowed image types are "jpeg", "jpg", "png" , indivisual size should be less then 2mb <br> and total file size should be less then 10MB.</small>
              </div>
              <div class="form-group text-center">
                <button type="submit" name="submit" class="btn btn-primary">Publish</button>
              </div>
            </form>
          </div>
        </div>
      </div> <!-- /container -->
    </main>

<?php include "includes/footer.php"; ?>