<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vermaks-PakAzzam</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src"https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

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
  .example {
      margin-top:20px;
      margin-bottom:20%;
  }
  .card {
      margin-top:15%;
      margin-bottom: 5%;
  }
    .input-group {
        margin-top:15%;
    }
    .img{
        float:right;
    }
    .button1 {
        margin-top:10%;
        bottom: 0;
        left: 2%;
        width: 200px;
    }
    h2{
        font-size:50px;
        margin-top:10%;
    }
    </style>
</head>
<body>
<nav class="navbar fixed-top  navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="<?= base_url('product') ?>">Vermak Pak-Azzam</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav navbar-nav ml-auto">
        
        <li class="nav-item">
            <a class="nav-link " href="<?=base_url('auth/subscribe') ?>">Subscribe</a>
        </li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
    <div class="row">

<div class="col-lg-4">
<div class="card">
    <div class="card-header bg-warning">
        <h3 class="text-center">Belanja Di KTL-Aparel</h3>
    </div>
    <div class="card-body bg-primary">
        <p class="text-center">Di KTL-Aparel Menyediakan Aneka Kemeja dan Daster </p>
        <p>Dapatkan harga murah cuman di KTL-Aparel. Silahkan bandingkan.</p>
        <button class="button1 btn btn-warning  ">Kunjungi</button>
        <img class="img" src="<?= base_url('img/boarding.jpg')?>" alt="" >
    </div>
</div>

</div>

  <div class="col-lg-8 bg-primary" >

    <h2 class="text-center"> Data Vermak Pak Azzam </h2>

  <div class="example">

      <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Jenis Vermak</th>
                    <th>Harga</th>
                    <th> Status</th>
                    <th>Picture</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                    <?php 
                        $no = 1;
                        foreach ($vermaks as $v) :?>
                        <tr>
                        <th><?= $no++ ?></th>
                        <td><?= $v->name ?></td>
                        <td><?= $v->jenis_vermak ?></td>
                        <td>Rp <?= number_format($v->harga,0,".",",") ?></td>
                        <td><?= $v->status ?></td>
                        <td ><img class="img-hover-zoom--slowmo" src="<?= base_url().'/uploads/'.$v->gambar ?>" width="50px" height="50px"></td> 
                        <td><?= date(' d/F/Y', $v->created_at) ?></td>

                        </tr>

                    <?php endforeach ?>
            </tbody>
            <tfoot>
                <tr>
                     <th>No</th>
                    <th>Name</th>
                    <th>Jenis Vermak</th>
                    <th>Harga</th>
                    <th> Status</th>
                    <th>Picture</th>
                    <th>Tanggal</th>
                </tr>
            </tfoot>
        </table>
  </div>

        </div>
    </div>
</div>

<div class="contact">
    <i class=""></i>
</div>
<div class="footer">
    <p>copyrigth &copy <?= date('Y') ?> Pak Azzam </p>
</div>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
</html>