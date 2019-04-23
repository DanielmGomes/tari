<?php 
    //recebe o id dos dados que serão apagados
    $idFornecedor = filter_input(INPUT_POST, 'idFornecedor');

    //estabelece a conexão
    $conexao = mysqli_connect("localhost","root","","administrativo");
    if( !$conexao ){
        echo "Ops.. Erro na conexão.";
        exit;
    }
    //Executa a query
    $sql = "DELETE FROM fornecedor WHERE idFornecedor=".$idFornecedor;
    $remove = mysqli_query($conexao, $sql);
    //Se falhou, redireciona pra exibe.php com remove igual a false 
    if( !$remove ){
        header("Location:../relatorios/listaFornecedor.php?remove=false");
        exit;
    }
    //se tudo deu certo, redireciona pra exibe.php com remove igual a true
    header("Location:../index.php?remocao=true");
?>