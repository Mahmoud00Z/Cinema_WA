<?php
abstract class Model{
    protected static string $table;
    protected static string $primary_key = "id";

    protected static function find(mysqli $mysqli, int $id)
        {
            $sql = sprintf(
                "SELECT * FROM %s WHERE %s = ?",
                static::$table,
                static::$primary_key
            );
            $query = $mysqli->prepare($sql);
            $query->bind_param("i", $id);
            $query->execute();
            $data = $query->get_result()->fetch_assoc();
            return $data ? new static($data): null;
        }
}
