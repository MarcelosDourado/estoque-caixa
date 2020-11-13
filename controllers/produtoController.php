<?php  

class produtoController extends controller {
   

    public function index(){
        
        $dados = array(
            'teste' => "teste",
        );
    } 
       public function buscarnome(){
        
        $str_json = file_get_contents('php://input');
        $busca = json_decode($str_json, true);
        $busca['pesquisa'];
        extract ($busca , EXTR_PREFIX_SAME, "wddx");
        $r = new Cadastrar();
        $rbusca = $r->pesquisa($pesquisa);

      echo $rbusca;
    
      
       
       
        }
       
        public function saida(){
          $up_estoque = file_get_contents('php://input');
          $s_produto = json_decode($up_estoque, true);
          
          extract ($s_produto , EXTR_PREFIX_SAME, "wddx");
         
          $s = new Cadastrar();
          $s_produto = $s->upEstoque($id, $qtd);
          echo "atualizado";
        }
        
    } 
   
?>