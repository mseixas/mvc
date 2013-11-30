<?php
/**
 * Description of pessoas
 *
 * @author MSeixas
 */
class pessoas extends Model {
    public $_table = 'pessoas';

        public function listAllPessoas(){
        $where = 'excluido IS NOT TRUE';
        return $this->read($where,null,null,'descricao ASC');
    }
}
