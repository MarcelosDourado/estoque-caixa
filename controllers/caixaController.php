<?php   
class caixaController extends controller {
    public function index(){
        $dados = array(
           
        );
        
        $livros = new Cadastrar();
       
        $this->loadTemplate('caixa', $dados);
    } 

}
?>