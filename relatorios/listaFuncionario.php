<?php
	include '../include/header.php';
?>

<?php 
    //Área de notificações
    //Se existe a variável remocao, então
    if( isset($_GET['remocao'])){
        //Se remoção tem true, os dados foram removidos
        if( $_GET['remocao'] == "true" ){
            echo "<p>Os dados foram removidos.</p>";            
        }else{
            echo "<p>Não foi possivel remover os dados.</p>";
        }
    } 
    //Se existe a variável alteração, então
    if( isset($_GET['alteracao']) ){
        //Se alteracao tem true, os dados foram alterados
        if( $_GET['alteracao'] == "true" ){
            echo "<p>Os dados foram alterados.</p>";            
        }else{
            echo "<p>Não foi possivel alterar os dados.</p>";
        }
    } 
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">        
    <div class="clearfix"></div>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Lista de Funcionários</h2>
            <div class="clearfix"></div>
          </div>
          <div>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Inicio</a>
              </li>
              <li class="breadcrumb-item ">Relátorios</li>
              <li class="breadcrumb-item active">Funcionários</li>
            </ol>
          </div>
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Código</th>
                  <th>Funcionário</th>
                  <th>Telefone</th>
                  <th>Função</th>
                  <th>Salário</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
                <?php
                   //Estabelece a conexao com o mysql
                   $conexao = mysqli_connect("localhost","root","","administrativo");
                   if( !$conexao ){
                       echo "Ops.. Erro na conexão.";
                       exit;
                   }
                   //Carrega os dados
                   $sql = "SELECT * FROM funcionario";
                   $consulta = mysqli_query($conexao, $sql);
                   if( !$consulta ){
                       echo "Erro ao realizar consulta. Tente outra vez.";
                       exit;
                   }
                   //se tudo deu certo, exibe os dados
                   while( $dados = mysqli_fetch_assoc($consulta) ){
                    echo "<tr>";
                      echo "<td>" .$dados['idFuncionario']. "</td>";
                      echo "<td>" .$dados['nome']. "</td>";
                      echo "<td>" .$dados['telefone']. " \  " .$dados['celular']. "</td>";
                      echo "<td>" .$dados['funcao']. "</td>";
                      echo "<td>" ."R$" ." " .$dados['salario']. "</td>";
                      // Cria um formulário para enviar os dados para a página de edição 
                      // Colocamos os dados dentro input hidden
                      echo "<td>";
                        echo "<div class='form-group'>";
                          echo "<div class='form-row'>";
                            echo "<div class='col-md-4'>";
                              echo "<form action='../editar/editaFuncionario.php' method='post'>";
                                echo "<input name='idFuncionario' type='hidden' value='" .$dados['idFuncionario']. "'>";
                                echo "<input name='cracha' type='hidden' value='" .$dados['cracha']. "'>";
                                echo "<input name='nome' type='hidden' value='" .$dados['nome']. "'>";
                                echo "<input name='empresa' type='hidden' value='" .$dados['empresa']. "'>";
                                echo "<input name='pis' type='hidden' value='" .$dados['pis']. "'>";
                                echo "<input name='registro' type='hidden' value='" .$dados['registro']. "'>";
                                echo "<input name='ctps' type='hidden' value='" .$dados['ctps']. "'>";
                                echo "<input name='serie' type='hidden' value='" .$dados['serie']. "'>";
                                echo "<input name='funcao' type='hidden' value='" .$dados['funcao']. "'>";
                                echo "<input name='departamento' type='hidden' value='" .$dados['departamento']. "'>";
                                echo "<input name='setor' type='hidden' value='" .$dados['setor']. "'>";
                                echo "<input name='centroCusto' type='hidden' value='" .$dados['centroCusto']. "'>";
                                echo "<input name='admissao' type='hidden' value='" .$dados['admissao']. "'>";
                                echo "<input name='cpf' type='hidden' value='" .$dados['cpf']. "'>";
                                echo "<input name='eleitor' type='hidden' value='" .$dados['eleitor']. "'>";
                                echo "<input name='reservista' type='hidden' value='" .$dados['reservista']. "'>";
                                echo "<input name='estadoCivil' type='hidden' value='" .$dados['estadoCivil']. "'>";
                                echo "<input name='nascimento' type='hidden' value='" .$dados['nascimento']. "'>";
                                echo "<input name='sexo' type='hidden' value='" .$dados['sexo']. "'>";
                                echo "<input name='rg' type='hidden' value='" .$dados['rg']. "'>";
                                echo "<input name='orgaoEmissor' type='hidden' value='" .$dados['orgaoEmissor']. "'>";
                                echo "<input name='cnh' type='hidden' value='" .$dados['cnh']. "'>";
                                echo "<input name='inicioExperiencia' type='hidden' value='" .$dados['inicioExperiencia']. "'>";
                                echo "<input name='fimExperiencia' type='hidden' value='" .$dados['fimExperiencia']. "'>";
                                echo "<input name='endereco' type='hidden' value='" .$dados['endereco']. "'>";
                                echo "<input name='numero' type='hidden' value='" .$dados['numero']. "'>";
                                echo "<input name='bairro' type='hidden' value='" .$dados['bairro']. "'>";
                                echo "<input name='estadp' type='hidden' value='" .$dados['estado']. "'>";
                                echo "<input name='cidade' type='hidden' value='" .$dados['cidade']. "'>";
                                echo "<input name='cep' type='hidden' value='" .$dados['cep']. "'>";
                                echo "<input name='telefone' type='hidden' value='" .$dados['telefone']. "'>";
                                echo "<input name='celular' type='hidden' value='" .$dados['celular']. "'>";
                                echo "<input name='email' type='hidden' value='" .$dados['email']. "'>";
                                echo "<input name='escolaridade' type='hidden' value='" .$dados['escolaridade']. "'>";
                                echo "<input name='salario' type='hidden' value='" .$dados['salario']. "'>";
                                echo "<button class='btn btn-primary glyphicon glyphicon-pencil' data-toggle='tooltip' data-placement='top' title='Editar'></button>";
                              echo "</form>";
                            echo "</div>";
                            // Cria um formulário para remover os dados 
                            // Colocamos o id dos dados a serem removidos dentro do input hidden
                            echo "<div class='col-md-4'>";
                              echo "<form action='../remover/removeFuncionario.php' method='post'>";
                                echo "<input name='idFuncionario' type='hidden' value='" .$dados['idFuncionario']. "'>";
                                echo "<button class='btn btn-danger glyphicon glyphicon-trash' data-toggle='tooltip' data-placement='top' title='Remover'></button>";
                              echo "</form>";
                            echo "</div>";
                          echo "</div>";
                        echo "</div>";
                      echo "</td>";
                    echo "</tr>";
                  }
                 ?>   
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->

<?php
	include '../include/footer.php';
?>