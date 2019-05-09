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
        $query = $this->db->prepare("SELECT `id`, `todo`, `completed` FROM `todo_table`");
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function addTask($newItem)
    {
            $query = $this->db->prepare("INSERT INTO `todo_table` (todo) VALUE (:newItem)");
            $query->bindParam(':newItem', $newItem);
            $query->execute();
    }
}