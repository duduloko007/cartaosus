
<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Permissões</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
  </div>
</div>

<div class="box-body">
    <ul class="nav nav-tabs">
        <li class="active">
            <a href="#permissions_gruop" class="" data-toggle="tab">Grupos de Permissões</a>
        </li>
            <li>
                <a href="#permissions" class="" data-toggle="tab">Permissões</a>

            </li>
    </ul>
    <div class="tab-content">
        <div id="permissions_gruop" class="tab-pane active in fade">

           <div class="row">
            
                <br/>
                <div class="col-md-12">
                 <a href="<?php echo BASE_URL; ?>/permissions/add_group" class="btn btn-primary btn-sm">Adicionar Grupo de Permissões</a>
             </div>
     </div>
     <br/>
     <div class="row">
       
    </div>
    <table class="table  table-responsive table-bordered table-striped">
        <thead>

            <tr>
                <th>Nome do Grupo de Permissões</th>
                <th class="text-center">Ações</th>

            </tr>
        </thead>
         <tbody>
        <?php foreach($group_list as $item) :?>
            <tr>
                <td><?php echo $item['name'];?></td>
                <td class="text-center">
                    <a class="btn btn-primary btn-sm" href="<?php echo BASE_URL?>/permissions/edit_group/<?php echo $item['id'];?>" ">Editar</a>
                    <a class="btn btn-danger btn-sm" href="<?php echo BASE_URL?>/permissions/delete_group/<?php echo $item['id'];?>" onclick="return confirm('Tem certeza que realmente quer excluir?')">Excluir</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>

</div>

<div id="permissions" class="tab-pane fade">
  
     <br/>
     <a class="btn btn-primary btn-sm" href="<?php echo BASE_URL?>/permissions/add">Adicionar Permissão</a>
    <br>
    <br>
     <table class="table  table-responsive table-bordered table-striped">
        <thead>
            <tr>
                <th>Nome da Permissão</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($permissions_list as $item) :?>
            <tr>
                <td><?php echo $item['name'];?></td>
                <td class="text-center">
                    <a class="btn btn-danger btn-sm" href="<?php echo BASE_URL?>/permissions/delete/<?php echo $item['id'];?>" onclick="return confirm('Tem certeza que realmente quer excluir?')">Excluir</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
</table>
</div>	
</div>
</div>
</div>
