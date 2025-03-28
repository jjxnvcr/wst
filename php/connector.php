<?php
    function createConnection() {
        $server = ;
        $username = ;
        $port = ;
        $password = ;
        $database = ;

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