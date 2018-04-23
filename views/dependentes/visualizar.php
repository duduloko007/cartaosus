 <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Visualização Paciente</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>

    <div class="box-body">
      <div class="row" style="margin-bottom: 20px;" >
        <div class="col-sm-12">
          <a class="btn btn-primary btn-xs"  href="<?php echo BASE_URL?>/dependentes">Voltar</a>
        </div>
      </div>
	 		  <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?php echo $lista['pac_nome'];?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">

              <table class="table table-condensed">
                <tr>
                  <th>Nome do paciente - Titular</th>
                  <td><?php echo $lista['pac_nome'];?> </td>
                </tr>
                <tr>
                  <th>Número paciente - Titular</th>
                  <td> <?php echo $lista['pac_codigo'];?></td>
                </tr>
                 <tr>
                  <th>Nome do dependente</th>
                  <td> <?php echo $lista['dep_nome'];?></td>
                </tr>
                <tr>
                  <th>data de nascimento</th>
                  <td><?php echo $lista['dep_nascimento'];?></td>
                </tr>
                <tr>
                  <th>data de nascimento</th>
                  <td><?php echo $lista['dep_nascimento'];?></td>
                </tr>
                 <tr>
                  <th>Estudante</th>
                  <td><?php echo $lista['dep_estudante'];?></td>
                </tr>
                 <tr>
                  <th>Sexo</th>
                  <?php
                      if ($lista['dep_sexo'] == 'M') {
                        ?>
                        <td>MASCULINO</td>
                        <?php
                      }else{
                        ?>
                        <td>FEMININO</td>
                        <?php
                      }
                  ?>
                </tr>
                <tr>
                  <th>Carteira de indentidade</th>
                  <td><?php echo $lista['dep_ci'];?></td>
                </tr>
                <tr>
                  <th>Ocupação</th>
                  <td><?php echo $lista['dep_ocupacao'];?></td>
                </tr>
                <tr>
                  <th>Tipo sanguineo</th>
                  <td><?php echo $lista['dep_tiposanguineo'];?></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
    </div>
  </div>