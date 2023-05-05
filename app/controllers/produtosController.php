<?php

class Produtos extends Controller
{

    public function index()
    {
        $this->view('produtosIndex');
    }

    public function novos()
    {
        $this->view('produtosNovos');
    }
}
