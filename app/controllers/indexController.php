<?php
/**
 * Description of indexController
 *
 * @author MSeixas
 */
class indexController extends Controller{
    
        public function index(){
            $this->view('Index');
        }
        public function novos(){
            $this->view('produtosNovos');
        }
    }