<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
          rel="stylesheet"
         integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
        <link rel="stylesheet" href="CSS/Estilo.css"/>
</head>
<body class="cuerpo">
<header>
        <nav class = "navigator" >
                <ul class="nav-menu">
                    <li>
                        <img src="IMG/Logo.jpg" class="logo"></a>
                    </li>
                    <li class="nav-itemn">
                        <a href="Principal.php" class="nav-menu-link nav-link  ">Inicio</a>
                    </li>
                    <li class="nav-itemn">
                        <a href="Registro.php" class="nav-menu-link nav-link ">Registro</a>
                    </li>
                </ul>
        </nav>
    </header>
    <nav class = "navigator2" >
                <ul class="nav-menu">
                <li class="nav-itemn2">
                        <a href="Productos.php" class="nav-menu-link nav-link ">Productos</a>
                    </li>
                    <li class="nav-itemn2">
                        <a href="Pizzas.php" class="nav-menu-link nav-link  ">Pizzas</a>
                    </li>
                    <li class="nav-itemn2">
                        <a href="Pastass.php" class="nav-menu-link nav-link ">Pastas</a>
                    </li>
                    <li class="nav-itemn2">
                        <a href="Postres.php" class="nav-menu-link nav-link ">Postres</a>
                    </li>
                    <li class="nav-itemn2">
                        <a href="Carrito.php" class="nav-menu-link nav-link ">Carrito</a>
                    </li>
                </ul>
        </nav>
<br>
<br>
<main>
<div class="container">
 <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
 <div class="col">
          <div class="card shadow-sm">
            <img src="IMG/Banana.jpg" >
            <div class="card-body">
              <p class="card-title">Banana Split </p>
              <p class="card-text">$70.00</p>
              <a href="" class="btn btn-success">Agregar</a>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
           
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div> <div class="col">
          <div class="card shadow-sm">
            <img src="IMG/Malteadas.jpg" >
            <div class="card-body">
              <p class="card-title">Malteada de Chocolate</p>
              <p class="card-text">$65.00</p>
              <a href="" class="btn btn-success">Agregar</a>
              <p class="card-title">Malteadas de Fresa</p>
              <p class="card-text">$65.00</p>
              <a href="" class="btn btn-success">Agregar</a>
              <p class="card-title">Malteadas de Vainilla</p>
              <p class="card-text">$65.00</p>
              <a href="" class="btn btn-success">Agregar</a>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div> <div class="col">
          <div class="card shadow-sm">
            <img src="IMG/Fresa.jpg" >
            <div class="card-body">
              <p class="card-title">Helado de fresa</p>
              <p class="card-text">$25.00</p>
              <a href="" class="btn btn-success">Agregar</a>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div> 
        
        <div class="col">
          <div class="card shadow-sm">
            <img src="IMG/Chocolate.jpg" >
            <div class="card-body">
              <p class="card-title">Helado de chocolate </p>
              <p class="card-text">$25.00</p>
              <a href="" class="btn btn-success">Agregar</a>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="IMG//Helado.jpg" >
            <div class="card-body">
              <p class="card-title">Helado de vainilla</p>
              <p class="card-text">$20.00</p>
              <a href="" class="btn btn-success">Agregar</a>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
    </div>



</div>

</main>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous"></script>
</body>
</html>