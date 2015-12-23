<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo APP_NAME ?> | Log in</title>
    <!--Jquery library-->
    <script src="/assets/js/jquery-1.11.2.min.js"></script>
    

    <!-- Bootstrap core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
  </head>
  <body>

    <div class="login-form">
        <h2>LOG IN</h2>
        <?php if($data!==''){echo '<p>Pogresan e-mail i/ili lozinka!</p>';} ?>
        <form action="/login" method="post">
        <label>Username</label>
        <input type="text" name="name" required="" class="form-control">
        <label>Password</label>
        <input type="password" name="password" required="" class="form-control">
        <hr>
        <input type="submit" value="LOG IN" class="btn btn-primary">
        </form>
    </div>
  </body>
</html>

