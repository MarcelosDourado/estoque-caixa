<?php   
    class cadastrarController extends controller {
    public function index() {

        $dados = array();
        
        $contatos = new Cadastrar();
        $this->loadTemplate('cadastrar', $dados);

    }

        public function cadastrar(){
            $dados = array(
                'error' =>''
            );

            if(!empty($_GET['error'])){
                $dados['error'] = $_GET['error'];
            }
            $this->loadTemplate('cadastrar', $dados);
        }

        public function add_save(){
            //print_r($_POST);
            if(!empty($_POST['nome'])){
                $nome  = $_POST['nome'];
                $codigo = $_POST['codigo'];
                $descricao = $_POST['descricao'];
                $dia = $_POST['dia'];
                
                $valor = $_POST['valor'];
                $formato = str_replace(',','.', $valor);
                $qtd = $_POST['qtd'];


                $cadastrar = new Cadastrar();
                $cadastrar->cad($codigo, $nome, $dia, $descricao, $formato, $qtd);

            }
        
        
    } 
        public function editar($id){
            $dados  = array();
            if(!empty($id)){
                $cadastrar = new Cadastrar();
            if(!empty($_POST['nome'])){
                
                $nome  = $_POST['nome'];
                $codigo = $_POST['codigo'];
                $descricao = $_POST['descricao'];
                $dia = $_POST['dia'];
                
                $valor = $_POST['valor'];
                $formato = str_replace(',','.', $valor);
                $qtd = $_POST['qtd'];
                
                $cadastrar->editar($id, $codigo, $nome, $dia, $descricao, $formato, $qtd);
                }
                else {
                   
                    $dados['info'] = $cadastrar->get($id);
    
                    if(isset($dados['info']['id'])) {
                        $this->loadTemplate('editar', $dados);
                        exit;
                    }
                }
            }
            header("Location: ".BASE_URL);
         }
         public function delete($id) {
            if(!empty($id)) {
                $contatos = new Cadastrar();
                $contatos->delete($id);
            }
    
            header("Location: ".BASE_URL);
        }
}
?>
