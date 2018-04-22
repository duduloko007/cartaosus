
<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Adicionar dependentes</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
  </div>
<div class="texto"></div>
  <div class="box-body">
    <div class="tab-content">
      <div id="physical_person" class="tab-pane active in fade  w3-animate-left">
        <form method="POST">
          <div class="row">
            <div class="col-md-7">
              <div class="form-group">
                <label>Nome do paciente:<strong class="text-red">*</strong></label>
                <input type="text" name="name" onKeyUp="javascript: this.value=this.value.toUpperCase();" placeholder="Escreva o nome completo do paciente" class="form-control " id="nome" required>
              </div>
            </div>

            <div class="col-md-3" >
              <div class="form-group">
                <label>Número Paciente<strong class="text-red">*</strong></label>
                <input type="text" readonly="true" name="date_birth_fund" id="num_paciente" class="form-control" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Nome do dependente:</label>
                <input type="text" name="data_nascimento" id="data_nascimento" class="form-control ">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Data de nascimento:</label>
                <input type="text" name="identidade" id="identidade" class="form-control ">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Estudante<strong class="text-red">*</strong></label>
                <input type="text" name="cpf_cnpj" id="cpf" class="form-control" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Tipo de deficiência:</label>
                <input type="email" name="email" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Grau parentesco:</label>
                <input type="text" name="phone_fix" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Sexo:<strong class="text-red">*</strong></label>
                <input type="text" name="phone" class="form-control" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
              <label>Carteira de indetidade:<strong class="text-red">*</strong></label>
              <input type="text" name="address_zipcode" id="address_zipcode" class="form-control ">
            </div>
           </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Ocupação:<strong class="text-red">*</strong></label>
              <input type="text" name="address" class="form-control " required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Tipo sanguineo:<strong class="text-red">*</strong></label>
              <input type="text" name="address_number" class="form-control " required>
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
