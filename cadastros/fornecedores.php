<?php
    include '../include/header.php';
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
 
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Cadastro Fornecedores <small></small></h2>
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
            <br />
            <form class="form-horizontal form-label-left input_mask" action="salvaFornecedor.php" method="POST">

              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" placeholder="Razão Social" name="razaoSocial" maxlength="60" required="">
                <span class="fa fa-user form-control-feedback left"></span>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" placeholder="Nome Fantasia" name="fantasia" maxlength="60" required="">
                <span class="fa fa-user form-control-feedback left"></span>
              </div>

              <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" placeholder="Endereço" name="endereco" maxlength="60" required="">
                <span class="fa fa-envelope form-control-feedback left"></span>
              </div>

              <div class="col-md-2 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" placeholder="Número" name="numero" maxlength="5">
                <span class="fa fa-envelope form-control-feedback left"></span>
              </div>

              <div class="col-md-5 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="text" class="form-control has-feedback-left" placeholder="Bairro" name="bairro" maxlength="60" required="">
                  <span class="fa fa-envelope form-control-feedback left"></span>
              </div>

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
                <input type="text" class="cep form-control has-feedback-left" id="cep" name="cep" maxlength="9">
                <span class="fa fa-envelope form-control-feedback left"></span>
              </div>
                            
              <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="telefone form-control has-feedback-left" id="telefone" placeholder="Telefone" name="telefone" required="">
                    <span class="fa fa-phone form-control-feedback left"></span>
              </div>

              <div class="col-md-3 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="text" class="celular form-control has-feedback-left" id="celular" placeholder="Celular" name="celular">
                <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                <input type="email" class="form-control has-feedback-left" placeholder="E-mail" name="email" maxlength="60">
                <span class="fa fa-envelope form-control-feedback left"></span>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" name="cnpj" class="cnpj form-control has-feedback-left" id="cnpj" placeholder="CNPJ">
                    <span class="fa fa-credit-card form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="inscricaoEstadual form-control has-feedback-left" id="inscricaoEstadual" placeholder="Inscrição Estadual" name="inscricaoEstadual">
                    <span class="fa fa-credit-card form-control-feedback left" aria-hidden="true"></span>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                  <input type="text" class="form-control has-feedback-left" placeholder="Ramo de Atividade" name="atividade" maxlength="30" required="">
                  <span class="fa fa-cubes form-control-feedback left" aria-hidden="true"></span>
                </div>
              </div>

              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" placeholder="Contato" name="contato" maxlength="60" required="">
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                    <input type="text" class="form-control has-feedback-left" placeholder="Função" name="funcao" maxlength="60" required="">
                    <span class="fa fa-cogs form-control-feedback left" aria-hidden="true"></span>
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