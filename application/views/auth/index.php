<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login - Pak Azzam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    .card {
        padding:20px;
        margin-top: 15%;
    }
    .card-title {
        font-family: sanserif;
    }
    .body {
        background: #ff8400;
    }
    .button {
        background: #ff8400;

    }
    .footer {
    position: fixed;
    padding:20px;
    text-align: center;
    background: black;
    color:white;
    left: 0;
   bottom: 0;
   width: 100%;

  }
</style>
</head>
<body class="body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-title">
                    <?= $this->session->flashdata('message'); ?>

                        <h2 class="text-center">Login</h2>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('Auth') ?>" method="post">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" value="<?= set_value('email') ?>" >
                                <small class="text-danger "><?=form_error('email')?></small>      

                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" id="myInput" name="password">
                                <small class="text-danger "><?=form_error('password')?></small>      

                                <input type="checkbox" onclick="myFunction()">Show Password
                            </div>
                         
                            <div class="form-group">
                                <button type="submit" class="button btn btn-block">Login</button>
                            </div>
                        </form>
                        <a href="<?= base_url('auth/subscribe') ?>">
                            <hr>
                            <p class="text-center">Silahkan Subscibe</p>
                        </a>
                        <hr>
                        <a href="<?= base_url('Product') ?>">

                            <p class="text-center">Kembali</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
    <p>copyrigth &copy <?= date('Y') ?> Pak Azzam </p>
</div>

<script>
    function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
    
</body>
</html>