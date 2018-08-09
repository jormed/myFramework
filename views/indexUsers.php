<!DOCTYPE html>
<html lang = "es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Usuarios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
</head>
<body>

    <form action="<?php echo $helper->url("usuarios","crear"); ?>" method="post" class="col-lg-5">
        <h3>Añadir usuario</h3>
        <hr/>
        Nombre: <input type="text" name="nombre" class="form-control"/>
        Apellido: <input type="text" name="apellido" class="form-control"/>
        Email: <input type="text" name="email" class="form-control"/>
        Contraseña: <input type="password" name="password" class="form-control"/>
        <input type="submit" value="enviar" class="btn btn-success"/>
    </form>
        
    <div class="col-lg-7">
        <h3>Usuarios</h3>
        <hr/>
    </div>
    <section class="col-lg-7 usuario" style="height:400px;overflow-y:scroll;">
        <?php foreach($findAllUsers as $user) { //recorremos el array de objetos y obtenemos el valor de las propiedades ?>
            <?php echo $user->id; ?> -
            <?php echo $user->nombre; ?> -
            <?php echo $user->apellido; ?> -
            <?php echo $user->email; ?>
            <div class="right">
                <a href="<?php echo $helper->url("usuarios","borrar"); ?>&id=<?php echo $user->id; ?>" class="btn btn-danger">Borrar</a>
            </div>
            <hr/>
        <?php } ?>
    </section>
    <footer class="col-lg-12">
        <hr/>
        Ejemplo PHP MySQLi POO MVC - Víctor Robles - <a href="http://victorroblesweb.es">victorroblesweb.es</a> - Copyright &copy; <?php echo  date("Y"); ?>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>