<?php
class convidadoController extends Controller {

    //Convidados para o Chá de panela

    public function __construct(){
        parent::__construct();
    }

    public function index() {
        $dados = array(
        );

        $convidado = new Convidado();
        $dados['convidadosArray'] = $convidado->getConvidados();

        $this->loadTemplate('convidado', $dados);
    }

    
    public function criar(){
        $dados = array(
        );

        $presente = new Presente();
        $dados['presentesArray'] = $presente->getPresentes(); 
        
        $this->loadTemplate('convidado_criar', $dados);
    }

    public function criacao(){
        $dados = array('aviso' => '');

        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            $nome = addslashes($_POST['nome']); 
            $telefone = addslashes($_POST['telefone']); 
            $fk_presente = addslashes($_POST['presente']);
             
            if(!empty($nome) && !empty($telefone) && !empty($fk_presente)){

                $convidado = new Convidado();
                $convidado->inserirConvidado($nome,$telefone,$fk_presente);

                header("Location: ".BASE_URL."obrigado");

            }else{
                $dados['aviso'] = "Preencha todos os campos";
            }
        }

        $this->loadTemplate('home',$dados);
    }
}