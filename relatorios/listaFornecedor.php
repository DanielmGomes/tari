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
            <h2>Lista de Fornecedores</h2>
            <div class="clearfix"></div>
          </div>
          <div>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Inicio</a>
              </li>
              <li class="breadcrumb-item ">Cadastros</li>
              <li class="breadcrumb-item active">Fornecedores</li>
            </ol>
          </div>
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Código</th>
                  <th>Fornecedor</th>
                  <th>Telefone</th>
                  <th>Contato</th>
                  <th>Função</th>
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
                   $sql = "SELECT * FROM fornecedor";
                   $consulta = mysqli_query($conexao, $sql);
                   if( !$consulta ){
                       echo "Erro ao realizar consulta. Tente outra vez.";
                       exit;
                   }
                   //se tudo deu certo, exibe os dados
                   while( $dados = mysqli_fetch_assoc($consulta) ){
                    echo "<tr>";
                      echo "<td>" .$dados['idFornecedor']. "</td>";
                      echo "<td>" .$dados['fantasia']. "</td>";
                      echo "<td>" .$dados['telefone']. " \  " .$dados['celular']. "</td>";
                      echo "<td>" .$dados['contato']. "</td>";
                      echo "<td>" .$dados['funcao']. "</td>";
                      // Cria um formulário para enviar os dados para a página de edição 
                      // Colocamos os dados dentro input hidden
                      echo "<td>";
                        echo "<div class='form-group'>";
                          echo "<div class='form-row'>";
                            echo "<div class='col-md-4'>";
                              echo "<form action='../editar/editaFornecedor.php' method='post'>";
                                echo "<input name='idFornecedor' type='hidden' value='" .$dados['idFornecedor']. "'>";
                                echo "<input name='razaoSocial' type='hidden' value='" .$dados['razaoSocial']. "'>";
                                echo "<input name='fantasia' type='hidden' value='" .$dados['fantasia']. "'>";
                                echo "<input name='endereco' type='hidden' value='" .$dados['endereco']. "'>";
                                echo "<input name='numero' type='hidden' value='" .$dados['numero']. "'>";
                                echo "<input name='bairro' type='hidden' value='" .$dados['bairro']. "'>";
                                echo "<input name='estado' type='hidden' value='" .$dados['estado']. "'>";
                                echo "<input name='cidade' type='hidden' value='" .$dados['cidade']. "'>";
                                echo "<input name='cep' type='hidden' value='" .$dados['cep']. "'>";
                                echo "<input name='telefone' type='hidden' value='" .$dados['telefone']. "'>";
                                echo "<input name='celular' type='hidden' value='" .$dados['celular']. "'>";
                                echo "<input name='email' type='hidden' value='" .$dados['email']. "'>";
                                echo "<input name='cnpj' type='hidden' value='" .$dados['cnpj']. "'>";
                                echo "<input name='inscricaoEstadual' type='hidden' value='" .$dados['inscricaoEstadual']. "'>";
                                echo "<input name='atividade' type='hidden' value='" .$dados['atividade']. "'>";
                                echo "<input name='contato' type='hidden' value='" .$dados['contato']. "'>";
                                echo "<input name='funcao' type='hidden' value='" .$dados['funcao']. "'>";
                                echo "<button class='btn btn-primary glyphicon glyphicon-pencil' data-toggle='tooltip' data-placement='top' title='Editar'></button>";
                              echo "</form>";
                            echo "</div>";
                            // Cria um formulário para remover os dados 
                            // Colocamos o id dos dados a serem removidos dentro do input hidden
                            echo "<div class='col-md-4'>";
                              echo "<form action='../remover/removeFornecedor.php' method='post'>";
                                echo "<input name='idFornecedor' type='hidden' value='" .$dados['idFornecedor']. "'>";
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