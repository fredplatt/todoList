<?php

namespace Todo\Controllers;

class ListModel {
    public $db;
    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getList()
    {
        $query = $this->db->prepare("SELECT `todo`, `completed` FROM `todo_table`");
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
}