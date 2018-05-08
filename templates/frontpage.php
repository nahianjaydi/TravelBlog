<?php include "includes/header.php"; ?>
  
    <main role="main">

      <div class="container">
        <div class="jumbotron c-jumbotron">
          <h2 class="display-3 j-h2">Adventure Awaits!</h1>
          <h3 class="j-h3">Share your story!!</h3>
          <p class="text-center">
            <a class="btn btn-dark btn-lg" href="register.php" role="button">Register &raquo;</a>
            <a class="btn btn-dark btn-lg" href="login.php" role="button">Login &raquo;</a>
          </p>
        </div>
      </div>

      <div class="container">
        <?php foreach ($blogPosts as $post): ?>
          <div class="row">
            <div class="col-md-3">
              <img class="img-fluid rounded small-img" src="images/travel_pic/<?php echo $post->dir_name; ?>" alt="">
            </div>
            <div class="col-md-9">
              <h4 class="post-h4"><?php echo $post->title; ?></h4>
              <small><?php echo $post->author; ?> <?php echo date('d-m-Y', strtotime($post->date));?></small>
              <p class="post-p">
              <?php $s = substr($post->story, 0, 300);
                    echo substr($s, 0, strrpos($s, " "));
              ?></p>
              <p><a class="btn btn-dark float-right" href="blog_post.php?id=<?php echo $post->id; ?>" role="button">Read more &raquo;</a></p>
            </div>
          </div>
          <br>
          <?php endforeach; ?>
      </div> <!-- /container -->
    </main>

<?php include "includes/footer.php"; ?>


