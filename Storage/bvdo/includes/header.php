<?php
    include('php/session.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Admin | <?php echo $page_title; ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.0/jquery.fancybox.min.css" type="text/css" media="screen" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </head>

  <body>
   <div id="wrap">
    <div id="main" class="clear-top">
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Bureau van den Oever</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li id="menuItem1"><a href="index.php">Dashboard</a></li>
            <li id="menuItem2"><a href="pages.php">Websites</a></li>
            <li id="menuItem4"><a href="/bvdo/formulieroverview.php">Formulieren</a></li>
            <li id="menuItem6"><a href="/bvdo/inzendingen.php">Inzendingen</a></li>
            <li id="menuItem5"><a href="users.php">Gebruikers</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welkom, <?php echo $user_check; ?></a></li>
            <li><a href="/bvdo/php/logout.php">Uitloggen</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1><span class="glyphicon glyphicon-cog" aria-hidden="true" id="headerIconDashboard"></span> <?php echo $page_title; ?> <small>Beheren</small></h1>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>
    </header>
    
    <section id="breamcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="active"><?php echo $page_title; ?></li>
            </ol>
        </div>
    </section>