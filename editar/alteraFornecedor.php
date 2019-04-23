<?php 
    //Recebe os dados com as alterações feitas
    $idFornecedor = filter_input(INPUT_POST, 'idFornecedor');
    $razaoSocial = filter_input(INPUT_POST, 'razaoSocial');
    $fantasia = filter_input(INPUT_POST, 'fantasia');
    $endereco = filter_input(INPUT_POST, 'endereco');
    $numero = filter_input(INPUT_POST, 'numero');
    $bairro = filter_input(INPUT_POST, 'bairro');
    $estado = filter_input(INPUT_POST, 'estado');
    $cidade = filter_input(INPUT_POST, 'cidade');
    $cep = filter_input(INPUT_POST, 'cep');
    $telefone = filter_input(INPUT_POST, 'telefone');
    $celular = filter_input(INPUT_POST, 'celular');
    $email = filter_input(INPUT_POST, 'email');
    $cnpj = filter_input(INPUT_POST, 'cnpj');
    $inscricaoEstadual = filter_input(INPUT_POST, 'inscricaoEstadual');
    $atividade = filter_input(INPUT_POST, 'atividade');
    $contato = filter_input(INPUT_POST, 'contato');
    $funcao = filter_input(INPUT_POST, 'funcao');

    //Estabelece a conexão com o mysql
    $conexao = mysqli_connect("localhost","root","","administrativo");
    if( !$conexao ){
        header("Location:exibe.php?alteracao=false");
        exit;
    }
    //Executa a atualização no banco de dados
    $sql = "UPDATE fornecedor SET razaoSocial=' $razaoSocial', fantasia='$fantasia', endereco='$endereco', numero='$numero', bairro='$bairro', estado='$estado', cidade='$cidade', cep='$cep', telefone='$telefone', celular='$celular', email='$email', cnpj='$cnpj', inscricaoEstadual='$inscEstadual', atividade='$atividade', contato='$contato', funcao='$funcao' WHERE idFornecedor=".$idFornecedor;
    $update = mysqli_query($conexao, $sql);

    //Se não deu certo, redireciona pra exibe.php com alteracao igual a false
    if( !$update ){
        header("Location:../index.php?alteracao=false");
        exit;
    }

    //se tudo deu certo, redireciona pra exibe.php com alteracao igual a true
    header("Location:../relatorios/listaFornecedor.php?alteracao=true");
?>