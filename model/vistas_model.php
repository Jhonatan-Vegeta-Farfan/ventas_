<?php
class vistaModelo
{

    protected static function obtener_vista($vista)
    {
        $palabras_permitidas = ['usuarios', 'nuevo-usuario','usuario','producto','nuevo-producto','producto','cantidad','carrito',
        'comentarios','contactanos','detalleproducto','libroreclamaciones','nosotros','novedades','pagofactura','perfil',
<<<<<<< HEAD
        'rutadeenvio','suscribirte','ubicacion','descargarboleta','respuestadedescarga','respuestadeimprecion',
        'imprimirboleta','inicio','nuevo-producto', 'olvidastetucontraseña', 'registrarse', 'registrar-persona', 'nueva-compra', 'nueva-categoria'];
=======
        'rutadeenvio','suscribirte','ubicacion','descargarboleta','respuestadedescarga','respuestadeimprecion','imprimirboleta',
        'inicio','nuevo-producto', 'olvidastetucontraseña', 'registrarse', 'registrar-persona', 'categoria', 'nueva-compras'];
>>>>>>> d8e2374adf36cf4948dd0986829692195d92bc03
        if (in_array($vista, $palabras_permitidas)) {
            if (is_file("./views/" . $vista . ".php")) {
                $contenido = "./views/" . $vista . ".php";
            } else {
                $contenido = "404";
            }
        } elseif ($vista == "login" || $vista == "index") {
            $contenido = "login";
        } else {
            $contenido = "404";
        }
        return $contenido;
    }
}
