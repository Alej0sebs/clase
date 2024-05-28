<!DOCTYPE html>
<html lang="es">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css" type="text/css">
    <link rel="icon" href="imgs/logo.png" type="image/png">
</head>

    <header>
        <img class="imagenheader" src="imgs/contabilidad.png" alt="imagenConta">
        <h1 class="utah1"> </h1>
    </header>
    <nav>
        <ul>
            <li><a class="estilolista" href="index.php?action=incio">Inicio</a></li>
            <li><a class="estilolista" href="index.php?action=nosotros">Nosostros</a></li>
            <li><a class="estilolista" href="index.php?action=servicios">Servicios</a></li>
            <li><a class="estilolista" href="index.php?action=contactanos">Contacto</a></li>
            <li><a class="estilolista" href="index.php?action=logout">Salir</a></li>
        </ul>
    </nav>
<section>
<?php
        $mvc= new MvcController();
        $mvc->enlacesPaginasController();
        ?>
</section>
    <div>
    <footer>
    <div class="contenedorFooter">
        <h3 class="universidad-titulo">Universidad Técnica de Ambato</h3>
        <img src="imgs\logo.png" alt="Logo UTA">
        <p class="copyright">COPYRIGHT© 2024</p>
        <div class="informacionContacto">
            <span><img src="imgs/icons/tel.png" alt="Teléfono"> (03) 282 - 4804</span>
            <span><img src="imgs/icons/email.png" alt="Email"> educacionvirtual@uta.edu.ec</span>
        </div>
    </div>
</footer>
    </div>

</body>
</html>