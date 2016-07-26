<?php
include_once('classAutoloader.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Buy my products</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
  <!-- Custom -->
  <link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

  <nav class="navbar navbar-inverse navbar-fixed-top  ">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="">BuyMe!</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
        <?php if(!isset($_SESSION['customer'])):  ?>
          <li><a href="index.php">Home</a></li>
          <?php endif;  ?>
          <li><a href="store.php">Store</a></li>
          <li class="active" ><a href="gallery.php">Gallery</a></li>
          <li><a href="contact.php">Contact</a></li>
           <?php if(!empty($_SESSION['customer'])):  ?>
            <li><a href="logout.php?logout">Log Out</a></li>
          <?php endif;  ?>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <header class=" header store " >
    <h1 class="text-center" > Product Gallery</h1>
  </header>

  <section class=" wrap gallery"  >

    <ul id="imageGallery" >
    <?php for($i=1;$i<=10;$i++):  ?>
     <li>
      <a href="<?php echo 'img/'.$i.'.jpeg'  ?>"><img src="<?php echo 'img/'.$i.'.jpeg'?>"  alt = "<?php echo 'Photo '.$i  ?>"  width="150" ></a>
     </li>
    <?php endfor; ?>
    </ul>
   
  </section>

<?php include('parts/footer.php') ?>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/gallery.js"></script>

</body>
</html>