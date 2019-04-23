<div id="addEmpresaModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addUsuarioModalLabel">Cadastrar Empresa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" id="insert_form">
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
								<input type="text" class="form-control has-feedback-left" placeholder="Razão Social" name="razaoSocial">
								<span class="fa fa-user form-control-feedback left"></span>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
								<input type="text" class="form-control has-feedback-left" placeholder="Fantasia" name="fantasia">
								<span class="fa fa-user form-control-feedback left"></span>
							</div>
						</div>
					</div>					<div class="form-group">
						<div class="form-row">
							<div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
								<input type="text" class="form-control has-feedback-left" placeholder="Endereço" name="endereco">
								<span class="fa fa-user form-control-feedback left"></span>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
								<input type="text" class="form-control has-feedback-left" placeholder="N°" name="numero">
								<span class="fa fa-user form-control-feedback left"></span>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
								<input type="text" class="form-control has-feedback-left" placeholder="Bairro" name="bairro">
								<span class="fa fa-user form-control-feedback left"></span>
							</div>
						</div>
					</div>					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
								<label>Estado</label>
								<select id="uf" name="estado" onchange="carregaConteudo(this);" class="form-control has-feedback-left" >
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
                      				<option>-</option>
                    			</select>           
                    			<span class="fa fa-user form-control-feedback left"></span>
                    			<div id="conteudo">
                              

                    			</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-12 form-group has-feedback">
								<label>CEP</label>
								<input type="text" class="form-control has-feedback-left" name="cep">
								<span class="fa fa-user form-control-feedback left"></span>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
								<input type="text" class="form-control has-feedback-left" placeholder="CNPJ" name="cnpj">
								<span class="fa fa-user form-control-feedback left"></span>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
								<input type="text" class="form-control has-feedback-left" placeholder="Ramo de Atividade" name="atividade">
								<span class="fa fa-user form-control-feedback left"></span>
							</div>
						</div>
					</div>
					
					
					<div class="form-group row">
						<div class="col-sm-10">
							<input type="submit" name="CadUser" id="CadUser" value="Cadastrar" class="btn btn-outline-success">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div id="addFuncaoModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addUsuarioModalLabel">Cadastrar Função</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" id="insert_form">
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
								<input type="text" class="form-control has-feedback-left" placeholder="Razão Social" name="Função">
								<span class="fa fa-user form-control-feedback left"></span>
							</div>
						</div>
					</div>
					
					
					<div class="form-group row">
						<div class="col-sm-10">
							<input type="submit" name="CadUser" id="CadUser" value="Cadastrar" class="btn btn-outline-success">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>