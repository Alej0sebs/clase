<?php
class MvcController{
    public function plantilla(){
        include "views/templates.php";
    }

    public function enlacesPaginasController(){
        session_start();
        if (isset($_GET['action'])) {
            $enlacesControlador = $_GET['action'];
            if ($enlacesControlador == 'servicios' && !isset($_SESSION['usuario'])) {
                $enlacesControlador = 'servicios';
            }
        } else {
            $enlacesControlador = 'inicio.php';
        }
        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesControlador);
        include $respuesta;
    }
}
?>