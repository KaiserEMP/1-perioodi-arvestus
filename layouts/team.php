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
          <?php 
            echo teammembers('Kaspar Naaber', 'kaspar.naaber@khk.ee', 'Arvutid');
            echo teammembers('Peeter Kartul', 'peeter.kartul@khk.ee', 'Jalgrattad');
            echo teammembers('Erki Nool', 'erki.nool@khk.ee', 'Jalgpall');
            echo teammembers('Timo Tigu', 'timo.tigu@khk.ee', 'Raamatud');
            echo teammembers('Silver Kuu', 'silver.kuu@khk.ee', 'Peod');
            echo teammembers('Tauno Päike', 'tauno.paike@khk.ee', 'PHP');
            echo teammembers();
          ?>
      </section>
    </main>

    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>
