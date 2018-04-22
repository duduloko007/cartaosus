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

		//echo "<pre>";
		//print_r($i->InsertDependentes());exit;
		//echo "</pre>";

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

		$this->loadTemplate('dependentes/dependentes_add',$dados);
	}

	
}
