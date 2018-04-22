<?php 
class permissionsController  extends Controller{

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
    if($u->Permissions('permission_view')){

      $permissions = new permissions();
      $dados['permissions_list'] = $permissions->permissions_list();

      $permissions = new permissions();
      $dados['group_list'] = $permissions->group_list();

      $this->loadTemplate('permissions/permissions', $dados);
    }else{
      header("Location:".BASE_URL);
    }
  }
  
  public function add(){
    $dados = array(
      'msg' => array()
    );
    $permissions = new permissions();
    if(isset($_POST['permissao']) && !empty($_POST['permissao'])){
        $p = addslashes($_POST['permissao']);
        $permissions->permissions_add($p);
        $dados['msg'] = "Adicionado com sucesso";
    }
    $this->loadTemplate('permissions/permissions_add', $dados);
  }

  public function add_group(){
    $dados = array(
      'msg' => array()
    );

     $permissions = new permissions();
      $dados['permissions_list'] = $permissions->permissions_list();

    if(isset($_POST['permissions']) && !empty($_POST['permissions'])){
        $pname = addslashes($_POST['permissions']);
        $permissions_group = $_POST['permissions_group'];

        $permissions = new permissions();
        $permissions->group_add($pname,$permissions_group);
        $dados['msg'] = "Adicionado com sucesso";
    }
    $this->loadTemplate('permissions/group_add', $dados);
  }

  public function edit_group($id){
    $dados = array(
      'msg' => array()
    );

     $permissions = new permissions();
     $dados['permissions_update']  = $permissions->permissions_update($id);
      $dados['permissions_list'] = $permissions->permissions_list();

    if(isset($_POST['permissions']) && !empty($_POST['permissions'])){
        $pname = addslashes($_POST['permissions']);
        $permissions_group = $_POST['permissions_group'];

        $permissions = new permissions();
        $permissions->group_update($pname,$permissions_group,$id);
        header("Location:".BASE_URL."/permissions");
    }


    $this->loadTemplate('permissions/edit_group', $dados);
  }

  public function delete($id){

     $permissions = new permissions();
     $permissions->delete($id);
     header('Location:'.BASE_URL.'/permissions');
  }

  public function delete_group($id){
    $permissions = new permissions();
     $permissions->delete_group($id);
     header('Location:'.BASE_URL.'/permissions');
  }
}