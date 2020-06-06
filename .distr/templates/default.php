<!DOCTYPE html>
<html lang="ru">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Rocket</title>
<meta property="og:title" content="Rocket">
<meta property="og:description" content="Rocket">
<meta property="og:url" content="//<?= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        {% include 'header/block.php' %}
        {% include 'main/block.php' %}
    </div><!-- wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.4.0/dist/lazyload.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
