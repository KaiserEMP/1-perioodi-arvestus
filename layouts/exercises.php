<!DOCTYPE html>
<html>
<head>
  <?php include "../components/html-head.php"; ?>
  <style type="text/css">
  .pilt {
    height: 250px;
    width: auto;
  }

  </style>
</head>

<body>
  <div id="site-container">
    <?php include "../components/site-header.php"; ?>

    <main id="site-body">
      <section id="site-content">
        <h2>Tingimuslause</h2>
        <?php 
          $random = mt_rand(100, 200); {
            if ($random > 150) {
              echo "$random " . "on suurem kui 150.";
            } elseif ($random < 150) {
                echo "$random " . "on väiksem kui 150.";
            }
          }

         ?>

        <h2>Juhuslik pilt</h2>
        <?php 
          echo '<img src="http://users.khk.ee/kaspar.naaber/svp/periood-1/arvestus/images/' . rand(1,12) . '.jpg">'

         ?>
          
        <h2>Kõikide piltide väljastamine</h2>
       

        <?php
          for ($images=1; $images < 13; $images++) { 
            echo '<img class="pilt" src="http://users.khk.ee/kaspar.naaber/svp/periood-1/arvestus/images/'.$images.'.jpg">';
          };

         ?>
      </section>
    </main>

    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>
