<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza y Corre</title>
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
    <h2 id="Titulo">
    Formulario de registro 
   </h2>
   <br><br><hr>
   <form action="Logic/loguear.php" method="POST">
   <fieldset>
        <legend id="Titulo2">Ingresa tus Datos</legend>
              <label  for="name" class="txt">Nombre</label>
              <br>
              <input class="C" type="text" id="name" name="user_name">
              <br>

              <label for="phone" class="txt">Teléfono</label>
              <br>
              <input class="C"type="text" id="phone" name="user_number">
              <br>

              <label for="mail" class="txt">Correo Electronico</label>
              <br>
              <input class="C"type="email" id="mail" name="user_mail">              
              <br>

              <label for="adress" class="txt">Dirección</label>
              <br>
              <input class="C"type="text" id="adress" name="user_adress">              
              <br>
              </fieldset>
      <br>
          <input class="D" type="submit" value="Registrarse">
</form>
</body>
</html>