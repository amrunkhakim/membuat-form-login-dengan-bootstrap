<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body style="background-color:#dfe4ea">
    <div class="col-md-4 col-md-offset-4 form-login">
    
    <?php
    /* handle error */
    if (isset($_GET['error'])) : ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
        </div>
    <?php endif;?>

        <div class="outter-form-login">
          <form action="check-login.php" class="inner-login" method="post">
            <h3 class="text-center title-login">Halaman Login </h3>
			<img style="margin-left:120px; border-radius:50px" src="assets/img/avatar5.png" class="img-thumbnail" width="100px" alt="">
                	<br/>
                	<br/>
				<div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                </div>
                <br>
                <input type="submit" class="btn btn-block btn-custom-green" value="LOGIN" />
                
                <br>
            </form>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>