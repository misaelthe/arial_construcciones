<!doctype html>
<html lang="es">

<head>
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link href="./css/bootstrap-grid.min.css" rel="stylesheet">
  <link href="./css/text-stylizer.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&family=Quicksand:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&family=Roboto+Slab&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/jquery.js"></script>
  <?php include "../app/views/includes/header.php"; ?>
  <?php
  $mvc = new MvcController();
  $mvc->getPage();
  ?>
  <?php include "../app/views/includes/footer.php"; ?>
</body>

</html>