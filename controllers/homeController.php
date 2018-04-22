<?php 
class homeController  extends Controller{

  public function __construct(){
      $logado = new user();
     if(!$logado->logado()){
     	header("Location:".BASE_URL."/login");
    }
  }

  public function index (){
    $dados = array();

	$count = new paciente();
	$dados['count'] = $count->countPaciente();

	$count = new dependentes();
	$dados['counts'] = $count->countDependentes();

	$count = new user();
	$dados['conta'] = $count->countUser();
    

  $this->loadTemplate('home', $dados);
}

  
}

 