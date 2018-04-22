<?php 
class usersController  extends Controller{

	public function __construct(){
		 $logado = new user();
     if(!$logado->logado()){
     	header("Location:".BASE_URL."/login");
    }
	}

	public function index (){
		$dados = array();


		

	$u = new user();
    $u->setLoggedUser();
    if($u->Permissions('users_view')){

     $u = new user();
     $dados['list_User'] = $u->getUsers();

      $this->loadTemplate('login/usuarios',$dados);
    }else{
      header("Location:".BASE_URL);
    }

	}

	public function add(){
		$dados  = array(
			'msg' => array()
		);

		if(isset($_POST['name']) && !empty($_POST['name'])){
			$nome = addslashes($_POST['name']);
			$email = addslashes($_POST['email']);
			$password = md5($_POST['password']);
			$status = addslashes($_POST['status']);
			$group = addslashes($_POST['group']);

			$u = new user();
			$u->addUsers($nome,$email,$password,$status,$group);
			$dados['msg'] = "Adicionado com sucesso";

		}

		$p = new permissions();
		$dados['group_list'] = $p->group_list();
		$this->loadTemplate('login/login_cadastrar',$dados);
	}

	public function edit($id){
		$dados  = array(
			'msg' => array()
		);

		if(isset($_POST['name']) && !empty($_POST['name'])){
			$nome = addslashes($_POST['name']);
			$email = addslashes($_POST['email']);
			$password = md5($_POST['password']);
			$status = addslashes($_POST['status']);
			$group = addslashes($_POST['group']);

			$u = new user();
			$u->addUsers($nome,$email,$password,$status,$group);
			$dados['msg'] = "Adicionado com sucesso";

		}
 
		$p = new user();
		$dados['group_edit'] = $p->editUser($id);
		$this->loadTemplate('login/edit_user',$dados);
	}

	public function delete($id){

     $u = new user();
     $u->delete($id);
     header('Location:'.BASE_URL.'/users');
  }

	
}
