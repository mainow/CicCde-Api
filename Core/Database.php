<?php

class DataBase {
    /**
     * Database
     * * Permite conectar y hacer queries a una base de datos
     */
    function __construct(DataBaseInfo $databaseInfo) {
        $this->host = $databaseInfo->host;
        $this->user = $databaseInfo->user;
        $this->pwd = $databaseInfo->pwd;
        $this->database = $databaseInfo->database;
    }

    function connection() {
        return mysqli_connect($this->host, $this->user, $this->pwd, $this->database);
    }

    function query(string $sql) {
        $q = mysqli_query($this->connection(), $sql);
        if ($this->validQuery($q)) return $this->setupQueryResponse($q);
        return false;
    }

    function validQuery($query) {
        return $query;
    }

    function setupQueryResponse($query) {
        return !is_bool($query) && $query->num_rows == 0 ? true : $query;
    }
}