<?php
	include '../include/header.php';
  include 'popup.php';


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

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" placeholder="Crachá" name="cracha">
                    <span class="fa fa-credit-card form-control-feedback left"></span>
                  </div>  
                  <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" placeholder="Nome" name="nome">
                    <span class="fa fa-user form-control-feedback left"></span>
                  </div>               
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                   
                    <label>Empresa</label>
                    <select class="form-control has-feedback-left" name="empresa">
                      <option>-</option>
                      <?php while($dado = $empresa->fetch_array()){ ?>
                        <option><?php echo $dado['fantasia']; ?></option>
                      <?php } ?>
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
                    <input type="text" class="pis form-control has-feedback-left" id="pis" placeholder="PIS" name="pis">
                    <span class="fa fa-credit-card form-control-feedback left"></span>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" placeholder="Registro" name="registro">
                      <span class="fa fa-credit-card form-control-feedback left"></span>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                  	<input type="text" class="form-control has-feedback-left" placeholder="CTPS" name="ctps">
                  	<span class="fa fa-credit-card form-control-feedback left"></span>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                  	<input type="text" class="form-control has-feedback-left" placeholder="Série" name="serie">
                  	<span class="fa fa-credit-card form-control-feedback left"></span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
                    <label>Função</label>
                    <select class="form-control has-feedback-left" name="funcao">
                      <option>-</option>
                      <?php while($dado = $funcao->fetch_array()){ ?>
                        <option><?php echo $dado['funcao']; ?></option>
                      <?php } ?>
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
                      <option>-</option>
                      <?php while($dado = $departamento->fetch_array()){ ?>
                      <option><?php echo $dado['departamento']; ?></option>
                    <?php } ?>
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
                      <option>-</option>
                      <?php while($dado = $setor->fetch_array()){ ?>
                      <option><?php echo $dado['setor']; ?></option>
                    <?php } ?>
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
                      <option>-</option>
                      <?php while($dado = $centroCusto->fetch_array()){ ?>
                      <option><?php echo $dado['centroCusto']; ?></option>
                    <?php } ?>
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
                    <input type="date" class="form-control has-feedback-left" name="admissao">
                    <span class="fa fa-calendar form-control-feedback left"></span>
                  </div>                 
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="cpf form-control has-feedback-left" id="cpf" placeholder="CPF" name="cpf">
                    <span class="fa fa-credit-card form-control-feedback left"></span>
                  </div>

                  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" placeholder="Titulor de Eleitor" name="tituloEleitor">
                    <span class="fa fa-credit-card form-control-feedback left"></span>
                  </div>

                  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" placeholder="Carteira de Reservista" name="reservista">
                    <span class="fa fa-credit-card form-control-feedback left"></span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                    <label>Estado Civil</label>
                    <select class="form-control has-feedback-left" name="estadoCivil">
                      <option>-</option>
                      <?php while($dado = $estadoCivil->fetch_array()){ ?>
                      <option><?php echo $dado['estadoCivil']; ?></option>
                    <?php } ?>
                    </select>
                    <span class="fa fa-user	 form-control-feedback left"></span>
                  </div>

                  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                    <label>Data de Nascimento</label>
                    <input type="date" class="form-control has-feedback-left" name="nascimento">
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
                    <input type="text" class="form-control has-feedback-left" placeholder="RG" name="rg">
                    <span class="fa fa-credit-card form-control-feedback left"></span>
                  </div>

                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <input type="text" class="form-control has-feedback-left" placeholder="Orgão Emissor" name="orgaoEmissor">
                    <span class="fa fa-calendar form-control-feedback left"></span>
                  </div>

                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <input type="text" class="form-control has-feedback-left" placeholder="N° CNH" name="cnh">
                    <span class="fa fa-calendar form-control-feedback left"></span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <label>Inicio Expêriencia</label>
                    <input type="date" class="form-control has-feedback-left" name="inicioExperiencia">
                    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                  </div>                 

                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback"> 
                    <label>Fim Expêriencia</label>
                    <input type="date" class="form-control has-feedback-left" name="fimExperiencia">
                    <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" placeholder="Endereço" name="enderecoFuncionario">
                    <span class="fa fa-calendar form-control-feedback left"></span>
                  </div>
                  <div class="col-md-2 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" placeholder="Número" name="numero">
                    <span class="fa fa-calendar form-control-feedback left"></span>
                  </div>
                  <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" placeholder="Bairro" name="bairroFuncionario">
                    <span class="fa fa-calendar form-control-feedback left"></span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">

                    <label>Estado</label> 
                <select id="uf" name="estado" onchange="carregaConteudo(this);" class="form-control has-feedback-left" required="">
                  <option>-</option>
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
                  <option value="pernambuco">Pernambuco</option>
                  <option value="piaui">Piauí</option>
                  <option value="rio de janeiro">Rio de Janeiro</option>
                  <option value="rio grane do norte">Rio Grande do Norte</option>
                  <option value="rio grande do sul">Rio Grande do Sul</option>
                  <option value="rondonia">Rondônia</option>
                  <option value="roraima">Roraima</option>
                  <option value="santa catarina">Santa Catarina</option>
                  <option value="sao paulo">São Paulo</option>
                  <option value="sergipe">Sergipe</option>
                  <option value="tocantins">Tocantins</option>
                </select>
                <span class="fa fa-envelope form-control-feedback left"></span>
                  </div>

                  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                <label>Cidade</label>
                <select id="cidade" name="cidade" class="form-control has-feedback-left" required="">
                  <option>-</option>
                </select>           
                <span class="fa fa-envelope form-control-feedback left"></span>
                <div id="conteudo">
                          

                </div>   
                  </div>

                  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                    <label>CEP</label>
                    <input type="text" class="cep form-control has-feedback-left" id="cep" name="cep">
                    <span class="fa fa-calendar form-control-feedback left"></span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="telefone form-control has-feedback-left" id="telefone" placeholder="Telefone" name="telefone">
                    <span class="fa fa-calendar form-control-feedback left"></span>
                  </div>

                  <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="celular form-control has-feedback-left" placeholder="Celular" id="celular" name="celular">
                    <span class="fa fa-calendar form-control-feedback left"></span>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" placeholder="E-mail" name="email">
                    <span class="fa fa-calendar form-control-feedback left"></span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-8 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" placeholder="Escolaridade" name="escolaridade">
                    <span class="fa fa-calendar form-control-feedback left"s></span>
                  </div>

                  <div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="number" class="form-control has-feedback-left" placeholder="Salário" name="salario">
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