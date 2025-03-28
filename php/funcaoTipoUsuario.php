<?php

    function optionTipoUsuarioId($id) {
        $lista = "";
        include("conexao.php");
        $sql = "SELECT * FROM tipo_usuario WHERE id_tipo_usuario = $id";

        
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);

        if(mysqli_num_rows($result) > 0){
            foreach ($result as $campo) {
                $lista = '<option value="'.$campo['id_tipo_usuario'].'">'.$campo["descricao"].'</option>';
            }
        } 

        
        return $lista;
    }

    function optionTipoUsuario($id = 0) {
        $lista = "";
        include("conexao.php");
        $sql = "SELECT * FROM tipo_usuario WHERE flg_ativo = 'S' AND id_tipo_usuario <> $id;";
        
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);

        if(mysqli_num_rows($result) > 0){
            foreach ($result as $campo) {
                $lista.= '<option value="'.$campo['id_tipo_usuario'].'">'.$campo["descricao"].'</option>';
            }
        } 

        
        return $lista;
    }


    function buscaTipoUsuarioId($id){
        include("conexao.php");
        $sql = "SELECT * FROM tipo_usuario WHERE id_tipo_usuario = $id;";
        
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);

        if(mysqli_num_rows($result) > 0){
            foreach ($result as $campo) {
                
            }
        }    

        return $campo;

    }


?>