 <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Usuarios</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
    </div>

    <div class="box-body">
      <div class="row" style="margin-bottom: 20px;" >
        <div class="col-sm-12">
          <a class="btn btn-primary btn-sm"  href="<?php echo BASE_URL?>/users/add">Adicionar Usuário</a>
        </div>

      </div>


      <div class="table-responsive" >
        <table class="table   table-bordered table-striped" id="table_id" >
          <thead>
            <tr>
              <th>Nome</th>
              <th>Email</th>
              <th>Grupo</th>
              <th>Ativo</th>
              <th class="text-center">Ações</th>
            </tr>
          </thead>
          <tbody>
          	<?php foreach ($list_User as $key => $value) {
          		?>
				<tr>

              <td><?php echo $value['nome'];?></td>
              <td>
                <?php echo $value['email'];?>
              </td>
              <td>
                <?php echo $value['name'];?>
              </td>
              <td>
                <?php echo $value['status'];?>
              </td>

              <td class="text-center">
                 
                       <a  class="btn btn-primary btn-xs"  href="<?php echo BASE_URL?>/users/edit/ <?php echo $value['id'];?>"><i class="fa fa-edit"></i> Editar</a>
                     
                      <?php if($_SESSION['login'] != $value['id']):?>
                      <a class="btn btn-primary btn-xs"  href="<?php echo BASE_URL?>/users/delete/<?php echo $value['id'];?>" onclick="return confirm('Cofirmar a Exclusão')"><i class="fa fa-trash-o"></i> Excluir</a>
                    <?php endif;?>
              </td>
            </tr>

          		<?php
          	}?>
          </tbody>
        </table>
      </div>

    </div>
  </div>


  <script type="text/javascript">
    $(document).ready( function () {
      $('#table_id').DataTable();


    } );

    $("#table_id").dataTable({
      "bJQueryUI": true,
      "oLanguage": {
        "sProcessing":   "Processando...",
        "sLengthMenu":   "Mostrar _MENU_ registros",
        "sZeroRecords":  "Não foram encontrados resultados",
        "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
        "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
        "sInfoFiltered": "",
        "sInfoPostFix":  "",
        "sSearch":       "Buscar:",
        "sUrl":          "",
        "oPaginate": {
          "sFirst":    "Primeiro",
          "sPrevious": "Anterior",
          "sNext":     "Seguinte",
          "sLast":     "Último"
        }
      }
    });
  </script>


<!-- Trigger the modal with a button -->

<div class="modal fade bannerformmodal" tabindex="-1" role="dialog" aria-labelledby="bannerformmodal" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Contact Form</h4>
        </div>
        <div class="modal-body">
          <form id="requestacallform" method="POST" name="requestacallform">

            <div class="form-group">
              <div class="input-group">                               
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input id="first_name" type="text" class="form-control" placeholder="First Name" name="first_name"/>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">                               
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input id="last_name" type="text" class="form-control" placeholder="Last Name" name="last_name"/>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">                               
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input id="email1" type="text" class="form-control" placeholder="Email" name="email1" onchange="validateEmailAdd();"/>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">                               
                <span class="input-group-addon"><i class="fa fa-group"></i></span>
                <input id="company_name_c" type="text" class="form-control" placeholder="Company Name" name="company_name_c"/>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">                               
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input id="phone_mobile" type="text" class="form-control" placeholder="Mobile" name="phone_mobile"/>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-building-o"></i></span>
                <select class="form-control" name="monthly_rental" class="selectpicker">
                  <option>How many seats do you have available?</option>
                  <option>10-50</option>
                  <option>50-100</option>
                  <option>100-200</option>
                  <option>200-500</option>
                  <option>500+</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">                     
                <textarea id="description" type="text" name="description"  placeholder="Description"></textarea>
              </div>
            </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-blue">Submit</button>
        </div>        
      </div>
    </div>
  </div>
</div>