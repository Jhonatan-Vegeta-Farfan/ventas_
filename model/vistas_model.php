<?php
class vistaModelo
{

    protected static function obtener_vista($vista)
    {
        $palabras_permitidas = ['usuarios', 'nuevo-usuario','usuario','producto','nuevo-producto','producto','cantidad','carrito',
        'comentarios','contactanos','detalleproducto','libroreclamaciones','nosotros','novedades','pagofactura','perfil',
        'rutadeenvio','suscribirte','ubicacion','descargarboleta','respuestadedescarga','respuestadeimprecion','imprimirboleta'];
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
