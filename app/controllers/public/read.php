<?php
$productos = simplexml_load_file('../utils/productos.xml');
$total = count($productos->producto);

function Tabla(){
    for ($i=0; $i < $GLOBALS['total']; $i++) { 
        # code...
        print('
        <div class="col-4">
            <div class="row">
                <div class="col-12">
                    <div class="card border-rounded">
                        <h3 class="name-product m-3">'.$GLOBALS["productos"]->producto[$i]->nombre.'</h3>
                        <img class="m-3 border-rounded" src="../web/img/'.$GLOBALS["productos"]->producto[$i]->img.'" alt="imagen-ilustrativa">
                        <span class="mr-2 ml-2"><b>Descripción:</b> '.$GLOBALS["productos"]->producto[$i]->descripcion.'</span>
                        <span class="mr-2 ml-2"><b>Categoria:</b> '.$GLOBALS["productos"]->producto[$i]->categoria.'</span>
                        <span class="mr-2 ml-2"><b>Precio:</b> '.$GLOBALS["productos"]->producto[$i]->precio.'</span>
                        <span class="mr-2 ml-2"><b>Existencias:</b> '.$GLOBALS["productos"]->producto[$i]->existencias.'</span>
                        <button class="btn btn-block btn-success m-2">Ver más</button>    
                    </div>
                </div>
            </div>
        </div>
        ');
        // echo($GLOBALS['productos']->producto[$i]->codigo);
    }
}
?>
