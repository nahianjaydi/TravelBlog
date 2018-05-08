<?php include "includes/header.php"; ?>
    <main role="main">

      <div class="container">
        <div id="image-slider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
          <?php $count = 0; ?>
          <?php foreach($images as $image): ?>
            <?php if($count==0): ?>
              <div class="carousel-item active">
                <img class="d-block w-100" src="images/travel_pic/<?php echo $image->dir_name; ?>" alt="image">
              </div>
            <?php else: ?>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/travel_pic/<?php echo $image->dir_name; ?>" alt="image">
              </div>
            <?php endif; ?>
            <?php $count++; ?>
          <?php endforeach; ?>
          </div>
          <a class="carousel-control-prev" href="#image-slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#image-slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div> <!-- /container -->
      <br>

      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h4 class="post-h4"><?php echo $post->title; ?></h4>
            <small><?php echo $post->author; ?> <?php echo date('d-m-Y', strtotime($post->date));?></small>
            <p class="post-p"><?php echo nl2br($post->story); ?></p>
          </div>
          <div class="col-md-4">
            <div class=form-margin>
              <div data-skyscanner-widget="SearchWidget"></div>
              <script src="https://widgets.skyscanner.net/widget-server/js/loader.js" async></script>
            </div>
            <br>
            <div class="form-margin">
              <h4 class="post-h4">Recent posts</h4>
              <hr>
              <ul class="recent-li">
              <?php foreach ($blogPosts as $blogPost): ?>
                <li><a href="blog_post.php?id=<?php echo $blogPost->id; ?>" class="text-dark font-weight-bold"><?php echo $blogPost->title; ?></a></li>
              <?php endforeach; ?>
              </ul>
            </div>
            <br>
            <div>
              <iframe src="//www.google.com/maps/embed/v1/place?q=<?php echo $post->city; ?>
                  &zoom=13
                  &key=AIzaSyA5tPK-QMuH-RwUE8ulKUyMtU7ro4VqSaY">
              </iframe>
            </div>
          </div>
        </div>
        <br>
      </div> <!-- /container -->
    </main>

<?php include "includes/footer.php"; ?>


