
<div class="box box-default">
   <div class="box-header with-border">
      <h3 class="box-title">Listagem dependentes</h3>

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
                 <a href="<?php echo BASE_URL; ?>/dependentes/add" class="btn btn-primary btn-sm">Adicionar dependentes</a>

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
                <th>Nome paciente</th>
                <th class="text-center">Ações</th>

            </tr>
        </thead>
         <tbody id="tabela_x">
        <?php foreach($listagem as $item) :?>
            <tr>
                <td><?php echo $item['dep_codigo'];?></td>
                <td><?php echo $item['dep_nome'];?></td>
                <td class="text-center">
                    <a class="btn btn-primary btn-xs" href="<?php echo BASE_URL?>/dependentes/visualizar/<?php echo $item['dep_codigo'];?>/<?php echo $item['pac_codigo'];?>">Visualizar</a>
                    <a class="btn btn-success btn-xs" href="<?php echo BASE_URL?>/dependentes/edit/<?php echo $item['dep_codigo'];?>">Editar</a>
                    <a class="btn btn-danger btn-xs" href="<?php echo BASE_URL?>/dependentes/delete/<?php echo $item['dep_codigo'];?>" onclick="return confirm('Tem certeza que realmente quer excluir?')">Excluir</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>

</div>
</div>
</div>
 <?php echo $link?>
</div>
<div id="texto"></div>
<script type="text/javascript">
   
</script>
 
