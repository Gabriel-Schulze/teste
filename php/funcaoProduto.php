<?php

    //Dados por ID
    function buscaProdutoId($id) {
        include("conexao.php");
        $sql = "SELECT * FROM produtos WHERE id_produto = $id;";
        
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);

        if(mysqli_num_rows($result) > 0){
            foreach ($result as $campo) {
                
            }
        }    

        return $campo;

    }


    //Listagem de usuários
    function listaProduto() {
        $linha = "";

        include("conexao.php");
        $sql = "SELECT * FROM produtos;";
        
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);

        if(mysqli_num_rows($result) > 0){
            foreach ($result as $campo) {
                $id = $campo["id_produto"];
                $linha .= "
                    <tr>
                        <td>".$id."</td>
                        <td>".$campo["descricao"]."</td>
                        <td>".$campo["quantidade"]."</td>
                        <td>".$campo["valor_unitario"]."</td>
                        <td>".descrFlag($campo["flg_ativo"])."</td>
                        <td>
                            <a href='alterar-produto.php?id=$id'>Alterar</a> 
                            | 
                            <a href='excluir-produto.php?id=$id'>Excluir</a>
                        </td>
                    </tr>
                ";
            }
        }    

        return $linha;
    }

?>