<?php
function delete(){
    $productos = simplexml_load_file('../utils/productos.xml');
    $total = count($productos->producto);
    if(isset($_GET['codigo'])){
        for ($i=0; $i < $total; $i++) { 
            if($_GET['codigo'] == $productos->producto[$i]->codigo){
                unset($productos->producto[$i]);
	            file_put_contents('../utils/productos.xml', $productos->asXML());
                print('
                    <div class="alert alert-success" role="alert">
                        Eliminado correctamente
                        <a class="btn btn-primary" href="./index.php">Regresar a menú principal</a>
                    </div>
                ');
                return;
            }
        }
    }
}
if(isset($_POST['delete'])){
    delete();
}
?>