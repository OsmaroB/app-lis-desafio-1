<?php
$productos = simplexml_load_file('../utils/productos.xml');
$total = count($productos->producto);
$codigo;
$nombre;
$producto;
$categoria;
$precio;
$existencias;
$img;
$descripcion;
    if(isset($_GET['codigo'])){
        for ($i=0; $i < $GLOBALS['total']; $i++) { 
            if($_GET['codigo'] == $GLOBALS["productos"]->producto[$i]->codigo){
                $codigo = $GLOBALS["productos"]->producto[$i]->codigo;
                $nombre= $GLOBALS["productos"]->producto[$i]->nombre;
                $descripcion= $GLOBALS["productos"]->producto[$i]->descripcion;
                $img = $GLOBALS["productos"]->producto[$i]->img;
                $categoria= $GLOBALS["productos"]->producto[$i]->categoria;
                $precio= $GLOBALS["productos"]->producto[$i]->precio;
                $existencias= $GLOBALS["productos"]->producto[$i]->existencias;
            }
        }
    }
    if(isset($_POST['update'])){
        if(trim(empty($_POST['txtNombre']))){
            print('
            <div class="alert alert-danger" role="alert">
                No puede estar vacio nombre
            </div>
            ');
            return;
        }
        if(trim(empty($_POST['txtCodigo']))){
            print('
            <div class="alert alert-danger" role="alert">
                No puede estar vacio codigo
            </div>
            ');
            return;
        }
        if(trim(empty($_POST['txtDescripcion']))){
            print('
            <div class="alert alert-danger" role="alert">
                No puede estar vacio descripcion
            </div>
            ');
            return;
        }
        if(trim(empty($_POST['cmbCategoria']))){
            print('
            <div class="alert alert-danger" role="alert">
                No puede estar vacio categoria
            </div>
            ');
            return;
        }
        if(trim(empty($_POST['txtPrecio']))){
            print('
            <div class="alert alert-danger" role="alert">
                No puede estar vacio precio
            </div>
            ');
            return;
        }
        if(trim(empty($_POST['txtExistencias']))){
            print('
            <div class="alert alert-danger" role="alert">
                No puede estar vacio existencias
            </div>
            ');
            return;
        }
        if($_POST['txtExistencias'] < 0){
            print('
            <div class="alert alert-danger" role="alert">
                No puede agregar existencias negativas
            </div>
            ');
            return;
        }
        if($_POST['txtPrecio'] < 0){
            print('
            <div class="alert alert-danger" role="alert">
                No puede agregar precios negativos
            </div>
            ');
            return;
        }
        if ((!strpos($_FILES['imagen']['type'], 'png') && !strpos($_FILES['imagen']['type'], 'jpg')))
        {
            print('
            <div class="alert alert-danger" role="alert">
                Solo puede seleccionar imagenes .png y .jpg
            </div>
            ');
            return;
        }
        foreach($productos->producto as $producto){
            if($producto->codigo == $_POST['txtCodigo']){
                $producto->codigo = $_POST['txtCodigo'];
                $producto->nombre = $_POST['txtNombre'];
                $producto->descripcion = $_POST['txtDescripcion'];
                $producto->categoria = $_POST['cmbCategoria'];
                $producto->precio = $_POST['txtPrecio'];
                $producto->existencias = $_POST['txtExistencias'];
                $producto->img = saveImg();
                break;
            }
        }

        file_put_contents('../utils/productos.xml', $productos->asXML());
        print('
            <div class="alert alert-success" role="alert">
            Modificado correctamente
            <a class="btn btn-primary" href="./index.php">Regresar a menú principal</a>
            </div>
            ');
    }

?>
