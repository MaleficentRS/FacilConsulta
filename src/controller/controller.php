<?php

class Controller {

    public $url;

    public function Url(){

        $this->url = $_SERVER['DOCUMENT_ROOT']."/sites/FacilConsulta/src/";

    }

    public function Template(){

        $template_arquivo = $this->url."view/corpo.php";

        require_once $template_arquivo;
      
    }

    public function View ($view_nome){

        $view_arquivo = $this->url."view/".$view_nome.".php";

        if (!empty($view_nome)) {
            require_once "view/".$view_nome.".php";
        }
        else {
            require_once "view/lista_medicos.php";
        }

    }
}