<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,500,600,700|IBM+Plex+Serif:500,600" rel="stylesheet">


  <?= css('assets/css/foundation.min.css') ?>
  <?= css('assets/css/foundation.min.css') ?>
  <?= css('assets/css/animate.css') ?>
  <?= css('assets/css/index.css') ?>
  <?= css('assets/css/projects.css') ?>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script async="" src="//www.google-analytics.com/analytics.js"></script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72365119-1', 'auto');
  ga('send', 'pageview');

  </script>

</head>
<body>

  <header class="header wrap wide" role="banner">
    <!-- <p class="marquee"><span>I'm currently looking for an internship!</span></p> -->
    <!-- <div class="nav_wrapper grid-container">
      <div class="nav grid-x">
        <div class="cell large-6">
            <a href="<?= url() ?>" rel="home"><?= $site->title()->html() ?></a>
            <a href="<?= url() ?>">❣</a>
        </div>
        <div class="cell large-6">
          <div class="grid-x grid-margin-x align-right">
            <div class="nav_item cell large-2">
              <a href="#">About</a>
            </div>
            <div class="nav_item cell large-2">
              <a href="#">Contact</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </header>
