<?php
/**
 * Description of menuModel
 *
 * @author MSeixas
 */
class menuModel extends Model{
        public $_table = 'menu';

        public function listMenu($tipo= null){
        $where = $tipo.' AND excluido IS NOT TRUE';
        return $this->read($where,null,null,'descricao ASC');
    }
}
