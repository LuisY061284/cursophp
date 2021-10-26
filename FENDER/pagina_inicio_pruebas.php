<?php include 'contenido_bajos.php'?>
<?php require 'head.php' ?>
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
            <h1>BAJOS AMERICAN PERFORMER Y AMERICAN PROFESSIONAL II</h1>
      <p class="lead text-muted">Aqui mostramos todos los modelos de cada serie</p>
    </div>
  </section>
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
      <?php
          
          if (BAJOS[$producto]['serie'] == 'American Profesional II') {

            echo 
        
                  foreach (BAJOS as $producto ){
                    
                    echo
                    '<div class="col-md-3">
                      <div class="card mb-3 shadow-sm">
                    <div class="m-5"><a href="' . $producto["link"] . '"><img src="' . $producto['imgBig'] . '" class="img-fluid p-3"></a></div>

                          <div class="card-body">
                            <p class="0.5rem"><b>' . $producto['serie'] . ' ' . $producto['modelo'] . '</b></p>
                            
                            <p>' . $producto['precio'] . ' <span class="pl-2 ml-2">' . $producto['colores'] . '</p></span>   
                          </div>    
                        </div>
                        <div> 
                    </div>
                  </div>'
              ;
                }
              }
      ?>
        </div>
    </div>
  </div>
        

        
      </main>

      <?php require 'footer.php' ?>