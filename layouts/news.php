<!DOCTYPE html>
<html>
<head>
  <?php include "../components/html-head.php"; ?>
</head>

<body>
  <div id="site-container">
    <?php include "../components/site-header.php"; ?>

    <main id="site-body">
      <section id="site-content">

          <?php  $uudis = 0;
                foreach ($blog_news as $blog_news) {
                if(++$uudis > 2) 
                  break;
                    echo '<article><h2 class="post-title">'.$blog_news["post_title"].'</h2>';
                    echo '<div class="post-excerpt">'.$blog_news["post_excerpt"].'</div>';
                    echo '<div class="post-body">'.$blog_news["post_body"].'</div></article>';
            };
          ?>

      </section>
    </main>

    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>
