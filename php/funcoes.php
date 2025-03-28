<?php
    include("funcaoTipoUsuario.php");
    include("funcaoUsuario.php");
    include("funcaoProduto.php");



    function descrFlag($flag) {
        if($flag == 'S') {
            return 'Sim';
        } else {
            return 'Não';
        }
    }

?>