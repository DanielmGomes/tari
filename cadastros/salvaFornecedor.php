
<?php
  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection


    if(isset($_POST['enviar'])) {
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $usuario = $_POST['usuario'];
        $email = $_POST['email']; 
        $senha = $_POST['senha']; 

        $sql = "INSERT INTO usuario (nome, telefone, estado, cidade, usuario, email, senha)
            VALUES ('$nome', '$telefone', '$estado', '$cidade', '$usuario', '$email', '$senha')";

        if (mysqli_query($conn, $sql)) {
            header("Location: ../index.php");

        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

         mysqli_close($conn);
    }
?>

