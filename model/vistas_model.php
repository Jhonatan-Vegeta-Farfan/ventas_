<?php
session_start();
class vistaModelo
{

    protected static function obtener_vista($vista)
    {
        $palabras_permitidas = [
            'usuarios',
            'nuevo-usuario',
            'usuario',
            'producto',
            'nuevo-producto',
            'producto',
            'cantidad',
            'carrito',
            'comentarios',
            'contactanos',
            'detalleproducto',
            'libroreclamaciones',
            'nosotros',
            'novedades',
            'pagofactura',
            'perfil',
            'rutadeenvio',
            'suscribirte',
            'ubicacion',
            'descargarboleta',
            'respuestadedescarga',
            'respuestadeimprecion',
            'imprimirboleta',
            'inicio',
            'olvidastetucontraseña',
            'registrarse',
            'rutadeenvio',
            'suscribirte',
            'ubicacion',
            'descargarboleta',
            'respuestadedescarga',
            'respuestadeimprecion',
            'imprimirboleta',
            'inicio',
            'olvidastetucontraseña',
            'registrarse',
            'categorias',
            'compras',
            'nuevo-categoria',
            'nuevo-compra',
            'nuevo-persona',
            'nuevo-producto',
            'productos',
            'usuarios',
            'editar-producto',
            'editar-categoria',
            'editar-compra',
            'editar-persona',
            'panel'
        ];

        /* 
        if(!isset($_SESSION['sesion_ventas_id'])){
            return"login";
        } */

        if (in_array($vista, $palabras_permitidas)) {
            if (is_file("./views/" . $vista . ".php")) {
                $contenido = "./views/" . $vista . ".php";
            } else {
                $contenido = "404";
            }
        } elseif ($vista == "login" || $vista == "index") {
            $contenido = "login";
        } elseif ($vista == "perfil") {
            $contenido = "perfil";
        } else {
            $contenido = "404";
        }
        return $contenido;
    }
}
