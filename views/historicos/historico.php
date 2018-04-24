
<div class="box box-default">
   <div class="box-header with-border">
      <h3 class="box-title">Prontuário</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>
<div class="box-body">

    <div class="tab-content">
        <div id="permissions_gruop" class="tab-pane active in fade">

           <div class="row">
            
                <br/>
                <div class="col-md-5">
                 <a href="<?php echo BASE_URL; ?>/paciente/add" class="btn btn-primary btn-sm">Adicionar Paciente</a>

                </div>
                <div class="col-md-4 pull-right">
                    <input type="text" id="busca" onKeyUp="javascript: this.value=this.value.toUpperCase();" name="nome" placeholder="Faça uma busca" class="form-control ">
                </div>
     </div>
    <br>
    <table class="table  table-responsive table-bordered table-striped">
        <thead>

            <tr>
                <th>Cod</th>
                <th>Nome</th>
                <th class="text-center">Ações</th>

            </tr>
        </thead>
         <tbody id="tabela_x">
            <tr>
                <td>1</td>
                <td>Dilson lana coelho costa</td>
                <td class="text-center">
                    <a class="btn btn-primary btn-xs" href="<?php echo BASE_URL?>/paciente/visualizar/">GERAR PDF</a>
                </td>
            </tr>
        </tbody>
    </table>

</div>
</div>
</div>
 <!--<?php echo $link?>-->
</div>

 
