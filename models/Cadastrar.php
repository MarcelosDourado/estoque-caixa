<?php 
class Cadastrar extends model{
    public function getAll(){
      $array = array();
      $sql = $this->db->query("SELECT * FROM produtos");
      if($sql ->rowCount() > 0){
        $array = $sql->fetchAll();
        
      }
      return $array;
    }


    public function cad($codigo, $nome, $dia, $descricao, $formato, $qtd){
    
        $sql = $this->db->prepare("INSERT INTO produtos (codigo, nome, dia, descricao, valor, qtd) VALUES(:codigo, :nome, :dia, :descricao, :valor, :qtd)");
      
        $sql->bindValue(":codigo", $codigo);
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":dia", $dia);
        $sql->bindValue(":descricao", $descricao);
        $sql->bindValue(":valor", $formato);
        $sql->bindValue(":qtd", $qtd);
        $sql->execute();
        $hist = $this->db->prepare("INSERT INTO historico(atualizacao) 
        VALUES('O livro ' :nome ' foi inserido ')");
       
        $hist->bindValue(":nome", $nome);
       
        $hist->execute();
        
        
      return true;
    }

    public function get($id) {
      $array = array();
  
      $sql = "SELECT * FROM produtos WHERE id = :id";
      $sql = $this->db->prepare($sql);
      $sql->bindValue(':id', $id);
      $sql->execute();
  
      if($sql->rowCount() > 0) {
        $array = $sql->fetch();
      }
  
      return $array;
    }


    public function editar($id, $codigo, $nome, $dia, $descricao, $formato, $qtd){
      $sql = $this->db->prepare("UPDATE produtos SET codigo = :codigo, nome = :nome, dia = :dia, 
      descricao = :descricao, valor = :valor, qtd = :qtd WHERE id = :id");
         $sql->bindValue(":id", $id);
        $sql->bindValue(":codigo", $codigo);
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":dia", $dia);
        $sql->bindValue(":descricao", $descricao);
        $sql->bindValue(":valor", $formato);
        $sql->bindValue(":qtd", $qtd);
        $sql->execute();

        $hist = $this->db->prepare("INSERT INTO historico(atualizacao) 
        VALUES('O livro ' :nome ' foi alterado ')");
       
        $hist->bindValue(":nome", $nome);
       
        $hist->execute();
      
    }

    public function delete($id) {
      $hist = $this->db->prepare("INSERT INTO historico(atualizacao) 
      VALUES('O livro ' :nome = (select nome from produtos) ' foi apagado ') WHERE id = :id");
      $hist->bindValue(':id', $id);
     
     
      $hist->execute();

      $sql = "DELETE FROM produtos WHERE id = :id";
      $sql = $this->db->prepare($sql);
      $sql->bindValue(':id', $id);
      $sql->execute();
    }

    public function pesquisa($pesquisa){
      $array = array();
      $sql = $this->db->query("SELECT * FROM produtos WHERE nome LIKE '%$pesquisa%' ");
      
      $sql->execute();

      if($sql->rowCount() > 0){
        $array = $sql->fetchAll();
      }
      return json_encode($array) ;
    }

    public function upEstoque($id, $qtd){
      $sql = $this->db->prepare("UPDATE produtos SET
       qtd = :qtd WHERE id = :id");
      $sql->bindValue(":id", $id);
      $sql->bindValue(":qtd", $qtd);
      $sql->execute();
    }

}

?>