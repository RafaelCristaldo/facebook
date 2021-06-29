<?php
//incorporar o conteudo do arquivo database.php
include_once 'database.php';
//verifica se foi clicado no botão compartilhar
if(isset($_POST['btnCompartilhar'])){
   $conteudo = mysqli_real_escape_string($mysqli, $_POST['txtPost']);
   $data_post = date('y-m-d h:m:i');
   //garantir que tem algo sendo postado
    if($conteudo !=""){
        //inserir no banco de dados

        $insert = mysqli_query($mysqli, "INSERT INTO tb_posts
                                        (conteudo,data_post,nome) 
                                        VALUES ('$conteudo','$data_post','Cleitu')
                                         ");
        if($insert)
        echo "post cadastrado";
    }
}
?>