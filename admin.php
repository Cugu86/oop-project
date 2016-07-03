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
  <title>Admin Area</title>

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
          <li><a href="contact.php">Contact</a></li>
          <?php if(!empty($_SESSION['customer'])):  ?>
            <li><a href="logout.php?logout">Log Out</a></li>
          <?php endif;  ?>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="profile.php">
            <?php if(!empty($_SESSION['customer'])) 
            echo $_SESSION['customer']->getName()." ".  $_SESSION['customer']->getSurname();?> </a></li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header class=" header store " >
      <h1 class = "text-center">Admin Area</h1>  
      <hr>
    </header>

    <section class=" wrap productManager"  >
      <h2 class=" text-center sectionTitle " >Product Manager</h2>
      <h3 class="text-center" >Choose a category</h3>
      <div class="text-center radioButton " >
        <form action="insertProduct.php">
          <input type="radio" id="food" name="product" value='food' onclick="productType('food');" > Food 
          &nbsp;
          <input type="radio" id="eletronics" name="product" value="eletronics" onclick="productType('eletronics');" > Elettronics
        </form>

      </div>
      <div id="productInsertFood" class=" row text-center" style="display:none" >
       <div class="col-lg-6 col-centered">
        <h4 class="text-center sectionTitle " >Insert a product in the food category </h4>
        <form class="form-horizontal" action="insertProduct.php" method="post" >
          <div class="form-group">
            <label  class="col-sm-2 control-label">Name Product</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nameProduct" placeholder="Name Product" required >  
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Price</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="priceProduct" placeholder="Price" required >
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Quantity</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="quantityProduct" placeholder="Quantity" required >
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Producer</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="producerProduct" placeholder="Producers" required >
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Expiring date</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" name="expProduct" placeholder="Expiring date" required >
            </div>
          </div>
            <input type="hidden" name="productType" value="food">
            <button type="submit" class="btn btn-primary form-control"  >Insert Product</button>   
          </div>
        </form>
      </div>

      <div id="productInsertElet" class=" row text-center" style="display:none" >
      <div class="col-lg-6 col-centered">
      <h4 class="text-center sectionTitle " >Insert a product in the electronic category </h4>
        <form class="form-horizontal" action="insertProduct.php" method="post" >
          <div class="form-group">
            <label  class="col-sm-2 control-label">Name Product</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nameProduct" placeholder="Name Product">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Price</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="priceProduct" placeholder="Price">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Quantity</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" name="quantityProduct" placeholder="Quantity">
            </div>
          </div>
           <div class="form-group">
            <label class="col-sm-2 control-label">Brand</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="brandProduct" placeholder="Brand">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Watt</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="wattProduct" placeholder="Watt">
            </div>
          </div>
           <input type="hidden" name="productType" value="electronics">
         <button type="submit" class="btn btn-primary form-control">Insert Product</button>
        </form>
      </div>
      </div>

    </section>

    <section class=" wrap customerManager"  >
      <h2 class=" text-center sectionTitle " >Customer Manager</h2>

    </section>

    <?php include('parts/footer.php') ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
  </html>