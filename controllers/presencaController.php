<?php
class presencaController extends Controller {

    //Presenças no casamento

    public function __construct(){
        parent::__construct();
    }

    public function index() {
        $dados = array();
        $this->loadTemplate('presenca', $dados);
    }

    public function criacao(){
        $dados = array('aviso' => '');

        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            $nome = addslashes($_POST['nome']); 
            $telefone = addslashes($_POST['telefone']); 
             
            if(!empty($nome) && !empty($telefone)){

                $presenca = new Presenca();
                $presenca->inserirPresenca($nome,$telefone);

                header("Location: ".BASE_URL."obrigado");


            }else{
                $dados['aviso'] = "Preencha todos os campos";
            }
        }

        $this->loadTemplate('home',$dados);
    }
}