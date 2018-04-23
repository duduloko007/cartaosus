<?php 
class dependentesController  extends Controller{

	public function __construct(){
		 $logado = new user();
     if(!$logado->logado()){
     	header("Location:".BASE_URL."/login");
    }
	}

	public function index (){

		$dados = array();

		$i = new dependentes();


		$pagination = new Pagination();
        try {
            $dados['listagem'] = $pagination->CreatePagination("SELECT * FROM dependentes");
            $links = $pagination->CreateLinks();
        } catch (Exception $e) {
            die($e->getMessage());
        }

        $dados['link'] = $links;
		
		$this->loadTemplate('dependentes/dependentes',$dados);
	}
	public function add(){
		$dados = array();

		if(isset($_POST['name']) AND !empty($_POST['name'])){
			$nomepaciente = addslashes($_POST['name']);
			$num_paciente = addslashes($_POST['num_paciente']);
			$nomeDependetes = addslashes($_POST['nomeDependetes']);
			$data_nasc = date("Y-m-d", strtotime(addslashes($_POST['data_nasc'])));
			$estudante = addslashes($_POST['estudante']);
			$parentesco = addslashes($_POST['parentesco']);
			$sexo = addslashes($_POST['sexo']);
			$cart_indentidade = addslashes($_POST['cart_indentidade']);
			$ocupacao = addslashes($_POST['ocupacao']);
			$sanguineo = addslashes($_POST['sanguineo']);


			$insert = new dependentes();
			$insert->add($nomepaciente,$num_paciente,$nomeDependetes,$data_nasc,$estudante,$parentesco,$sexo,$cart_indentidade,$ocupacao,$sanguineo);
			$dados['msg'] = "Adicionado com sucesso";

		}

	$this->loadTemplate('dependentes/dependentes_add',$dados);
	}
	public function visualizar($dependentes,$paciente){
		$dados = array();
		$lista = new dependentes();
		
		$dados['lista'] = $lista->listDependentesVisualizar($dependentes, $paciente);


		$this->loadTemplate('dependentes/visualizar',$dados);
	}


	public function delete($id){

     $u = new dependentes();
     $u->delete($id);
     header('Location:'.BASE_URL.'/dependentes');
  }

	
}
