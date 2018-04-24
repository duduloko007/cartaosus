
<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Adicionar Paciente - Titular</h3>
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
                <input type="text" onKeyUp="javascript: this.value=this.value.toUpperCase();" name="nome" class="form-control " required>
              </div>
            </div>

          <div class="col-md-4" >
              <div class="form-group">
                <label>Data Nascimento:<strong class="text-red">*</strong></label>
                <input type="text"  name="data_nascimento" id="date_birth" class="form-control date" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>RG:</label>
                <input type="text" onKeyUp="javascript: this.value=this.value.toUpperCase();"  name="identidade" id="identidade" class="form-control " required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>CPF:<strong class="text-red">*</strong></label>
                <input type="text" name="cpf" id="cpf" class="form-control cpf">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>E-mail:</label>
                <input type="email" name="email" class="form-control" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Telefone:</label>
                <input type="text" name="telefone" class="form-control phone" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Celular:<strong class="text-red">*</strong></label>
                <input type="text" name="celular" class="form-control phone_with_ddd" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Cep:<strong class="text-red">*</strong></label>
                <input type="text" name="cep" id="address_zipcode" class="form-control cep" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Logradouro:<strong class="text-red">*</strong></label>
                <input type="text" onKeyUp="javascript: this.value=this.value.toUpperCase();" name="endereco" class="form-control " required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Número:<strong class="text-red">*</strong></label>
                <input type="text"  name="numero" class="form-control " required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Complemento:</label>
                <input type="text" onKeyUp="javascript: this.value=this.value.toUpperCase();" name="complemento" class="form-control " required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Bairro:<strong class="text-red">*</strong></label>
                <input type="text" onKeyUp="javascript: this.value=this.value.toUpperCase();" name="bairro" class="form-control " required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Cidade:<strong class="text-red">*</strong></label>
                <input type="text" onKeyUp="javascript: this.value=this.value.toUpperCase();" name="cidade" class="form-control " required> 
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Estado:<strong class="text-red">*</strong></label>
                <select type="text" name="estado" class="form-control " required>
                  <option></option>
                  <option value="AC">ACRE</option>
                  <option value="AL">ALAGOAS</option>
                  <option value="AP">AMAPÁ</option>
                  <option value="AM">AMAZONAS</option>
                  <option value="BA">BAHIA</option>
                  <option value="CE">CEARÁ</option>
                  <option value="DF">DISTRITO FEDERAL</option>
                  <option value="ES">ESPIRITO SANTO</option>
                  <option value="GO">GOIÁS</option>
                  <option value="MA">MARANHÃO</option>
                  <option value="MT">MATO GROSSO</option>
                  <option value="MS">MATO GROSSO DO SUL</option>
                  <option value="MG">MINAS GERAIS</option>
                  <option value="PA">PARÁ</option>
                  <option value="PB">PARAIBA</option>
                  <option value="PR">PARANÁ</option>
                  <option value="PE">PERNANBUCO</option>
                  <option value="PI">PIAUI</option>
                  <option value="RJ">RIO DE JANEIRO</option>
                  <option value="RN">RIO GRANDE DO NORTE</option>
                  <option value="RS">RIO GRANDE DO SUL</option>
                  <option value="RO">RONDÔNIA</option>
                  <option value="RR">RORAIMA</option>
                  <option value="SC">SANTA CATARIA</option>
                  <option value="SP">SÃO PAULO</option>
                  <option value="SE">SERGIPE</option>
                  <option value="TO">TOCATINS</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Tipo de residência:</label>
                <select type="text" name="residencia" class="form-control " required>
                  <option></option>
                  <option value="PRÓPRIA">PRÓPRIA</option>
                  <option value="ALUGADA">ALUGADA</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Sexo:</label>
                <select type="text" name="sexo" class="form-control " required>
                  <option></option>
                  <option value="M">MASCULINO</option>
                  <option value="F">FEMININO</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Estado Civil:</label>
                <select type="text"  name="estado_civil" class="form-control " required>
                  <option ></option>
                  <option value="SOLTEIRO" >SOLTEIRO</option>
                  <option value="CASADO">CASADO</option>
                  <option value="SEPARADO">SEPARADO</option>
                  <option value="DIVORCIADO">DIVORCIADO</option>
                  <option value="VIÚVO">VIÚVO</option>
                  <option value="AMASIADO">AMASIADO</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Nome da mãe:</label>
                <input type="text" onKeyUp="javascript: this.value=this.value.toUpperCase();" name="nome_mae" class="form-control " required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Nome do pai:</label>
                <input type="text" onKeyUp="javascript: this.value=this.value.toUpperCase();" name="nome_pai" class="form-control " required>
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