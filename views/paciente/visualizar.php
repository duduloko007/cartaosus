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
                <tr>
                  <th>Codigo</th>
                  <td><?php echo $lista['pac_codigo'];?> </td>
                </tr>
                <tr>
                  <th>Nome</th>
                  <td> <?php echo $lista['pac_nome'];?></td>
                </tr>
                 <tr>
                  <th>Data Nascimento</th>
                  <td> <?php echo $lista['pac_datanascimento'];?></td>
                </tr>
                <tr>
                  <th>Carteira de indentidade</th>
                  <td><?php echo $lista['pac_ci'];?></td>
                </tr>
                 <tr>
                  <th>Cpf</th>
                  <td><?php echo $lista['pac_cpf'];?></td>
                </tr>
                 <tr>
                  <th>Email</th>
                  <td><?php echo $lista['pac_email'];?></td>
                </tr>
                 <tr>
                  <th>Fone</th>
                  <td><?php echo $lista['pac_fone'];?></td>
                </tr>
                <tr>
                  <th>Celular</th>
                  <td><?php echo $lista['pac_celular'];?></td>
                </tr>
                <tr>
                  <th>Cep</th>
                  <td><?php echo $lista['pac_cep'];?></td>
                </tr>
                <tr>
                  <th>Endereço</th>
                  <td><?php echo $lista['pac_endereco'];?></td>
                </tr>
                  <tr>
                  <th>Número</th>
                  <td><?php echo $lista['pac_numero'];?></td>
                </tr>
                  <tr>
                  <th>Complemento</th>
                  <td><?php echo $lista['pac_complemento'];?></td>
                </tr>
                 <tr>
                  <th>Bairro</th>
                  <td><?php echo $lista['pac_bairro'];?></td>
                </tr>
                 <tr>
                  <th>Cidade</th>
                  <td><?php echo $lista['pac_cidade'];?></td>
                </tr>
                <tr>
                  <th>Estado</th>
                  <td><?php echo $lista['pac_estado'];?></td>
                </tr>
                 <tr>
                  <th>Tipo de residência</th>
                  <td><?php echo $lista['pac_tiporesidencia'];?></td>
                </tr>
                <tr>
                  <th>Sexo</th>
                  <?php
                      if ($lista['pac_sexo'] == 'M') {
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
                  <th>Estado Civil</th>
                  <td><?php echo $lista['pac_estadocivil'];?></td>
                </tr>
                   <tr>
                  <th>Nome da mãe</th>
                  <td><?php echo $lista['pac_mae'];?></td>
                </tr>
                   <tr>
                  <th>Nome do pai</th>
                  <td><?php echo $lista['pac_pai'];?></td>
                </tr>
              
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
    </div>
  </div>