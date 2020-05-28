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
         .img-hover-zoom--slowmo  {
  transform-origin: 50% 65%;
  transition: transform 5s, filter 3s ease-in-out;
  filter: brightness(100%);
}

/* The Transformation */
.img-hover-zoom--slowmo:hover  {
  filter: brightness(100%);
  transform: scale(5.0);
}
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
  .table {
      margin-top:20px;
      margin-bottom:20%;
      padding:20px;
  }
  .input-group {
      margin-top:10%;
  }

    </style>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="<?= base_url('admin') ?>">Vermak Pak-Azzam</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link " href="<?=base_url('admin/create') ?>"><i class="fas fa-plus"></i> Create Data</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="<?=base_url('auth/logout') ?>">Logout</a>
        </li>
    </ul>
  </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12  bg-primary">
        <div class="input-group">
  <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
  <div class="input-group-append">
    <button type="button" class="btn btn-warning">Search</button>
  </div>
</div>
<?= $this->session->flashdata('message'); ?>

   <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Jenis Vermak</th>
      <th scope="col">Harga</th>
      <th scope="col">Gambar</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
      <?php 
      $no = 1;
      foreach ($vermaks as $v) :?>
    <tr>
        <th scope="row"><?= $no++ ?></th>
      <td><?= $v->name ?></td>
      <td><?= $v->jenis_vermak ?></td>
      <td>Rp <?= number_format($v->harga,0,".",",") ?></td>
      <td class="img-hover-zoom--slowmo">
      <img src="<?= base_url().'/uploads/'.$v->gambar ?>" width="50px" height="50px">
    </td>

      <td><?= $v->status ?></td>
      <td> <?= anchor('admin/hapus/'.$v->id, '<div class="btn btn-danger">Hapus </div>') ?></td> 
      <td> <?= anchor('admin/edit/'.$v->id, '<div class="btn btn-info">Update </div>') ?></td> 

</tr>

    <?php endforeach ?>

   
  </tbody>
</table>
        </div>
    </div>
</div>
<div class="footer">
    <p>copyrigth &copy <?= date('Y') ?> Pak Azzam </p>
</div>
</body>
</html>