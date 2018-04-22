<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Adicionar Permissão</h3>

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
                <label>Permissão</label>
                <input type="text" class="form-control" name="permissao" placeholder="Digite o nome da permissão">
              </div>
              </div>
              

            </div>
          
          <div class="rows">
                <input type="submit" value="cadastrar" class="btn btn-primary">
        </div>
                </form>
        </div>
      </div>