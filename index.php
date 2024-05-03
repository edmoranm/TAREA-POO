<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Producto{
    // DEFINICION DE LOS ATRIBUTOS NOMBRE, PRECIO, DISPONIBLE.

    public string $nombre;
    public int $precio;
    public bool $disponible;

    // METODO CONSTRUCTOR, SE EJECUTA AL EFECTUAR LA INSTANCIA
    public function __construct(string $nombre, int $precio, bool $disponible)
    {
        // SE LES DA VALORES A LOS ATRIBUTOS CON LOS PARAMETROS QUE RECIBE EL METODO CONTRUCTOR
        $this -> nombre = $nombre;
        $this -> precio = $precio;
        $this -> disponible = $disponible;
    }

    // DEFINICION DE METODOS
    public function mostrarProducto() {
        echo "El producto es: " . $this -> nombre . " y su precio es de: " . $this -> precio;
    }
}

// INSTANCIA DE LA CLASE EN EL PRIMER PRODUCTO
$producto = new Producto( 'Tablet', 200, true);

// LLAMADO AL METODO MOSTRAR PRODUCTO, UTULIZANDO SINTAXIS DE FLECHA ->
$producto -> mostrarProducto();

// IMPRESION DE LA PANTALLA DEL PRIMER OBJETO
echo "<pre>";
var_dump($producto);
echo "</pre>";

// INSTANCIA DE LA CLASE EN EL SEGUNDO OBJETO
$producto = new Producto('Monitor Curvo', 300, true);
// LLAMADO AL METODO PRODUCTO, UTILIZANDO SINTAXIS DE FLECHA ->
$producto -> mostrarProducto();

// IMRESION EN LA PANTALLA DEL SEGUNDO OBJETO
echo "<pre>";
var_dump($producto);
echo "</pre>";

?>