<!doctype html>
<html lang="es">

<head>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/bootstrap-grid.min.css" rel="stylesheet">
</head>

<body>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.js"></script>
    <?php include "../app/views/includes/header.php"; ?>
    <?php 
      $mvc = new MvcController();
      $mvc -> getPage();
    ?>
</body>

</html>