<?php
class permissions extends model{

    private $group;
    private $permissions;


    public function setGroup($id){
        $this->group = $id;
        $this->permissions = array();

        $sql = $this->db->prepare("SELECT params FROM permission_group WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $row = $sql->fetch();

            if(empty($row['params'])){
                $row['params'] = '0';
            }
            $params = $row['params'];
            $sql = $this->db->prepare("SELECT name FROM permission_param WHERE id IN ($params)");
            $sql->execute();

            if($sql->rowCount() > 0){

                foreach($sql->fetchAll() as $item){
                    $this->permissions[] = $item['name'];
                }

            }
        }
     
    
    }

    public function hasPermissions($name){
  
        if(in_array($name, $this->permissions)){
            return true;
        }else{
            return false;
        }
    }
    public function permissions_list(){
        $dados = array();
        
        $sql = $this->db->prepare("SELECT * FROM permission_param");
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetchAll();
        }

        return $dados;
    }
    public function group_list(){
        $dados = array();
        
        $sql = $this->db->prepare("SELECT * FROM permission_group");
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetchAll();
        }

        return $dados;
    }

   public function group_add($pname,$permissions_group){
        $params = implode(',', $permissions_group);

        $sql = $this->db->prepare('INSERT INTO permission_group SET name = :pname, params = :permissions_group');
        $sql->bindValue(':permissions_group', $params);
        $sql->bindValue(':pname', $pname);
        $sql->execute();
    }

    public function permissions_add($name){

        $sql = $this->db->prepare('INSERT INTO permission_param SET name = :name');
        $sql->bindValue(':name', $name);
        $sql->execute();
    }

    public function delete($id){
        $sql = $this->db->prepare('DELETE FROM  permission_param WHERE id = :id');
        $sql->bindValue(':id', $id);
        $sql->execute();
    }
    public function delete_group($id){
        if($this->findUsersGroup($id) == false){
             $sql = $this->db->prepare('DELETE FROM  permission_group WHERE id = :id');
            $sql->bindValue(':id', $id);
            $sql->execute();
        }
    }
    public function findUsersGroup($id){
        $dados = array();
        
        $sql = $this->db->prepare("SELECT count(*) as c FROM users WHERE id_group = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
        $row = $sql->fetch();
        if($row['c'] == '0'){
            return false;
        }else{
            return true;
        }
    }

    public function permissions_update($id){
        $dados = array();
        $sql = $this->db->prepare("SELECT * FROM permission_group WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch();
            $dados['params'] = explode(',', $dados['params']);

        }

        return $dados;
    }

    public function group_update($pname,$permissions_group,$id){
        $params = implode(',', $permissions_group);

        $sql = $this->db->prepare('UPDATE permission_group SET name = :pname, params = :permissions_group WHERE id = :id');
        $sql->bindValue(':permissions_group', $params);
        $sql->bindValue(':pname', $pname);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }
}