<?php
class Controller {

    public $url;
    public $view_nome;

    public function Url (){

        $this->url = $_SERVER['DOCUMENT_ROOT']."/sites/FacilConsulta/src/";

        if (isset($_SERVER['REQUEST_METHOD']) == "GET") {

            //echo $_SERVER['REQUEST_METHOD'];

        }
        else {
            echo "ELSE";

        }

    }

    public function Template(){

        require_once $this->url."view/corpo.php";

    }

    public function View ($view_nome){

        if ( !empty($view_nome)) {
            $view_arquivo = $this->url."view/".$view_nome.".php";
        }
        else {
            $view_arquivo = $this->url."view/lista_medicos.php";
        }

        require_once $view_arquivo;

    }
    
}