<?php
/**
 * Description of Controller
 *
 * @author MSeixas
 */
class Controller extends System{
    protected function view($nome){
        return require_once('app/views/'.$nome.'.phtml');
        exit();
    }
}
