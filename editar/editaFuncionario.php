<?php
	include '../include/header.php';
  include '../cadastros/popup.php';

  //Recebe os dados a serem editados
  $idFuncionario = filter_input(INPUT_POST, 'idFuncionario');
  $cracha = filter_input(INPUT_POST, 'cracha');
  $nome = filter_input(INPUT_POST, 'nome');
  $empresa = filter_input(INPUT_POST, 'empresa');
  $pis = filter_input(INPUT_POST, 'pis');
  $registro = filter_input(INPUT_POST, 'registro');
  $ctps = filter_input(INPUT_POST, 'ctps');
  $serie = filter_input(INPUT_POST, 'serie');
  $funcao = filter_input(INPUT_POST, 'funcao');
  $departamento = filter_input(INPUT_POST, 'departamento');
  $setor = filter_input(INPUT_POST, 'setor');
  $centroCusto = filter_input(INPUT_POST, 'centroCusto');
  $admissao = filter_input(INPUT_POST, 'admissao');
  $cpf = filter_input(INPUT_POST, 'cpf');
  $eleitor = filter_input(INPUT_POST, 'eleitor');
  $carteiraReservista = filter_input(INPUT_POST, 'carteiraReservista');
  $estadoCivil = filter_input(INPUT_POST, 'estadoCivil');
  $nascimento = filter_input(INPUT_POST, 'nascimento');
  $sexo = filter_input(INPUT_POST, 'sexo');
  $rg = filter_input(INPUT_POST, 'rg');
  $orgaoEmissor = filter_input(INPUT_POST, 'orgaoEmissor');
  $cnh = filter_input(INPUT_POST, 'cnh');
  $inicioExperiencia = filter_input(INPUT_POST, 'inicioExperiencia');
  $fimExperiencia = filter_input(INPUT_POST, 'fimExperiencia');
  $endereco = filter_input(INPUT_POST, 'endereco');
  $numero = filter_input(INPUT_POST, 'numero');
  $bairro = filter_input(INPUT_POST, 'bairro');
  $estado = filter_input(INPUT_POST, 'estado');
  $cidade = filter_input(INPUT_POST, 'cidade');
  $cep = filter_input(INPUT_POST, 'cep');
  $telefone = filter_input(INPUT_POST, 'telefone');
  $celular = filter_input(INPUT_POST, 'celular');
  $email = filter_input(INPUT_POST, 'email');
  $escolaridade = filter_input(INPUT_POST, 'escolaridade');
  $salario = filter_input(INPUT_POST, 'salario');

/*
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "administrativo";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection

  // consulta empresas cadastradas no banco
  $consultaEmpresa = "SELECT * FROM empresa";
  $empresa = $conn-> query($consultaEmpresa) or die($conn->error);
  
  // consuta funções cadastradas no banco
  $consultaFuncao = "SELECT * FROM funcao";
  $funcao = $conn-> query($consultaFuncao) or die($conn->error);

  //consulta departamentos cadastrados no banco
  $consultaDepartamento = "SELECT * FROM departamento";
  $departamento = $conn-> query($consultaDepartamento) or die($conn->error);

  //consulta setor cadastrados no banco
  $consultaSetor = "SELECT * FROM setor";
  $setor = $conn-> query($consultaSetor) or die($conn->error);

  //consulta centro de custo cadastrados no banco
  $consultaCentroCusto = "SELECT * FROM centroCusto";
  $centroCusto = $conn-> query($consultaCentroCusto) or die($conn->error);

    //consulta centro de custo cadastrados no banco
  $consultaEstadoCivil = "SELECT * FROM estadoCivil";
  $estadoCivil = $conn-> query($consultaEstadoCivil) or die($conn->error);
*/

