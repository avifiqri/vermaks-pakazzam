<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vermaks-PakAzzam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script src="main.js"></script>
    <style>
        .content {
            margin-bottom:10%;
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
  .iklan {
      padding:20px;
  }
  form {
      margin-top:30px;
      margin-bottom:30px;
  }
  .card {
      margin-top:15%;
      margin-bottom:20%;
  }

    </style>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="<?= base_url('admin/') ?>">Vermak Pak-Azzam</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link " href="<?= base_url('admin')?>">Data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?= base_url('auth/logout')?>">Logout</a>
      </li>
    </ul>
  </div>
</nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card ">
                    <div class="card-header bg-warning">
                        <h2 class="text-center"> Update Data Vermak</h2>
                    </div>
                    <div class="card-body bg-primary">
                        <?php foreach($vermaks as $v) {?>
                        <form action="<?= base_url().'admin/update' ?>" method="post" >
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="hidden" name="id" class="form-control" value="<?= $v->id ?>">
                                <input type="text" value="<?= $v->name ?>" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="jenisVermak">Jenis Vermak</label>
                                <input type="text" name="jenis_vermak" value="<?= $v->jenis_vermak ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" name="harga" value="<?= $v->harga ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Status</label>
                                <select name="status" class="form-control" id="" value="<?= $v->status ?>">
                                <option >Belum Selesai</option>
                                <option >Sedang Proses</option>
                                <option >Sudah Selesai</option>
                                </select>
                           </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-warning btn-block "> Update </button>
                            </div>

                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="footer">
    <p>copyrigth &copy <?= date('Y') ?> Pak Azzam </p>
</div>
</body>
</html>