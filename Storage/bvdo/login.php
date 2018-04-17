<?php
   include("php/config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT usersId FROM tblUsers WHERE usersUsername = '$myusername' and usersPassword = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         header("location: /bvdo/index.php");
      }else {
         $error = "Verkeerde naam en/of wachtwoord!";
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Admin | Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script>
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
          <a class="navbar-brand" href="#">Bureau van den Oever</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center"> Admin <small>Login</small></h1>
                </div>
            </div>
        </div>
    </header>
    
    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form id="login" action="" class="well" method="post">
                        <div class="form-group">
                            <label>Gebruikersnaam</label>
                            <input type="text" name="username" class="form-control" placeholder="Gebruikersnaam">
                        </div>
                        <div class="form-group">
                            <label>Wachtwoord</label>
                            <input type="password" name="password" class="form-control" placeholder="Wachtwoord">
                        </div>
                        <button type="submit" class="btn btn-default btn-block">Login</button>
                        <span><?php echo $error; ?></span>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
       </div>
      </div>
    <?php include('includes/footer.php'); ?>
