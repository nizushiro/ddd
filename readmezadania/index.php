<?php

interface Sqlinterface {
    public function findAll($table);
    public function find($table, $id);
    public function readOne($table, $id);
    public function readFirstTen($table);
}

abstract class Database {
    protected $connection;

    public function connect() {
        $this->connection = mysqli_connect("localhost", "root", "", "mikudayo");
        return $this->connection;
    }

    abstract public function createDatabase($name);
    abstract public function createTable($sql);
    abstract public function readTable($table);
    abstract public function updateTable($sql, $params);
}

class Mysqldb extends Database implements Sqlinterface {
    public function createDatabase($name) {
        return mysqli_query($this->connection, "CREATE DATABSE IF NOT EXISTS $name")
    }
    public function createTable(sql)
}