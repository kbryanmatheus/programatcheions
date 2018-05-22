<?php
if(isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao ='index3';
}

require 'app/models/CategoriaCrud.php';

switch ($acao) {
    case 'index3':

        $crud = new CategoriaCrud();
        $categorias = $crud->getCategorias();

        include 'jotaqueri/jquery.php';
        break;
}