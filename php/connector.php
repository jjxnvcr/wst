<?php
    function createConnection() {
        $server = getenv("MYSQLHOST");
        $username = getenv("MYSQLUSER");
        $port = getenv("MYSQLPORT");
        $password = getenv("MYSQLPASSWORD");
        $database = getenv("MYSQLDATABASE");

        return new mysqli($server, $username, $password, $database, $port);
    }

    function closeConnection($connection) {
        $connection->close();
    }

    function query($connection, $statement) {
        $query = mysqli_query($connection, $statement);

        if ($query) {
            closeConnection($connection);
            return $query;
        }

        return null;
    }

    function safe_query($connection, $statement) {
        $query = mysqli_query($connection, $statement);

        if ($query) {
            return $query;
        }

        return null;
    }
?>