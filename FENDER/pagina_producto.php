<?php include 'contenido_bajos.php'?>
<?php require 'head.php' ?>
<?php $refProducto = $_GET['numero']  ;
?>
</head>
<body>
<?php require 'header.php' ?>

      <main>
        <div class="container-fluid">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb migas">
              <li class="breadcrumb-item"><a href="#">Fender Bass Shop</a></li>
              <li class="breadcrumb-item"><a href="#">Bajos</a></li>
              <li class="breadcrumb-item"><a href="#">American Performance</a></li>
              <li class="breadcrumb-item active" aria-current="page">American Performance Jazz Bass</li>
            </ol>
          </nav>
        </div>
        <!--HASTA AQUI BREADCRUMBS-->
        <section class="jumbotron text-center">
          <div class="container">
            <h1>AQUI ESTÁ TU MODELO ELEGIDO</h1>
      
    </div>
  </section>
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
              <div class="col">
                <h1 class=" font-weight-bold"><?php echo BAJOS[$refProducto]['serie'] . ' ' . BAJOS[$refProducto]['modelo']?></h1>
                 
                <p><small> Nº Modelo <?php echo BAJOS[$refProducto]['numero'] ?></small></p>
              </div>  
      </div>
        <div class="row">
        <div class="col-md-8">
            <img src="<?php echo BAJOS[$refProducto]['imgPpal']?>" class="img-fluid">
          </div>
          <div class="col-md-4">

            <p><?php echo BAJOS[$refProducto]['precio']?></p>
            
            
          </div>
      </div> <!--fin de row -->
    
      </main>

      <?php require 'footer.php' ?>

      