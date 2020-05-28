<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Vermak-PakAzzam</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
  
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
h4 {
  font-weight: 200;
  font-size: 20px;
  font-style: italic;
  font-family: sanserif;
}
  
.shimmer {
  font-family: "Lato";
  font-weight: 300;
  font-size: 3em;
  margin: 0 auto;
  padding: 0 140px 0 0;
  display: inline;
  margin-bottom: 0;
}
.shimmer {
  text-align: center;
  color: rgba(255,255,255,0.1);
  background: -webkit-gradient(linear, left top, right top, from(#222), to(#222), color-stop(0.5, #fff));
  background: -moz-gradient(linear, left top, right top, from(#222), to(#222), color-stop(0.5, #fff));
  background: gradient(linear, left top, right top, from(#222), to(#222), color-stop(0.5, #fff));
  -webkit-background-size: 125px 100%;
  -moz-background-size: 125px 100%;
  background-size: 125px 100%;
  -webkit-background-clip: text;
  -moz-background-clip: text;
  background-clip: text;
  -webkit-animation-name: shimmer;
  -moz-animation-name: shimmer;
  animation-name: shimmer;
  -webkit-animation-duration: 2s;
  -moz-animation-duration: 2s;
  animation-duration: 2s;
  -webkit-animation-iteration-count: infinite;
  -moz-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  background-repeat: no-repeat;
  background-position: 0 0;
  background-color: #222;
}
@-moz-keyframes shimmer {
  0% {
    background-position: top left;
  }
  100% {
    background-position: top right;
  }
}
@-webkit-keyframes shimmer {
  0% {
    background-position: top left;
  }
  100% {
    background-position: top right;
  }
}
@-o-keyframes shimmer {
  0% {
    background-position: top left;
  }
  100% {
    background-position: top right;
  }
}
@keyframes shimmer {
  0% {
    background-position: top left;
  }
  100% {
    background-position: top right;
  }
}
.button {
  border-radius:40px;
  width:50%;
  margin-left:30px;
  padding:10px;
  height:50px
}

</style>
</head>
<body>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 280"><path fill="#ff8400" fill-opacity="1" d="M0,288L60,282.7C120,277,240,267,360,250.7C480,235,600,213,720,208C840,203,960,213,1080,229.3C1200,245,1320,267,1380,277.3L1440,288L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
  <div class="container">
  <div class="row">
 
    <div class="col-sm-8">
    <div class="text-center">
    <h1 class="shimmer">
      Vermaks Pak Azzam
    </h1>
    </div>

    <h4 >
    Untuk mempermudah melihat vermakan yang sudah jadi maka, Kami Vermak Pak Azzam membuat suatu platform untuk mempermudah anda.
    </h4>
<br>
<a href="<?= base_url('Product/index') ?>">
    <button class="button btn btn-warning">Mulai</button>
</a>
    </div>
    <br>
    <div class="col-sm-4">
    <img class="img-responsive center-block" src="http://images.clipartpanda.com/tailor-clipart-0511-1009-3018-1541_Vintage_Sewing_Machine_Seamstress_Equipment_clipart_image.jpg" alt="">
    </div>

  </div>
  </div>
  
  
<div class="footer">
    <h5>copyrigth &copy <?= date('Y') ?> Pak Azzam </h5>
</div>
</body>
</html>

