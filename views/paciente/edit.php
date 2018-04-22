
<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Editar Paciente - Titular</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"></button>
    </div>
  </div>

  <div class="box-body">
    <div class="tab-content">
      <?php
     if(!empty($msg)){
       ?>
       <?php
       echo '<div class="alert alert-success">';
       echo $msg;
       echo '</div>';
       ?>

       <?php
     }
     ?>
      <div id="physical_person" class="tab-pane active in fade  w3-animate-left">
        <form method="POST">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Nome:<strong class="text-red">*</strong></label>
                <input type="text" value="<?php echo $list['pac_nome'];?>" onKeyUp="javascript: this.value=this.value.toUpperCase();" name="nome" class="form-control " required>
              </div>
            </div>

          <div class="col-md-4" >
              <div class="form-group">
                <label>Data Nascimento:<strong class="text-red">*</strong></label>
                <input type="text" value="<?php echo $list['pac_datanascimento'];?>" name="data_nascimento" id="date_birth" class="form-control date" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>RG:</label>
                <input type="text" value="<?php echo $list['pac_ci'];?>" onKeyUp="javascript: this.value=this.value.toUpperCase();"  name="identidade" id="identidade" class="form-control " required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>CPF:<strong class="text-red">*</strong></label>
                <input type="text" value="<?php echo $list['pac_cpf'];?>" name="cpf" id="cpf" class="form-control cpf">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>E-mail:</label>
                <input type="email" value="<?php echo $list['pac_email'];?>" name="email" class="form-control" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Telefone:</label>
                <input type="text" value="<?php echo $list['pac_fone'];?>" name="telefone" class="form-control phone" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Celular:<strong class="text-red">*</strong></label>
                <input type="text" value="<?php echo $list['pac_celular'];?>" name="celular" class="form-control phone_with_ddd" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Cep:<strong class="text-red">*</strong></label>
                <input type="text" value="<?php echo $list['pac_cep'];?>" name="cep" id="address_zipcode" class="form-control cep" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Logradouro:<strong class="text-red">*</strong></label>
                <input type="text" value="<?php echo $list['pac_endereco'];?>" onKeyUp="javascript: this.value=this.value.toUpperCase();" name="endereco" class="form-control " required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Número:<strong class="text-red">*</strong></label>
                <input type="text" value="<?php echo $list['pac_numero'];?>"  name="numero" class="form-control " required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Complemento:</label>
                <input type="text" value="<?php echo $list['pac_complemento'];?>" onKeyUp="javascript: this.value=this.value.toUpperCase();" name="complemento" class="form-control " required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Bairro:<strong class="text-red">*</strong></label>
                <input type="text" value="<?php echo $list['pac_bairro'];?>" onKeyUp="javascript: this.value=this.value.toUpperCase();" name="bairro" class="form-control " required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Cidade:<strong class="text-red">*</strong></label>
                <input type="text" value="<?php echo $list['pac_cidade'];?>" onKeyUp="javascript: this.value=this.value.toUpperCase();" name="cidade" class="form-control " required> 
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Estado:<strong class="text-red">*</strong></label>
                <select type="text" name="estado" class="form-control " required>
                  <option></option>
                  <option value="AC" <?php echo($list['pac_estado'] == "AC") ? "selected" : ""?>>ACRE</option>
                  <option value="AL" <?php echo($list['pac_estado'] == "AL") ? "selected" : ""?>>ALAGOAS</option>
                  <option value="AP" <?php echo($list['pac_estado'] == "AP") ? "selected" : ""?>>AMAPÁ</option>
                  <option value="AM" <?php echo($list['pac_estado'] == "AM") ? "selected" : ""?>>AMAZONAS</option>
                  <option value="BA" <?php echo($list['pac_estado'] == "BA") ? "selected" : ""?>>BAHIA</option>
                  <option value="CE" <?php echo($list['pac_estado'] == "CE") ? "selected" : ""?>>CEARÁ</option>
                  <option value="DF" <?php echo($list['pac_estado'] == "DF") ? "selected" : ""?>>DISTRITO FEDERAL</option>
                  <option value="ES" <?php echo($list['pac_estado'] == "ES") ? "selected" : ""?>>ESPIRITO SANTO</option>
                  <option value="GO" <?php echo($list['pac_estado'] == "GO") ? "selected" : ""?>>GOIÁS</option>
                  <option value="MA" <?php echo($list['pac_estado'] == "MA") ? "selected" : ""?>>MARANHÃO</option>
                  <option value="MT" <?php echo($list['pac_estado'] == "MT") ? "selected" : ""?>>MATO GROSSO</option>
                  <option value="MS" <?php echo($list['pac_estado'] == "MS") ? "selected" : ""?>>MATO GROSSO DO SUL</option>
                  <option value="MG" <?php echo($list['pac_estado'] == "MG") ? "selected" : ""?>>MINAS GERAIS</option>
                  <option value="PA" <?php echo($list['pac_estado'] == "PA") ? "selected" : ""?>>PARÁ</option>
                  <option value="PB" <?php echo($list['pac_estado'] == "PB") ? "selected" : ""?>>PARAIBA</option>
                  <option value="PR" <?php echo($list['pac_estado'] == "PR") ? "selected" : ""?>>PARANÁ</option>
                  <option value="PE" <?php echo($list['pac_estado'] == "PE") ? "selected" : ""?>>PERNANBUCO</option>
                  <option value="PI" <?php echo($list['pac_estado'] == "PI") ? "selected" : ""?>>PIAUI</option>
                  <option value="RJ" <?php echo($list['pac_estado'] == "RJ") ? "selected" : ""?>>RIO DE JANEIRO</option>
                  <option value="RN" <?php echo($list['pac_estado'] == "RN") ? "selected" : ""?>>RIO GRANDE DO NORTE</option>
                  <option value="RS" <?php echo($list['pac_estado'] == "RS") ? "selected" : ""?>>RIO GRANDE DO SUL</option>
                  <option value="RO" <?php echo($list['pac_estado'] == "RO") ? "selected" : ""?>>RONDÔNIA</option>
                  <option value="RR" <?php echo($list['pac_estado'] == "RR") ? "selected" : ""?>>RORAIMA</option>
                  <option value="SC" <?php echo($list['pac_estado'] == "SC") ? "selected" : ""?>>SANTA CATARIA</option>
                  <option value="SP" <?php echo($list['pac_estado'] == "SP") ? "selected" : ""?>>SÃO PAULO</option>
                  <option value="SE" <?php echo($list['pac_estado'] == "SE") ? "selected" : ""?>>SERGIPE</option>
                  <option value="TO" <?php echo($list['pac_estado'] == "TO") ? "selected" : ""?>>TOCATINS</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Tipo de residência:</label>
                <select type="text" name="residencia" class="form-control " required>
                  <option></option>
                  <option value="PRÓPRIA" <?php echo($list['pac_tiporesidencia'] == "PRÓPRIA") ? "selected" : ""?>>PRÓPRIA</option>
                  <option value="ALUGADA" <?php echo($list['pac_tiporesidencia'] == "ALUGADA") ? "selected" : ""?>>ALUGADA</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Sexo:</label>
                <select type="text" name="sexo" class="form-control " required>
                  <option></option>
                  <option value="M" <?php echo($list['pac_sexo'] == "M") ? "selected" : ""?>>MASCULINO</option>
                  <option value="F" <?php echo($list['pac_sexo'] == "F") ? "selected" : ""?>>FEMININO</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Estado Civil:</label>
                <select type="text"  name="estado_civil" class="form-control " required>
                  <option ></option>
                  <option value="SOLTEIRO" <?php echo($list['pac_estadocivil'] == "SOLTEIRO") ? "selected" : ""?>>SOLTEIRO</option>
                  <option value="CASADO" <?php echo($list['pac_estadocivil'] == "CASADO") ? "selected" : ""?>>CASADO</option>
                  <option value="SEPARADO" <?php echo($list['pac_estadocivil'] == "SEPARADO") ? "selected" : ""?>>SEPARADO</option>
                  <option value="DIVORCIADO" <?php echo($list['pac_estadocivil'] == "DIVORCIADO") ? "selected" : ""?>>DIVORCIADO</option>
                  <option value="VIÚVO" <?php echo($list['pac_estadocivil'] == "VIÚVO") ? "selected" : ""?>>VIÚVO</option>
                  <option value="AMASIADO" <?php echo($list['pac_estadocivil'] == "AMASIADO") ? "selected" : ""?>>AMASIADO</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Nome da mãe:</label>
                <input type="text" value="<?php echo $list['pac_mae'];?>" onKeyUp="javascript: this.value=this.value.toUpperCase();" name="nome_mae" class="form-control " required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Nome do pai:</label>
                <input type="text" value="<?php echo $list['pac_pai'];?>" onKeyUp="javascript: this.value=this.value.toUpperCase();" name="nome_pai" class="form-control " required>
              </div>
            </div>
          </div>
          <input type="submit" value="Adicionar" class="btn btn-success btn-sm"/>
          <a href="<?php echo BASE_URL;?>clients" class="btn btn-danger btn-sm">Cancelar</a>
        </form>
      </div> 
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('.date').mask('00/00/0000');
    $('.cep').mask('99999-999');
    $('.phone_with_ddd').mask('(99) 99999-9999');
    $('.cpf').mask('000.000.000-00');
    $('.phone').mask('(00) 0000-0000');
  });
</script>

