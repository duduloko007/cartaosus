<?php 
class ajaxController  extends Controller{

	public function __construct(){
		
	}

	public function paciente(){
		$data = array(
			'list' => array()
		);
		$dados = array();

		$texto = $_POST['texto'];

		$d = new paciente();
		$data['list'] = $d->listpacientebusca($texto);

		$i = 0;

		foreach ($data['list'] as $res) {
			$dados[$i]['id'] = $res['pac_codigo'];
			$dados[$i]['codigo'] = $res['0'];
			$dados[$i]['pac_nome'] = $res['pac_nome'];
			$dados[$i]['nome'] = $res['1'];
			$i++;
		}
		

		echo json_encode($dados);
	}

	public function dependentes(){
		$data = array(
			'list' => array()
		);
		$dados = array();

		$texto = $_POST['texto'];

		$d = new dependentes();
		$data['list'] = $d->listdependetebusca($texto);

		$i = 0;

		foreach ($data['list'] as $res) {
			$dados[$i]['id'] = $res['dep_codigo'];
			$dados[$i]['codigo'] = $res['0'];
			$dados[$i]['pac_nome'] = $res['dep_nome'];
			$dados[$i]['nome'] = $res['1'];
			$i++;
		}
		

		echo json_encode($dados);
	}

	public function dependentePaciente(){
		$data = array();

		$nome = $_POST['nome'];
		$nomelist = new paciente();
		$data['array'] = $nomelist->nomelist($nome);
	
		
		echo json_encode($data);
	}

	
}
