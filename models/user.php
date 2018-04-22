<?php

class user extends model {
    private $userInfo;
    private $permissions;
    public function logado() {
        if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
             return true;
         } else {
              return false;
    }
}

    public function logar($email, $senha) {
         $dados = array();
         
         $sql = "SELECT * FROM users WHERE email = :email AND senha = :senha AND status = 'Ativo'";
         $sql = $this->db->prepare($sql);
         $sql->bindValue(':email',$email);
         $sql->bindValue(':senha',$senha);
         $sql->execute();
         
         if($sql->rowCount() > 0){
             $dados = $sql->fetch();
             $_SESSION['login'] = $dados['id'];
         }
         
         return $dados;
   }
   public function setLoggedUser(){
       if(isset($_SESSION['login']) && !empty($_SESSION['login'])){
           $id = $_SESSION['login'];

           $sql = $this->db->prepare("SELECT * FROM users WHERE id = :id");
           $sql->bindValue(":id", $id);
           $sql->execute();

           if($sql->rowCount() > 0){
               $this->userInfo = $sql->fetch();
               $this->permissions = new permissions();
               $this->permissions->setGroup($this->userInfo['id_group']);
           }
       }
   }

   public function Permissions($name){
       return $this->permissions->hasPermissions($name);
   }

   public function addUsers($name,$email,$password,$status,$group){
      $sql = $this->db->prepare('INSERT INTO users SET name = :name, email = :email, senha = :password, status = :status, id_group = :group');
        $sql->bindValue(':name', $name);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':password', $password);
        $sql->bindValue(':status', $status);
        $sql->bindValue(':group', $group);
        $sql->execute();
   }

    public function getUsers(){
       $sql = "SELECT users.id,users.email,users.nome,users.senha,users.status,permission_group.name FROM users INNER JOIN permission_group ON users.id_group = permission_group.id";
         $sql = $this->db->prepare($sql);
         $sql->execute();
         
         if($sql->rowCount() > 0){
             $dados = $sql->fetchAll();
         }
         
         return $dados;
   }
   public function delete($id){
        $sql = $this->db->prepare('DELETE FROM users WHERE id = :id');
        $sql->bindValue(':id',$id);
        $sql->execute();
   }

    public function editUser($id) {
         $dados = array();
         
         $sql = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $sql->bindValue(':id', $id);
         $sql->execute();
         
         if($sql->rowCount() > 0){
             $dados = $sql->fetch();
         }
         
         return $dados;
   }
    public function countUser(){
        $dados = array();
        
        $sql = $this->db->prepare("SELECT count(id) as total FROM users");
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch();
        }

        return $dados;
   }

}
