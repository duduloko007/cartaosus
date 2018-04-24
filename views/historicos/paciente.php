
<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Cadastro de prontuário do paciente</h3>
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
            
          <div class="col-md-7">
              <div class="form-group">
                <label>Nome do paciente:<strong class="text-red">*</strong></label>
                <input type="text" name="name" onKeyUp="javascript: this.value=this.value.toUpperCase();" placeholder="Escreva o nome completo do paciente" class="form-control " id="nome" required>
              </div>
            </div>

            <div class="col-md-3" >
              <div class="form-group">
                <label>Número cadastro<strong class="text-red">*</strong></label>
                <input type="text" readonly="true" name="num_paciente" id="num_paciente" class="form-control" required>
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
                <label>Data Nascimento:<strong class="text-red">*</strong></label>
                <input type="date" name="data_nascimentop"  class="form-control" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Data:</label>
                <input type="date" name="data" class="form-control" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>hora:</label>
                <input type="text" name="hora" class="form-control" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>peso:<strong class="text-red">*</strong></label>
                <input type="text" name="peso" class="form-control" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Altura:<strong class="text-red">*</strong></label>
                <input type="text" name="altura" id="address_zipcode" class="form-control " required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Logradouro:<strong class="text-red">*</strong></label>
                <input type="text" onKeyUp="javascript: this.value=this.value.toUpperCase();" name="logradouro" class="form-control " required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Pa:<strong class="text-red">*</strong></label>
                <input type="text"  name="pa" class="form-control " required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Temperatura:</label>
                <input type="text" onKeyUp="javascript: this.value=this.value.toUpperCase();" name="temp" class="form-control " required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>glicemia:<strong class="text-red">*</strong></label>
                <input type="text" onKeyUp="javascript: this.value=this.value.toUpperCase();" name="glicemia" class="form-control " required>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Relatório de registros:<strong class="text-red">*</strong></label>
                <textarea  type="text"  name="relatorio" class="form-control " required>
                </textarea>
              </div>
            </div>

             <div class="col-md-12">
              <div class="form-group">
                <label>Medicação prescrita:<strong class="text-red">*</strong></label>
                <textarea type="text" name="medicacao" class="form-control " required>
                </textarea>
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