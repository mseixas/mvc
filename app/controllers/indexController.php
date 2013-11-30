<?php

class indexController extends Controller {

    public function index_action() {
        $model = new menuModel();
        $menu_cadastros = $model->listMenu('cadastros IS TRUE');
        $menu_consultas = $model->listMenu('consultas IS TRUE');
        $menu_relatorios = $model->listMenu('relatorios IS TRUE');
        
        $data['cadastros'] = $menu_cadastros;
        $data['consultas'] = $menu_consultas;
        $data['relatorios'] = $menu_relatorios;
        
        $this->view('index', $data);
    }
}
