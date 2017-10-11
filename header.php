<!DOCTYPE HTML>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Artur Banaszkiewicz<?php echo ($name == 'biografia') ? ' - Biografia' : ""; ?></title>
  <meta name="description" content="Oficjalna strona Artura Banaszkiewicza - skrzypka, kompozytora, aranżera.">
	<meta name="keywords" content="artur, banaszkiewicz, skrzypce, kompozytor, violin">
	<meta name="author" content="Marcin Antkowiak">

  <link rel="alternate" hreflang="en" href="#">

  <meta name="viewport" content="width=1200, height=device-height, initial-scale=, user-scalable=yes">

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&amp;subset=latin-ext">
  <script src="https://apis.google.com/js/platform.js"></script>
  <!--[if lt IE 9]>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
  <![endif]-->
  <?php echo ($name == 'wideo') ? '<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="js/mylist-player.js"></script>
  <link rel="stylesheet" href="css/mylist-player.css">
' : ""; ?>
<?php echo ($name == 'zdjecia') ? '<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js"></script>
' : ""; ?>
</head>
<body>
  <div class="container">
    <header>
      <a href="?"><div class="logo"><h1>AV</h1></div></a>
      <nav class="topnav">
        <ol>
          <li><a<?php echo ($name == 'index') ? ' class="active"' : ""; ?> href="?">Strona Główna</a></li>
          <li><a<?php echo ($name == 'biografia') ? ' class="active"' : ""; ?> href="?biografia">Biografia</a></li>
          <li><a<?php echo ($name == 'wieczor_w_krainie_czardasza' || $name == 'fantastic' || $name == 'international' || $name == 'orchestra') ? ' class="active"' : ""; ?> href="#">Propozycje koncertowe</a>
            <ul>
              <li><a href="?wieczor_w_krainie_czardasza">Wieczór w krainie czardasza</a></li>
              <li><a href="?fantastic_violin">Fantastic Violin</a></li>
              <li><a href="?miedzynarodowy_turniej_mistrzow">Międzynarodowy turniej mistrzów</a></li>
              <li><a href="?repertuar_z_orkiestra">Repertuar z orkiestrą</a></li>
            </ul>
          </li>
          <li><a<?php echo ($name == 'arabesque_overnight') ? ' class="active"' : ""; ?> href="#">Kompozycja/Dyskografia</a>
            <ul>
              <li><a href="?arabesque_overnight">Arabesque Overnight</a></li>
            </ul>
          </li>
          <li><a<?php echo ($name == 'zdjecia' || $name == 'wideo') ? ' class="active"' : ""; ?> href="#">Media</a>
            <ul>
              <li><a href="?zdjecia">Zdjęcia</a></li>
              <li><a href="?wideo">Wideo</a></li>
            </ul>
          </li>
          <li><a<?php echo ($name == 'kontakt') ? ' class="active"' : ""; ?> href="?kontakt">Kontakt</a></li>
        </ol>
      </nav>
      <div class="langnav">
        <ul>
          <li><a href="?" hreflang="pl">PL</a>
          </li>
          <li><a href="#" hreflang="en">EN</a>
          </li>
        </ul>
      </div>
    </header>
    <main>
