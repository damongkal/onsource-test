<?php
namespace App\Api;

class users {

    private $mysqli;

    public function __construct($mysqli) {
        $this->mysqli = $mysqli;
    }

    public function getAll() {
        $result = $this->mysqli->query("
            SELECT *
            FROM `users`
        ");
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        return json_encode($rows);
    }

    public function fetch(int $id) {
        $sql_f = sprintf("
            SELECT *
            FROM `users`
            WHERE `id` = %u",
                (int) $id);
        $result = $this->mysqli->query($sql_f);
        $row = $result->fetch_assoc();
        return json_encode($row);
    }

    public function create(userRecord $userRecord) {
        $sql_f = sprintf("
            INSERT INTO `users`
            (`first_name`,`last_name`, `created_at`, `updated_at`)
            VALUES ('%s','%s',NOW(),NOW())",
                $this->mysqli->real_escape_string($userRecord->first_name),
                $this->mysqli->real_escape_string($userRecord->last_name)
        );
        $this->mysqli->query($sql_f);
        $userRecord->id = $this->mysqli->insert_id;
        return $this->fetch($userRecord->id);
    }

    public function update(userRecord $userRecord) {
        $sql_f = sprintf("
            UPDATE `users`
            SET `first_name` = '%s',
                `last_name` = '%s',
                `updated_at` = NOW()
            WHERE `id` = %u",
                $this->mysqli->real_escape_string($userRecord->first_name),
                $this->mysqli->real_escape_string($userRecord->last_name),
                (int) $userRecord->id
        );
        $this->mysqli->query($sql_f);
        return $this->fetch($userRecord->id);
    }

    public function delete(int $id) {
        $sql_f = sprintf("
                DELETE FROM `users`
                WHERE `id` = %u", (int) $id);
        $this->mysqli->query($sql_f);
        return json_encode($this->mysqli->affected_rows);
    }

}

class userRecord {

    public $id;
    public $first_name;
    public $last_name;
    public $created_at;
    public $updated_at;

}
