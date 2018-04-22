 <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Dependente(s)</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>

    <div class="box-body">
      <div class="row" style="margin-bottom: 20px;" >
        <div class="col-sm-12">
          <a class="btn btn-primary btn-xs"  href="<?php echo BASE_URL?>/paciente">Voltar</a>
        </div>


      </div>
	 		  <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?php echo $lista['pac_nome'];?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">
               <?php foreach ($listas as $key => $value): ?>
                <tr>
                  <td><?php echo $value['dep_codigo'];?> </td>
                  <td><?php echo $value['dep_nome'];?></td>
              
                </tr>
                <?php endforeach ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
    </div>
  </div>


  

