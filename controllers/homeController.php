<?php   
class homeController extends controller {
    public function index(){
        $dados = array();
        
        $livros = new Cadastrar();
        $dados['lista'] = $livros->getAll();
        $this->loadTemplate('home', $dados);
    } 
   
}
?>