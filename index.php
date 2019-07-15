<?php
include_once 'inc/Database.php';
//include_once 'views/user/switch.php';
$db = new Database();
?>
<!DOCTYPE html>
<html>
<head>
  <title>PPDB Online</title>
  <link rel="icon" href="asset/foto/logo.png" type="image/icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shring-to-fit=no">
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset/css/style.css">
  <link rel="stylesheet" href="asset/css/animate.css">
  <link href="asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <style type="text/css">
  div.jumbotron{
    -webkit-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    background-size: 100% 100%;
    color: white;
    background-repeat: no-repeat;

  }
  .footer{
    padding: 2.5rem 0;
    color: white;
    border-top: .05rem solid #e5e5e5;
    text-align: center;
  }
  .footer p:last-child{
    margin-bottom: 0;

  }
  .tentang{
    margin: 5rem 0;

  }
  .tentang-heading{
    font-weight: 300;
    line-height: 1;
    letter-spacing: -.05rem;

  }
  .btn-warning{
    color: white;
  }
  @keyframes rotateIn {
    from {
      transform-origin: center;
      transform: rotate3d(0, 0, 1, -360deg);

    }

    to {
      transform-origin: center;
      transform: none;

    }
  }

  .a:hover{
    animation-name: rotateIn;
  }
  .iframe-container{
    position: relative;
    width: 100%;
    padding-bottom: 56.25%;
  }
  .iframe-container > *{
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    margin: 0;
    padding: 0;
    height: 100%;
    width: 100%;
  }
  .c{
    margin-bottom: 20px;
  }

</style>
</head>
<body>
  <body  data-spy="scroll" data-target=".navbar" data-offset="50">
<?php include 'views/user/header.php';
?>
<main class="container">
<?php
$cek  = $db->select("Select * from setting where id=?", [1]);
$cara = $cek['kunci'];
if ($cara == "1") {
	include 'views/user/cara.php';

}
?>
     <?php
include 'views/user/tentang.php';
?>
     <?php
include 'views/user/kontak.php';
?>
   </main>
   <footer class="footer bg-dark">
    <p>&copy; 2018 zeref.weismann.inc All right reserverd</p>
    <p><?php echo $nama;?></p>
    <p><a href="#">Back to Home</a></p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="asset/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.a').hover(function(){
        $(this).addClass('animated bounce');
      });
    });

  </script>
</body>
</html>
