<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Adicionar Grupo de permissões</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
    </div>
  </div>
  <div class="box-body">
    <div class="row">
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
     <form  method="Post">
      <div class="col-md-6">

        <div class="form-group">
          <label>Nome do grupo de permissões</label>
          <input type="text" class="form-control"  value="<?php echo $permissions_update['name'];?>" name="permissions" ><br><br>

          <label>Permissões</label><br>
          <?php foreach ($permissions_list as $key => $value) {
            ?>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="p_<?php echo $value['id']?>" name="permissions_group[]" value="<?php echo $value['id']?>" <?php  echo (in_array($value['id'], $permissions_update['params']))?'checked="checked"':'';?>/>
               <label class="form-check-label" for="p_<?php echo $value['id']?>"> <?php echo $value['name']?></label>
            </div>
            <?php
          }?>
        </div>
      </div>
    </div>
    <div class="rows">
      <input type="submit" value="Editar"  class="btn btn-primary">
    </div>
  </form>
</div>
</div>