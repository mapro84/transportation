<!DOCTYPE html>
<html>
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="public/css/main.css" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script type="text/javascript" src="public/js/javascript-utils.js"></script>
<script type="text/javascript" src="public/js/main.js"></script>
<title>Fly the world Company</title>
</head>

<body class="bg-light">
  <nav class="navbar navbar-header navbar-expand-lg navbar-light bg-light">
    <div class="head-menu navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li>
        <a class="navbar-brand" href="index.php?page=home" ><img src="public/img/fly-airline.png" title="Boarding Cards"></a>
        </li>
        <li>
        <a class="navbar-brand" href="#"><img src="public/img/blue-airline.png" title="Blue airline"></a>
        </li>
        <li>
        <a class="navbar-brand" href="#"><img src="public/img/airfrance.png" title="Air France"></a>
        </li>
        <li>
        <a class="navbar-brand" href="#"><img src="public/img/borntofly.png" title="Born to fly"></a>
        </li>
      </ul>
    </div>
  </nav>
  <div id="content" class="container-fluid">
    <main role="main" class="container">
    <?php
      echo $content;
    ?>
    </main>
  </div>
</body>
</html>
