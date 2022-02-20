<?php
function saveImg(){
    if (isset($_FILES['imagen'])) {
        $nombreImg = $_FILES['imagen']['name'];
        $type = $_FILES['imagen']['type'];
        $ruta      = $_FILES['imagen']['tmp_name'];
        $destino   = "../web/img/".$nombreImg;
        move_uploaded_file($ruta, $destino);
        return $nombreImg;
    }
}
?>