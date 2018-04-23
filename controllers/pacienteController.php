<?php 
class pacienteController  extends Controller{

	public function __construct(){
		 $logado = new user();
     if(!$logado->logado()){
     	header("Location:".BASE_URL."/login");
    }
	}

	public function index (){
		$dados = array();
		
		$pagination = new Pagination();
        try {
            $dados['listagem'] = $pagination->CreatePagination("SELECT * FROM pacientes");
            $links = $pagination->CreateLinks();
        } catch (Exception $e) {
            die($e->getMessage());
        }

        $dados['link'] = $links;


		$this->loadTemplate('paciente/paciente',$dados);
	}

	public function add(){
		$dados = array(
			'msg' => array()
		);

		if(isset($_POST['nome']) && !empty($_POST['nome'])){
			$nome = strtoupper($_POST['nome']);
			$data_nascimento = date("Y-m-d", strtotime(addslashes($_POST['data_nascimento'])));
			$identidade = addslashes($_POST['identidade']);
			$cpf = addslashes($_POST['cpf']);
			$email = addslashes($_POST['email']);
			$telefone = addslashes($_POST['telefone']);
			$celular = addslashes($_POST['celular']);
			$cep = addslashes($_POST['cep']);
			$endereco = addslashes($_POST['endereco']);
			$numero = addslashes($_POST['numero']);
			$complemento = addslashes($_POST['complemento']);
			$bairro = addslashes($_POST['bairro']);
			$cidade = addslashes($_POST['cidade']);
			$estado = addslashes($_POST['estado']);
			$residencia = addslashes($_POST['residencia']);
			$sexo = addslashes($_POST['sexo']);
			$estado_civil = addslashes($_POST['estado_civil']);
			$nome_mae = addslashes($_POST['nome_mae']);
			$nome_pai = addslashes($_POST['nome_pai']);

			$cpf = str_replace(".", "",$cpf);
			$cpf = str_replace("-", "",$cpf);
	
			$add = new paciente();
			$add->add($nome,$data_nascimento,$identidade,$cpf,$email,$telefone,$celular,$cep,$endereco,$numero,$complemento,$bairro,$cidade,$estado,$residencia,$sexo,$estado_civil,$nome_mae,$nome_pai);
			$dados['msg'] = "Adicionado com sucesso";

		}
		
		$this->loadTemplate('paciente/paciente_add',$dados);
	}
	public function dependentes($id){
		$dados = array();
		$lista = new paciente();
		$list = new dependentes();
		
		$dados['lista'] = $lista->listPacientesDependentes($id);
		$dados['listas'] = $list->listDependentes($id);
	

		$this->loadTemplate('paciente/dependentes',$dados);
	}
	public function visualizar($id){
		$dados = array();
		$lista = new paciente();
		
		$dados['lista'] = $lista->listPacientesDependentes($id);


		$this->loadTemplate('paciente/visualizar',$dados);
	}


	public function delete($id){

     $u = new paciente();
     $u->delete($id);
     header('Location:'.BASE_URL.'/paciente');
  }

  public function edit($id){
		$dados = array(
			'msg' => array()
		);

		if(isset($_POST['nome']) && !empty($_POST['nome'])){
			$nome = strtoupper($_POST['nome']);
			$data_nascimento = date("Y-m-d", strtotime(addslashes($_POST['data_nascimento'])));
			$identidade = addslashes($_POST['identidade']);
			$cpf = addslashes($_POST['cpf']);
			$email = addslashes($_POST['email']);
			$telefone = addslashes($_POST['telefone']);
			$celular = addslashes($_POST['celular']);
			$cep = addslashes($_POST['cep']);
			$endereco = addslashes($_POST['endereco']);
			$numero = addslashes($_POST['numero']);
			$complemento = addslashes($_POST['complemento']);
			$bairro = addslashes($_POST['bairro']);
			$cidade = addslashes($_POST['cidade']);
			$estado = addslashes($_POST['estado']);
			$residencia = addslashes($_POST['residencia']);
			$sexo = addslashes($_POST['sexo']);
			$estado_civil = addslashes($_POST['estado_civil']);
			$nome_mae = addslashes($_POST['nome_mae']);
			$nome_pai = addslashes($_POST['nome_pai']);

			$cpf = str_replace(".", "",$cpf);
			$cpf = str_replace("-", "",$cpf);
	
			$add = new paciente();
			$add->edit($nome,$data_nascimento,$identidade,$cpf,$email,$telefone,$celular,$cep,$endereco,$numero,$complemento,$bairro,$cidade,$estado,$residencia,$sexo,$estado_civil,$nome_mae,$nome_pai,$id);
			$dados['msg'] = "Atualizado com sucesso";

		}
		$list = new paciente();
		$dados['list'] = $list->listPacienteEdit($id);
		
		$this->loadTemplate('paciente/edit',$dados);
	}

	
}


