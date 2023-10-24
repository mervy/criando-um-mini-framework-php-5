<?php

class Produtos extends Controller
{

    public function index()
    {
        $db = new Produtos_Model();
        $db->insert ('posts', array (
            "titulo" => "titulo aqui 2",
            "resumo" => "resumo aqui 2",
            "conteudo" => "conteudo aqui 2",
            "comentarios" => "200"
        ));
        //$this->view('produtosIndex');
    }

    public function novos()
    {
        $this->view('produtosNovos');
    }
}
