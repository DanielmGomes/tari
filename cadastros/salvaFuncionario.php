<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "administrativo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

    if(isset($_POST['enviar'])) {
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $cracha = $_POST['cracha'];
        $nome = $_POST['nome'];
        $empresa = $_POST['empresa'];
        $pis = $_POST['pis'];
        $registro = $_POST['registro']; 
        $ctps = $_POST['ctps'];
        $serie = $_POST['serie'];
        $funcao = $_POST['funcao'];
        $departamento = $_POST['departamento'];
        $setor = $_POST['setor'];
        $centroCusto = $_POST['centroCusto'];
        $admissao = $_POST['admissao'];
        $cpf = $_POST['cpf'];
        $eleitor = $_POST['eleitor'];
        $reservista = $_POST['reservista'];
        $estadoCivil = $_POST['estadoCivil'];
        $nascimento = $_POST['nascimento'];
        $sexo = $_POST['sexo'];
        $rg = $_POST['rg'];
        $orgaoEmissor = $_POST['orgaoEmissor'];
        $cnh = $_POST['cnh'];
        $inicioExperiencia = $_POST['inicioExperiencia'];
        $fimExperiencia = $_POST['fimExperiencia'];
        $endereco = $_POST['endereco'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $cep = $_POST['cep'];
        $telefone = $_POST['telefone'];
        $celular = $_POST['celular'];
        $email = $_POST['email'];
        $escolaridade = $_POST['escolaridade'];
        $salario = $_POST['salario'];
        $dependente = $_POST['dependente'];

        $sql = "INSERT INTO funcionario (cracha, nome, empresa, pis, registro, ctps, serie, funcao, departamento, setor, centroCusto, admissao, cpf, eleitor, reservista, estadoCivil, nascimento, sexo, rg, orgaoEmissor, cnh, inicioExperiencia, fimExperiencia, endereco, numero, bairro, estado, cidade, cep, telefone, celular, email, escolaridade, salario)
            VALUES ('$cracha', '$nome', '$empresa', '$pis', '$registro', '$ctps', '$serie', '$funcao', '$departamento', '$setor', '$centroCusto', '$admissao', '$cpf', '$eleitor', '$reservista', '$estadoCivil', '$nascimento', '$sexo', '$rg', 
            '$orgaoEmissor', '$cnh', '$inicioExperiencia', '$fimExperiencia', '$endereco', '$numero', '$bairro', '$estado', '$cidade', '$cep', '$telefone', '$celular', '$email', '$escolaridade', '$salario')";

        foreach ($dependente as $key => $value) {
            $sql2 = "INSERT INTO dependente (dependente, responsavel) VALUES ('$value', '$nome')";
            mysqli_query($conn, $sql2);
        }
        

        if (mysqli_query($conn, $sql)) {
            header("Location: ../index.php");

        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

         mysqli_close($conn);

    }
?>