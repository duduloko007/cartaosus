<?php 
class historicoController  extends Controller{

	public function __construct(){
		
	}

	public function index (){
		$dados = array();


		$this->loadTemplate('historicos/historico',$dados);
	}
	public function paciente(){
		$dados = array(
			'msg' => array()
		);

		if(isset($_POST['name']) AND !empty($_POST['name'])){
			$nome = addslashes($_POST['name']);
			$num_paciente = addslashes($_POST['num_paciente']);
			$identidade = addslashes($_POST['identidade']);
			$data_nascimentop = addslashes($_POST['data_nascimentop']);
			$data = addslashes($_POST['data']);
			$hora = addslashes($_POST['hora']);
			$peso = addslashes($_POST['peso']);
			$altura = addslashes($_POST['altura']);
			$logradouro = addslashes($_POST['logradouro']);
			$pa = addslashes($_POST['pa']);
			$temp = addslashes($_POST['temp']);
			$glicemia = addslashes($_POST['glicemia']);
			$relatorio = addslashes($_POST['relatorio']);
			$medicacao = addslashes($_POST['medicacao']);
			$insert = new historico();
			$insert->inserthistorico();
			$dados['msg'] = "Adicionado com sucesso";		
		}

		$this->loadTemplate('historicos/paciente',$dados);
	}
	public function dependente(){
		$dados = array();
		$this->loadTemplate('historicos/dependente',$dados);
	}

	
}
