
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
                    <input type="text" id="busca" placeholder="Faça uma busca" class="form-control ">
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
                    <a class="btn btn-primary btn-xs" href="<?php echo BASE_URL?>/paciente/visualizar/<?php echo $item['dep_codigo'];?>">Visualizar</a>
                    <a class="btn btn-success btn-xs" href="<?php echo BASE_URL?>/paciente/edit/<?php echo $item['dep_codigo'];?>">Editar</a>
                    <a class="btn btn-danger btn-xs" href="<?php echo BASE_URL?>/paciente/delete/<?php echo $item['dep_codigo'];?>" onclick="return confirm('Tem certeza que realmente quer excluir?')">Excluir</a>
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
    $('#busca').on('keyup', function(){

        let texto = $(this).val();
        var base = '<?php echo BASE_URL?>';

        if(texto.length > 4){
         
          $.ajax({
            url: 'http://localhost/cartaosus/ajax/dependentes',
            type: 'POST',
            dataType: 'JSON',
            data:{texto:texto},
            success: function(data){

            $("#tabela_x").html('');

              var html = '';
              $(".pagination").css('display', 'none');
              for(var i in data){
                html += '<tr>';
                html += '<td>'+data[i].id+'</td>';
                html += '<td>'+data[i].nome+'</td>';
                html += '<td class="text-center"><a class="btn btn-primary btn-xs" href="'+base+'/paciente/visualizar/'+data[i].id+'">Visualizar</a>\
                    <a class="btn btn-success btn-xs" href="'+base+'/paciente/edit/'+data[i].id+'">Editar</a>\
                    <a class="btn btn-danger btn-xs" href="'+base+'/paciente/delete/'+data[i].id+'" onclick="return confirm("Tem certeza que realmente quer excluir?")">Excluir</a>\
                    <a class="btn btn-warning btn-xs" href="'+base+'/paciente/dependentes/'+data[i].id+'">Dependentes</a></td>';
                html += '</tr>';
              }

              $("#tabela_x").append(html);               
                 
            } 

          });

        }
          
    });
</script>
 
