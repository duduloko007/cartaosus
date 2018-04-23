
<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Adicionar dependentes</h3>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
    <br>
    <br>

<div class="texto"></div>
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
            <div class="col-md-7">
              <div class="form-group">
                <label>Nome do paciente:<strong class="text-red">*</strong></label>
                <input type="text" name="name" onKeyUp="javascript: this.value=this.value.toUpperCase();" placeholder="Escreva o nome completo do paciente" class="form-control " id="nome" required>
              </div>
            </div>

            <div class="col-md-3" >
              <div class="form-group">
                <label>Número Paciente<strong class="text-red">*</strong></label>
                <input type="text" readonly="true" name="num_paciente" id="num_paciente" class="form-control" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Nome do dependente:</label>
                <input type="text" onKeyUp="javascript: this.value=this.value.toUpperCase();" name="nomeDependetes" class="form-control " required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Data de nascimento:</label>
                <input type="text" name="data_nasc" class="form-control date">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Estudante<strong class="text-red">*</strong></label>
                <select class="form-control" name="estudante" >
                  <option></option>
                  <option>SIM</option>
                  <option>NÃO</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Grau parentesco:</label>
                <input type="text" onKeyUp="javascript: this.value=this.value.toUpperCase();" name="parentesco" class="form-control">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Sexo:<strong class="text-red">*</strong></label>
                <select name="sexo" class="form-control" required>
                  <option value="M">MASCULINO</option>
                  <option value="F">FEMININO</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
              <label>Carteira de indetidade:<strong class="text-red">*</strong></label>
              <input type="text" onKeyUp="javascript: this.value=this.value.toUpperCase();" name="cart_indentidade" id="address_zipcode" class="form-control " required>
            </div>
           </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Ocupação:<strong class="text-red">*</strong></label>
              <input type="text" onKeyUp="javascript: this.value=this.value.toUpperCase();" name="ocupacao" class="form-control " >
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Tipo sanguineo:<strong class="text-red">*</strong></label>
              <input type="text" onKeyUp="javascript: this.value=this.value.toUpperCase();" name="sanguineo" class="form-control ">
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
