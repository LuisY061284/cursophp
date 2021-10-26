<?php include 'contenido.php' ?>
<?php require 'head.php' ?>

<title>Prueba PHP Luis Yagüe</title>
<meta name="description" content="Prueba PHP Luis Yagüe">
  </head>
  <body>
    
  <?php require 'header.php' ?>
  
 

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Pricing</h1>
  <p class="lead">Prueba PHP LUIS YAGÜE</p>
</div>

<div class="container">
    <div class="row">

      <?php
        foreach (TARJETAS as $articulo) {

          echo
            '<div class=" mb-3 text-center col-4">
                
              <div class="card  mb-4 shadow-sm">
                <div class="card-header">
                  <h4 class="my-0 font-weight-normal">' . $articulo['titular'] . '</h4>
                </div>
                <div class="card-body">
                  <h1 class="card-title pricing-card-title">'. $articulo['precio'] . '</h1>
                  
                  <div><ul class="list-unstyled mt-3 mb-4 ml-5 text-left">
                  ' ;
                foreach ($articulo ['condicion'] as $key => $value) {
                  echo '<li>' . $value .' </li>';
                }
                ;
                echo '</div>
                   </div>
                  <div class=text-center><img src="' . $articulo['icono'] . '" class="w-25 mb-4"></div>
                  <button type="button" class="btn btn-lg btn-block btn-outline-primary mb-2">'. $articulo['btn'] . '</button>
                </div>
              </div>'
         ;
         }
       ?>
    
        </div>
     </div>

  <?php require 'footer.php' ?>
