<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/general.css">
</head>
<?php

    $email = $_POST['email'];
    if((!isset($email)) or (strlen($email)>50))
    {
      header("Location: index.html");
    }



    require '../conn/acc.php';

    $sql = "INSERT INTO newsletter (email)
    VALUES ('".$email."')";
    $result = mysqli_query($conn,$sql);

    echo '<div style="padding:20px;"><p>OK!</p>';
    echo '<a href="index.html">Back!</a></div>';

 ?>
</html>
