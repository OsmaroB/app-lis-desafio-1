<?php
$productos = simplexml_load_file('../utils/productos.xml');
$total = count($productos->producto);

function Tabla(){
    for ($i=0; $i < $GLOBALS['total']; $i++) { 
        # code...
        print('
            <tr>
                <th scope="row">'.$GLOBALS["productos"]->producto[$i]->codigo.'</th>
                <td>'.$GLOBALS["productos"]->producto[$i]->nombre.'</td>
                <td>Descripción</td>
                <td><img src="../web/img/'.$GLOBALS["productos"]->producto[$i]->img.'" class="table-product" alt=""></td>
                <td>'.$GLOBALS["productos"]->producto[$i]->categoria.'</td>
                <td>$'.$GLOBALS["productos"]->producto[$i]->precio.'</td>
                <td>'.$GLOBALS["productos"]->producto[$i]->existencias.'</td>
                <td>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <a href="./modificar.php?codigo='.$GLOBALS["productos"]->producto[$i]->codigo.'" class="btn btn-warning"><i class="fa-solid fa-pen text-white"></i></a>
                                <a href="./eliminar.php?codigo='.$GLOBALS["productos"]->producto[$i]->codigo.'" class="btn btn-danger"><i class="fa-solid fa-trash text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        ');
    }
}
?>
