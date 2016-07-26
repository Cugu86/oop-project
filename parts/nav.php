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
          <li class="active" ><a href="index.php">Home</a></li>
          <?php endif;  ?>
          <li><a href="store.php">Store</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li  ><a href="contact.php">Contact</a></li>
           <?php if(!empty($_SESSION['customer'])):  ?>
            <li><a href="logout.php?logout">Log Out</a></li>
          <?php endif;  ?>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>