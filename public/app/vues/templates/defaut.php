<?php

/*
 * ./app/vues/templates/defaut.php
 * TEMPLATE GENERAL
 * Zones dynamiques :
 *      - zoneTitre
 *      - zoneContenu
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include '../app/vues/templates/partials/head.php'; ?>
</head>

<body>
  <!-- Navigation -->
  <?php include '../app/vues/templates/partials/navigation.php'; ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <!-- Blog Entries Column -->
      <div class="col-md-8">
          <?php echo $zoneContenu; ?>
      </div>
    </div>
    <!-- /.row -->

    <hr>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include '../app/vues/templates/partials/footer.php'; ?>

  <!-- SCRIPTS -->
  <?php include '../app/vues/templates/partials/scripts.php'; ?>

</body>

</html>
