<?php

class Model{
    protected $db;
    public $_table;
    
    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=sistemapv', 'root', '');
    }
    public function insert( Array $data ){
        $campos = implode(", ", array_keys($data));
        $valores = "'".implode("','", array_values($data))."'";
        $sql = "INSERT INTO `{$this->_table}` ({$campos}) VALUES ({$valores})";
        $this->db->query($sql);
    }
    
    public function read( $where = null, $limit = null, $offset = null , $orderby =null){
        $where = ($where != null ? "WHERE {$where}" : "");
        $limit = ($limit != null ? "LIMIT {$limit}" : "");
        $offset = ($offset != null ? "OFFSET {$offset}" : "");
        $orderby = ($orderby != null ? "ORDER BY {$orderby}" : "");
        $sql = "SELECT * FROM `{$this->_table}` {$where} {$orderby} {$limit} {$offset}";
        $q = $this->db->query($sql);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        return $q->fetchAll();
    }
    public function update(Array $data, $where){
        foreach ($data as $ind => $val){
            $campos[] = "{$ind} = '{$val}'";
        }
        $campos = implode(', ', $campos);
        $sql = "UPDATE `{$this->_table}` SET {$campos} WHERE {$where}";
        return $this->db->query($sql);
    }
    public function delete($where){
        $sql = "DELETE FROM `{$this->_table}` WHERE {$where}";
        return $this->db->query($sql);
    }
}
