
<div class="box box-default">
  <div class="box-header with-border">
    <h3 class="box-title">Editar Usuário</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
  </div>

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
  <form method="POST">
    <div class="box-body">
      <div class="row">
        <div class="col-md-12">
 
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="name" value="<?php echo $group_edit['nome'];?>" class="form-control" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>E-mail:</label>
            <input type="email" name="email" value="<?php echo $group_edit['email'];?>" class="form-control" required>
          </div>
        </div>
       
        <div class="col-md-4">
          <div class="form-group">
            <label>Senha:</label>
            <input type="password" name="password" id="password" class="form-control " required>
            <div class="userPassSuccess" id="userPassSuccess"></div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label >Status</label><br/>
            <select name="status" id="group" class="form-control" required>
              <option value="">Selecione</option>
              <option value="Ativo" <?php echo ($group_edit['status'] == 'Ativo') ? "selected" : "" ;?>>Ativo</option>
              <option value="Inativo" <?php echo ($group_edit['status'] == 'Inativo') ? "selected" : "" ;?>>Inativo</option>
            </select>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label >Grupo de Permissão</label><br/>
            <select name="group" id="group" class="form-control" required>
              <option value="">Selecione</option>
              <?php foreach ($group_list as $key => $value) {
              	?>
				<option value="<?php echo $value['id'];?>" ><?php echo $value['name'];?></option>
              	<?php
              }?>
            </select>
          </div>
        </div>
      </div>
      <input type="submit" value="Adicionar" class="btn btn-success btn-sm"/>
      <a href="<?php echo BASE_URL;?>users" class="btn btn-danger btn-sm">Cancelar</a>
    </div>
  </form>

</div>

