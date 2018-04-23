/* ajax busca de paciente*/
var base = 'http://localhost/cartaosus';
$(function(){
	$('#busca').on('keyup', function(){

        let texto = $(this).val();
       

        if(texto.length > 4){
         
          $.ajax({
            url: base + '/ajax/paciente',
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
});
/* ajax busca de depndentes*/
$(function(){
 $('#busca').on('keyup', function(){

        let texto = $(this).val();

        if(texto.length > 4){
         
          $.ajax({
            url: base + '/ajax/dependentes',
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
                    <a class="btn btn-danger btn-xs" href="'+base+'/paciente/delete/'+data[i].id+'" onclick="return confirm("Tem certeza que realmente quer excluir?")">Excluir</a>';
                html += '</tr>';
              }

              $("#tabela_x").append(html);               
                 
            } 

          });

        }
          
    });
});
/*ajax input seleciona o nome e monstra o numero do pacinete no outro 
( cadastro de dependentes)*/
$(function(){
      $('#nome').blur(function(){
          var nome = $(this).val();
          var num_paciente = $('#num_paciente').val();
          $.ajax({
              url:base + '/ajax/dependentePaciente',
              type: 'POST',
              data:{nome: nome, num_paciente : num_paciente},
              dataType: 'JSON',
              beforeSend: function(){
              		$('#num_paciente').val('Paciente não encontrado');	
              },
              success: function(data){
              	if(data.array){
              		 $.each(data.array, function (key,value){
                      $('#num_paciente').val(value['pac_codigo']);
                  	});
                  
              	}
              		
              	}

          });
      });
 });