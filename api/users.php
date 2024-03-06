<?php

class users {

    private $mysqli;

    public function __construct($mysqli) {
        $this->mysqli = $mysqli;
    }

    public function getAll() {
        $result = $this->mysqli->query("SELECT * FROM `users`");
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        return json_encode($rows);
    }

    public function fetch(int $id) {
        $sql_f = sprintf('SELECT * FROM `users` WHERE `id` = %u', $this->mysqli->real_escape_string($id));
        $result = $this->mysqli->query($sql_f);
        $row = $result->fetch_assoc();
        return json_encode($row);
    }

}
