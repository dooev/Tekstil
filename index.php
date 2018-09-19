<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <title>Kandy</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/main.min.css">
  <meta name="yandex-verification" content="6cb648b3676c2adf" />
  
  <?php $text = 'упаковки';
      $utm_term = $_GET['utm_term'];
      if (!empty($utm_term)) {
        if ($utm_term == 'kartbox') {
          $text = 'коробок';
        }
}
?>
  <?php include 'scriptsMetrika.php'; ?>
  
  <?php include 'scriptsPHP.php'; ?>

</head>

<body>
  <noscript>
    <div><img src="https://mc.yandex.ru/watch/49695742" style="position:absolute; left:-9999px;" alt="" /></div>
  </noscript>
  <?php include '1_header.php'; ?>
  <?php include '2_main.php'; ?>
  <?php include '3_features.php'; ?>
  <?php include '4_products.php'; ?>
  <?php include '5_material.php'; ?>
  <?php include '6.0_individually.php'; ?>
  <?php include '9_offer.php'; ?>
  <?php include '6_steps.php'; ?>
  <?php include '7_cases.php'; ?>
  <?php include '8_lease.php'; ?>
  <?php include '9_offer.php'; ?>
  <?php include 'footer.php'; ?>
  <?php include 'modal.php'; ?>
  <?php include 'scripts.php'; ?>


  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <!-- fotorama.css  START-->
  <link href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
  <!-- slick.css START -->
  <link rel="stylesheet" type="text/css" href="slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />

</body>
</html>