<?php
function add(){
    if(isset($_POST['add'])){
        $nombre = $_POST['txtNombre'];
        $codigo = $_POST['txtCodigo'];
        $descripcion = $_POST['txtDescripcion'];
        $categoria = $_POST['cmbCategoria'];
        $precio = $_POST['txtPrecio'];
        $existencias = $_POST['txtExistencias'];
        if(trim(empty($nombre))){
            print('
            <div class="alert alert-danger" role="alert">
                No puede estar vacio nombre
            </div>
            ');
            return;
        }
        if(trim(empty($codigo))){
            print('
            <div class="alert alert-danger" role="alert">
                No puede estar vacio codigo
            </div>
            ');
            return;
        }
        if(trim(empty($descripcion))){
            print('
            <div class="alert alert-danger" role="alert">
                No puede estar vacio descripcion
            </div>
            ');
            return;
        }
        if(trim(empty($categoria))){
            print('
            <div class="alert alert-danger" role="alert">
                No puede estar vacio categoria
            </div>
            ');
            return;
        }
        if(trim(empty($precio))){
            print('
            <div class="alert alert-danger" role="alert">
                No puede estar vacio precio
            </div>
            ');
            return;
        }
        if(trim(empty($existencias))){
            print('
            <div class="alert alert-danger" role="alert">
                No puede estar vacio existencias
            </div>
            ');
            return;
        }
		//open xml file
		$productos = simplexml_load_file('../utils/productos.xml');
		$producto = $productos->addChild('producto');
		$producto->addChild('codigo', $codigo);
		$producto->addChild('nombre', $nombre);
		$producto->addChild('descripcion', $descripcion);
		$producto->addChild('categoria', $categoria);
		$producto->addChild('precio', $precio);
		$producto->addChild('existencias', $existencias);
		$producto->addChild('img', 'img');
        $dom = new DomDocument();
		$dom->preserveWhiteSpace = false;
		$dom->formatOutput = true;
		$dom->loadXML($productos->asXML());
		$dom->save('../utils/productos.xml');
        print('
            <div class="alert alert-success" role="alert">
                Agregado correctamente
                <a class="btn btn-primary" href="./index.php">Regresar a menú principal</a>
            </div>
        ');
	}
}
add();   
?>