?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
 
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Cadastro de Funcionarios <small></small></h2>
            <div class="clearfix"></div>
          </div>
          <div>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.php">Inicio</a>
              </li>
              <li class="breadcrumb-item ">Cadastros</li>
              <li class="breadcrumb-item active">Funcionarios</li>
            </ol>
          </div>
          <div class="x_content">
            <br />
            <form class="form-horizontal form-label-left input_mask" action="salvaFuncionario.php" method="POST">
              <input type="hidden" name="idFornecedor" value="<?php echo $idFornecedor; ?>">
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" placeholder="Crachá" name="cracha" value="<?php echo $cracha; ?>">
                    <span class="fa fa-credit-card form-control-feedback left"></span>
                  </div>  
                  <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" placeholder="Nome" name="nome" value="<?php echo $nome; ?>">
                    <span class="fa fa-user form-control-feedback left"></span>
                  </div>               
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                   
                    <label>Empresa</label>
                    <select class="form-control has-feedback-left" name="empresa">
                      <option><?php echo $empresa; ?></option>
                    </select>
                    <span class="fa fa-building-o form-control-feedback left"></span>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <br>
                    <button type="button" class="btn btn-primary glyphicon glyphicon-plus-sign" style="top: 5px;" data-toggle="modal" data-target="#addEmpresaModal"></button>
                    <span id="msg"></span>
                    <span id="conteudo"></span>          
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="pis form-control has-feedback-left" id="pis" placeholder="PIS" name="pis" value="<?php echo $pis; ?>">
                    <span class="fa fa-credit-card form-control-feedback left"></span>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" placeholder="Registro" name="registro" value="<?php echo $registro; ?>">
                      <span class="fa fa-credit-card form-control-feedback left"></span>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                  	<input type="text" class="form-control has-feedback-left" placeholder="CTPS" name="ctps" value="<?php echo $ctps; ?>">
                  	<span class="fa fa-credit-card form-control-feedback left"></span>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                  	<input type="text" class="form-control has-feedback-left" placeholder="Série" name="serie" value="<?php echo $serie; ?>">
                  	<span class="fa fa-credit-card form-control-feedback left"></span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
                    <label>Função</label>
                    <select class="form-control has-feedback-left" name="funcao">
                      <option><?php echo $funcao; ?></option>
                    </select>
                    <span class="fa fa-briefcase form-control-feedback left"></span>                    
                  </div>
                  <div class="col-md-1 col-sm-6 col-xs-12 form-group has-feedback">
                    <br>
                    <button type="button" class="btn btn-primary glyphicon glyphicon-plus-sign" style="top: 5px;" data-toggle="modal" data-target="#addFuncaoModal"></button>
                    <span id="msg"></span>
                    <span id="conteudo"></span>          
                  </div>
                  <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
                    <label>Departamento</label>
                    <select class="form-control has-feedback-left" name="departamento">
                      <option><?php echo $departamento; ?></option>
                    </select>
                    <span class="fa fa-user form-control-feedback left"></span>
                  </div>
                  <div class="col-md-1 col-sm-6 col-xs-12 form-group has-feedback">
                    <br>
                    <button class='btn btn-primary glyphicon glyphicon-plus-sign' style="top: 5px;" data-toggle='tooltip' data-placement='top' title='Incluir novo departamento'></button>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
                    <label>Setor</label>
                    <select class="form-control has-feedback-left" name="setor">
                      <option><?php echo $setor; ?></option>
                    </select>
                    <span class="fa fa-user form-control-feedback left"></span>
                  </div>
                  <div class="col-md-1 col-sm-6 col-xs-12 form-group has-feedback">
                    <br>
                    <button class="btn btn-primary glyphicon glyphicon-plus-sign" style="top: 5px;" data-toggle='tooltip' data-placement='top' title='Incluir novo setor'></button>
                  </div>
                  <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
                    <label>Centro de Custo</label>
                    <select class="form-control has-feedback-left" name="centroCusto">
                      <option><?php echo $centroCusto; ?></option>
                    </select>
                    <span class="fa fa-user form-control-feedback left"></span>
                  </div>
                  <div class="col-md-1 col-sm-6 col-xs-12 form-group has-feedback">
                    <br>
                    <button class="btn btn-primary glyphicon glyphicon-plus-sign" style="top: 5px;" data-toggle='tooltip' data-placement='top' title='Incluir novo centro de custo'></button>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <label>Admissão</label>
                    <input type="date" class="form-control has-feedback-left" name="admissao" value="<?php echo $admissao; ?>">
                    <span class="fa fa-calendar form-control-feedback left"></span>
                  </div>                 
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="cpf form-control has-feedback-left" id="cpf" placeholder="CPF" name="cpf" value="<?php echo $cpf; ?>">
                    <span class="fa fa-credit-card form-control-feedback left"></span>
                  </div>

                  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" placeholder="Titulor de Eleitor" name="tituloEleitor" value="<?php echo $eleitor?>">
                    <span class="fa fa-credit-card form-control-feedback left"></span>
                  </div>

                  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" placeholder="Carteira de Reservista" name="carteiraReservista" value="<?php echo $carteiraReservista; ?>">
                    <span class="fa fa-credit-card form-control-feedback left"></span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                    <label>Estado Civil</label>
                    <select class="form-control has-feedback-left" name="estadoCivil">
                      <option><?php echo $estadoCivil; ?></option>
                    </select>
                    <span class="fa fa-user	 form-control-feedback left"></span>
                  </div>

                  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                    <label>Data de Nascimento</label>
                    <input type="date" class="form-control has-feedback-left" name="nascimento" value="<?php echo $nascimento; ?>">
                    <span class="fa fa-calendar form-control-feedback left"></span>
                  </div>

                  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                    <label>Sexo</label>
                    <br>
                    <input type="radio" name="sexo" value="masculino"> Masculino
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;                
                    <input type="radio" name="sexo" value="feminino"> Feminino
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <input type="text" class="form-control has-feedback-left" placeholder="RG" name="rg" value="<?php echo $rg; ?>">
                    <span class="fa fa-credit-card form-control-feedback left"></span>
                  </div>

                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <input type="text" class="form-control has-feedback-left" placeholder="Orgão Emissor" name="orgaoEmissor" value="<?php echo $orgaoEmissor; ?>">
                    <span class="fa fa-calendar form-control-feedback left"></span>
                  </div>

                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <input type="text" class="form-control has-feedback-left" placeholder="N° CNH" name="cnh" value="<?php echo $cnh; ?>">
                    <span class="fa fa-calendar form-control-feedback left"></span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <label>Inicio Expêriencia</label>
                    <input type="date" class="form-control has-feedback-left" name="inicioExperiencia" value="<?php echo $inicioExperiencia; ?>">
                    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                  </div>                 

                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback"> 
                    <label>Fim Expêriencia</label>
                    <input type="date" class="form-control has-feedback-left" name="fimExperiencia" value="<?php echo $fimExperiencia; ?>">
                    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" placeholder="Endereço" name="endereco" value="<?php echo $endereco; ?>">
                    <span class="fa fa-calendar form-control-feedback left"></span>
                  </div>
                  <div class="col-md-2 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" placeholder="Número" name="numero" value="<?php echo $numero; ?>">
                    <span class="fa fa-calendar form-control-feedback left"></span>
                  </div>
                  <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" placeholder="Bairro" name="bairro" value="<?php echo $bairro; ?>">
                    <span class="fa fa-calendar form-control-feedback left"></span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">

                    <label>Estado</label> 
                    <select id="uf" name="estado" onchange="carregaConteudo(this);" class="form-control has-feedback-left" >
                      <option><?php echo $estado; ?></option>
                      <option value="acre">Acre</option>
                      <option value="alagoas">Alagoas</option>
                      <option value="amapa">Amapá</option>
                      <option value="amazonas">Amazonas</option>
                      <option value="bahia">Bahia</option>
                      <option value="ceara">Ceará</option>
                      <option value="distrito federal">Distrito Federal</option>
                      <option value="espirito santo">Espirito Santo</option>
                      <option value="goias">Goías</option>
                      <option value="maranhao">Maranhão</option>
                      <option value="mato grosso">Mato Grosso</option>
                      <option value="mato grosso do sul">Mato Grosso do Sul</option>
                      <option value="minas gerais">Minas Gerais</option>
                      <option value="para">Pará</option>
                      <option value="paraiba">Paraiba</option>
                      <option value="parana">Paraná</option>
                      <option value="pernambuco">Pernanbuco</option>
                      <option value="piaui">Piauí</option>
                      <option value="rio de janeiro">Rio de Janeiro</option>
                      <option value="rio grande do norte">Rio Grande do Norte</option>
                      <option value="rio grande do sul">Rio Grande do Sul</option>
                      <option value="rondonia">Rondônia</option>
                      <option value="roraima">Roraima</option>
                      <option value="santa catarina">Santa Catarina</option>
                      <option value="sao paulo">São Paulo</option>
                      <option value="sergipe">Sergipe</option>
                      <option value="tocantins">Tocantins</option>
                    </select>
                    <span class="fa fa-user form-control-feedback left"></span>
                  </div>

                  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                    <label>Cidade</label>
                    <select id="cidade" name="cidade" class="form-control has-feedback-left" >
                      <option><?php echo $cidade; ?></option>
                    </select>           
                    <span class="fa fa-user form-control-feedback left"></span>
                    <div id="conteudo">
                              

                    </div>    
                  </div>

                  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                    <label>CEP</label>
                    <input type="text" class="cep form-control has-feedback-left" id="cep" name="cep" value="<?php echo $cep; ?>">
                    <span class="fa fa-calendar form-control-feedback left"></span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="telefone form-control has-feedback-left" id="telefone" placeholder="Telefone" name="telefone" value="<?php echo $telefone; ?>">
                    <span class="fa fa-calendar form-control-feedback left"></span>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="celular form-control has-feedback-left" placeholder="Celular" id="celular" name="celular" value="<?php echo $celular; ?>">
                    <span class="fa fa-calendar form-control-feedback left"></span>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" placeholder="E-mail" name="email" value="<?php echo $email; ?>">
                    <span class="fa fa-calendar form-control-feedback left"></span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" placeholder="Escolaridade" name="escolaridade" value="<?php echo $escolaridade; ?>">
                    <span class="fa fa-calendar form-control-feedback left"s></span>
                  </div>

                  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="number" class="form-control has-feedback-left" placeholder="Salário" name="salario" value="<?php echo $salario; ?>">
                    <span class="fa fa-calendar form-control-feedback left"></span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <div class="table-responsive">
                        <table id="products-table"  class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <tbody>
                            <tr>
                              <th>Dependente</th>
                              <th>Ações</th>
                            </tr>
                          </tbody>
                          <tfoot>
                            <tr>
                              <td colspan="5" style="text-align: left;">
                                <button onclick="AddTableRow()" type="button" class="btn btn-primary">Adicionar Dependente</button>
                              </td>
                            </tr>
                          </tfoot>
                        </table>
                  </div>
                </div>                 
              </div>
            </div>              

              <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                    <button type="submit" class="btn btn-success" value="enviar" name="enviar">Enviar</button>
                    <button type="reset" class="btn btn-danger">Cancelar</button>
                  </div>
                </div>
                </div>
              </div>

            </form>
          </div>
        </div>
    </div>
  </div>
</div>

<!-- /page content -->

<?php
	include '../include/footer.php';
?>