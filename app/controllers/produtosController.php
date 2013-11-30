<?php
    class Produtos extends Controller{
        public function index_action(){
            $this->view('produtosNovos');
        }
        public function novos(){
            $this->view('produtosNovos');
        }
    }